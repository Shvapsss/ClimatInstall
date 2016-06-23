<?php
/**
 * @package   AkeebaBackup
 * @copyright Copyright (c)2010-2014 Nicholas K. Dionysopoulos
 * @license   GNU General Public License version 3, or later
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  --
 *
 *  Command-line script to schedule the File Alteration Monitor check
 */

// Define ourselves as a parent file
define('_JEXEC', 1);

// Setup and import the base CLI script
$minphp = '5.3.3';
$curdir = __DIR__;

require_once __DIR__ . '/../administrator/components/com_akeeba/assets/cli/base.php';

// Enable Akeeba Engine
define('AKEEBAENGINE', 1);

use Akeeba\Engine\Platform;

/**
 * Akeeba Backup CLI application
 */
class AkeebaBackupCLI extends AkeebaCliBase
{
	public function execute()
	{
		// Get the backup profile and description
		$profile = $this->input->get('profile', 1, 'int');

        if($profile <= 0)
        {
            $profile = 1;
        }

		$version      = AKEEBA_VERSION;
		$date         = AKEEBA_DATE;
		$start_backup = time();
		$memusage     = $this->memUsage();

		if ($this->input->get('quiet', -1, 'int') == -1)
		{
			$year = gmdate('Y');
			echo <<<ENDBLOCK
Akeeba Backup Alternate CRON Helper Script version $version ($date)
Copyright (C) 2010-$year Nicholas K. Dionysopoulos
-------------------------------------------------------------------------------
Akeeba Backup is Free Software, distributed under the terms of the GNU General
Public License version 3 or, at your option, any later version.
This program comes with ABSOLUTELY NO WARRANTY as per sections 15 & 16 of the
license. See http://www.gnu.org/licenses/gpl-3.0.html for details.
-------------------------------------------------------------------------------

ENDBLOCK;
		}

		// Attempt to use an infinite time limit, in case you are using the PHP CGI binary instead
		// of the PHP CLI binary. This will not work with Safe Mode, though.
		$safe_mode = true;
		if (function_exists('ini_get'))
		{
			$safe_mode = ini_get('safe_mode');
		}
		if ( !$safe_mode && function_exists('set_time_limit'))
		{
			if ($this->input->get('quiet', -1, 'int') == -1)
			{
				echo "Unsetting time limit restrictions.\n";
			}
			@set_time_limit(0);
		}
		elseif ( !$safe_mode)
		{
			if ($this->input->get('quiet', -1, 'int') == -1)
			{
				echo "Could not unset time limit restrictions; you may get a timeout error\n";
			}
		}
		else
		{
			if ($this->input->get('quiet', -1, 'int') == -1)
			{
				echo "You are using PHP's Safe Mode; you may get a timeout error\n";
			}
		}
		if ($this->input->get('quiet', -1, 'int') == -1)
		{
			echo "\n";
		}

		// Log some paths
		if ($this->input->get('quiet', -1, 'int') == -1)
		{
			echo "Site paths determined by this script:\n";
			echo "JPATH_BASE : " . JPATH_BASE . "\n";
			echo "JPATH_ADMINISTRATOR : " . JPATH_ADMINISTRATOR . "\n\n";
		}

		// Load the engine
		$factoryPath = JPATH_ADMINISTRATOR . '/components/com_akeeba/engine/Factory.php';
		define('JPATH_COMPONENT_ADMINISTRATOR', JPATH_ADMINISTRATOR . '/components/com_akeeba');
		if ( !file_exists($factoryPath))
		{
			echo "ERROR!\n";
			echo "Could not load the backup engine; file does not exist. Technical information:\n";
			echo "Path to " . basename(__FILE__) . ": " . __DIR__ . "\n";
			echo "Path to factory file: $factoryPath\n";
			die("\n");
		}
		else
		{
			try
			{
				require_once $factoryPath;
			}
			catch (Exception $e)
			{
				echo "ERROR!\n";
				echo "Backup engine returned an error. Technical information:\n";
				echo "Error message:\n\n";
				echo $e->getMessage() . "\n\n";
				echo "Path to " . basename(__FILE__) . ":" . __DIR__ . "\n";
				echo "Path to factory file: $factoryPath\n";
				die("\n");
			}
		}

		$startup_check = true;

		// Assign the correct platform
		Platform::addPlatform('joomla25', JPATH_COMPONENT_ADMINISTRATOR . '/platform/joomla25');

		// Get the live site's URL
		$url = Platform::getInstance()->get_platform_configuration_option('siteurl', '');
		if (empty($url))
		{
			echo <<<ENDTEXT
ERROR:
	This script could not detect your live site's URL. Please visit Akeeba
	Backup's Control Panel page at least once before running this script, so
	that this information can be stored for use by this script.

ENDTEXT;
			$startup_check = false;
		}

		// Get the front-end backup settings
		$frontend_enabled = Platform::getInstance()->get_platform_configuration_option('frontend_enable', '');
		$secret           = Platform::getInstance()->get_platform_configuration_option('frontend_secret_word', '');

		if ( !$frontend_enabled)
		{
			echo <<<ENDTEXT
ERROR:
	Your Akeeba Backup installation's front-end backup feature is currently
	disabled. Please log in to your site's back-end as a Super Administra-
	tor, go to Akeeba Backup's Control Panel, click on the Options icon in
	the top right corner and enable the front-end backup feature. Do not
	forget to also set a Secret Word!

ENDTEXT;
			$startup_check = false;
		}
		elseif (empty($secret))
		{
			echo <<<ENDTEXT
ERROR:
	You have enabled the front-end backup feature, but you forgot to set a
	secret word. Without a valid secret word this script can not continue.
	Please log in to your site's back-end as a Super Administrator, go to
	Akeeba Backup's Control Panel, click on the Options icon in the top
	right corner set a Secret Word.

ENDTEXT;
			$startup_check = false;
		}

		// Detect cURL or fopen URL
		$method = null;
		if (function_exists('curl_init'))
		{
			$method = 'curl';
		}
		elseif (function_exists('fsockopen'))
		{
			$method = 'fsockopen';
		}

		if (empty($method))
		{
			if (function_exists('ini_get'))
			{
				if (ini_get('allow_url_fopen'))
				{
					$method = 'fopen';
				}
			}
		}

		$overridemethod = $this->input->get('method', '', 'cmd');
		if ( !empty($overridemethod))
		{
			$method = $overridemethod;
		}

		if (empty($method))
		{
			echo <<<ENDTEXT
ERROR:
	Could not find any supported method for running the front-end backup
	feature of Akeeba Backup. Please check with your host that at least
	one of the following features are supported in your PHP configuration:
	1. The cURL extension
	2. The fsockopen() function
	3. The fopen() URL wrappers, i.e. allow_url_fopen is enabled
	If neither method is available you will not be able to backup your
	site using this CRON helper script.

ENDTEXT;
			$startup_check = false;
		}

		if ( !$startup_check)
		{
			echo "\n\nBACKUP ABORTED DUE TO CONFIGURATION ERRORS\n\n";
			$this->close(255);
		}

		echo <<<ENDBLOCK
Starting a new backup with the following parameters:
Profile ID    : $profile
Backup Method : $method


ENDBLOCK;

		// Perform the backup
		$url    = rtrim($url, '/');
		$secret = urlencode($secret);
		$url .= "/index.php?option=com_akeeba&view=backup&key={$secret}&noredirect=1&profile=$profile";

		$inLoop    = true;
		$step      = 0;
		$timestamp = date('Y-m-d H:i:s');
		echo "[{$timestamp}] Beginning backing up\n";

		while ($inLoop)
		{
			$timestamp = date('Y-m-d H:i:s');

			$result = $this->fetchURL($url, $method);

			//echo "[{$timestamp}] Got $result\n";

			if (empty($result) || ($result === false))
			{
				echo "[{$timestamp}] No message received\n";
				echo <<<ENDTEXT
ERROR:
	Your backup attempt has timed out, or a fatal PHP error has occurred.
	Please check the backup log and your server's error log for more
	information.

Backup failed.

ENDTEXT;
				$inLoop = false;
			}
			elseif (strpos($result, '301 More work required') !== false)
			{
				if ($step == 0)
				{
					$old_url = $url;
				}
				$step++;
				$url = $old_url . '&task=step&step=' . $step;
				echo "[{$timestamp}] Backup progress signal received\n";
			}
			elseif (strpos($result, '200 OK') !== false)
			{
				echo "[{$timestamp}] Backup finalization message received\n";
				echo <<<ENDTEXT

Your backup has finished successfully.

Please review your backup log file for any warning messages. If you see any
such messages, please make sure that your backup is working properly by trying
to restore it on a local server.

ENDTEXT;
				$inLoop = false;
			}
			elseif (strpos($result, '500 ERROR -- ') !== false)
			{
				// Backup error
				echo "[{$timestamp}] Error signal received\n";
				echo <<<ENDTEXT
ERROR:
	A backup error has occurred. The server's response was:

$result

Backup failed.

ENDTEXT;
				$inLoop = false;
			}
			elseif (strpos($result, '403 ') !== false)
			{
				// This should never happen: invalid authentication or front-end backup disabled
				echo "[{$timestamp}] Connection denied (403) message received\n";
				echo <<<ENDTEXT
ERROR:
	The server denied the connection. Please make sure that the front-end
	backup feature is enabled and a valid secret word is in place.

	Server response: $result

Backup failed.

ENDTEXT;
				$inLoop = false;
			}
			else
			{
				// Unknown result?!
				echo "[{$timestamp}] Could not parse the server response.\n";
				echo <<<ENDTEXT
ERROR:
	We could not understand the server's response. Most likely a backup error
	has occurred. The server's response was:

$result

If you do not see "200 OK" at the end of this output, the backup has failed.

ENDTEXT;
				$inLoop = false;
			}
		}
	}

	/**
	 * Fetches a remote URL using curl, fsockopen or fopen
	 *
	 * @param  string $url    The remote URL to fetch
	 * @param  string $method The method to use: curl, fsockopen or fopen (optional)
	 *
	 * @return string The contents of the URL which was fetched
	 */
	private function fetchURL($url, $method = 'curl')
	{
		switch ($method)
		{
			case 'curl':
				$ch         = curl_init($url);
				$cacertPath = JPATH_ADMINISTRATOR . '/components/com_akeeba/akeeba/assets/cacert.pem';
				if (file_exists($cacertPath))
				{
					@curl_setopt($ch, CURLOPT_CAINFO, $cacertPath);
				}
				@curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				@curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
				@curl_setopt($ch, CURLOPT_HEADER, false);
				@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				@curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				@curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 180);
				@curl_setopt($ch, CURLOPT_TIMEOUT, 180);
				$result = curl_exec($ch);
				curl_close($ch);

				return $result;
				break;

			case 'fsockopen':
				$pos      = strpos($url, '://');
				$protocol = strtolower(substr($url, 0, $pos));
				$req      = substr($url, $pos + 3);
				$pos      = strpos($req, '/');
				if ($pos === false)
				{
					$pos = strlen($req);
				}
				$host = substr($req, 0, $pos);

				if (strpos($host, ':') !== false)
				{
					list($host, $port) = explode(':', $host);
				}
				else
				{
					$host = $host;
					$port = ($protocol == 'https') ? 443 : 80;
				}

				$uri = substr($req, $pos);
				if ($uri == '')
				{
					$uri = '/';
				}

				$crlf = "\r\n";
				$req  = 'GET ' . $uri . ' HTTP/1.0' . $crlf
					. 'Host: ' . $host . $crlf
					. $crlf;

				$fp = fsockopen(($protocol == 'https' ? 'ssl://' : '') . $host, $port);
				fwrite($fp, $req);
				$response = '';
				while (is_resource($fp) && $fp && !feof($fp))
				{
					$response .= fread($fp, 1024);
				}
				fclose($fp);

				// split header and body
				$pos = strpos($response, $crlf . $crlf);
				if ($pos === false)
				{
					return ($response);
				}
				$header = substr($response, 0, $pos);
				$body   = substr($response, $pos + 2 * strlen($crlf));

				// parse headers
				$headers = array();
				$lines   = explode($crlf, $header);
				foreach ($lines as $line)
				{
					if (($pos = strpos($line, ':')) !== false)
					{
						$headers[strtolower(trim(substr($line, 0, $pos)))] = trim(substr($line, $pos + 1));
					}
				}

				//redirection?
				if (isset($headers['location']))
				{
					return $this->fetchURL($headers['location'], $method);
				}
				else
				{
					return ($body);
				}

				break;

			case 'fopen':
				$opts = array(
					'http' => array(
						'method' => "GET",
						'header' => "Accept-language: en\r\n"
					)
				);

				$context = stream_context_create($opts);
				$result  = @file_get_contents($url, false, $context);
				break;
		}

		return $result;
	}
}

// Load the version file
require_once JPATH_ADMINISTRATOR . '/components/com_akeeba/version.php';

// Instanciate and run the application
AkeebaCliBase::getInstance('AkeebaBackupCLI')->execute();