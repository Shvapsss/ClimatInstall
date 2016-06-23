<?php
/**
 *  @package AkeebaBackup
 *  @copyright Copyright (c)2010-2014 Nicholas K. Dionysopoulos
 *  @license GNU General Public License version 3, or later
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

// Enable and include Akeeba Engine
define('AKEEBAENGINE', 1);

use Akeeba\Engine\Platform;
use Akeeba\Engine\Factory;

/**
 * Akeeba Backup CLI application
 */
class AkeebaBackupCLI extends AkeebaCliBase
{
	public function execute()
	{
		// Load the language files
		$paths	 = array(JPATH_ADMINISTRATOR, JPATH_ROOT);
		$jlang	 = JFactory::getLanguage();
		$jlang->load('com_akeeba', $paths[0], 'en-GB', true);
		$jlang->load('com_akeeba', $paths[1], 'en-GB', true);
		$jlang->load('com_akeeba' . '.override', $paths[0], 'en-GB', true);
		$jlang->load('com_akeeba' . '.override', $paths[1], 'en-GB', true);

		// Get the backup profile and description
		$profile	 = $this->getOption('profile', 1, 'int');

        if($profile <= 0)
        {
            $profile = 1;
        }

		$description = $this->getOption('description', 'Command-line backup', 'string');
		$overrides	 = $this->getOption('override', array(), 'array');

		if (!empty($overrides))
		{
			$override_message = "\nConfiguration variables overriden in the command line:\n";
			$override_message .= implode(', ', array_keys($overrides));
			$override_message .= "\n";
		}
		else
		{
			$override_message = "";
		}

		$debugmessage = '';

		if ($this->getOption('debug', -1, 'int') != -1)
		{
			if (!defined('AKEEBADEBUG'))
			{
				define('AKEEBADEBUG', 1);
			}

			if (function_exists('ini_set'))
			{
				ini_set('display_errors', 1);
			}

			if (function_exists('error_reporting'))
			{
				error_reporting(E_ALL);
			}

			$debugmessage = "*** DEBUG MODE ENABLED ***\n";
		}

		$version		 = AKEEBA_VERSION;
		$date			 = AKEEBA_DATE;
		$start_backup	 = time();
		$memusage		 = $this->memUsage();
		$jVersion        = JVERSION;

		$phpversion		 = PHP_VERSION;
		$phpenvironment	 = PHP_SAPI;
		$phpos			 = PHP_OS;

		$verboseMode  = $this->getOption('quiet', -1, 'int') == -1;

		if ($verboseMode)
		{
			$year = gmdate('Y');
			echo <<<ENDBLOCK
Akeeba Backup CLI $version ($date)
Copyright (C) 2010-$year Nicholas K. Dionysopoulos
-------------------------------------------------------------------------------
Akeeba Backup is Free Software, distributed under the terms of the GNU General
Public License version 3 or, at your option, any later version.
This program comes with ABSOLUTELY NO WARRANTY as per sections 15 & 16 of the
license. See http://www.gnu.org/licenses/gpl-3.0.html for details.
-------------------------------------------------------------------------------

You are using Joomla! $jVersion on PHP $phpversion ($phpenvironment)
$debugmessage
Starting a new backup with the following parameters:
Profile ID  $profile
Description "$description"
$override_message
Current memory usage: $memusage


ENDBLOCK;
		}

		// Attempt to use an infinite time limit, in case you are using the PHP CGI binary instead
		// of the PHP CLI binary. This will not work with Safe Mode, though.
		$safe_mode = true;
		if (function_exists('ini_get'))
		{
			$safe_mode = ini_get('safe_mode');
		}
		if (!$safe_mode && function_exists('set_time_limit'))
		{
			if ($verboseMode)
			{
				echo "Unsetting time limit restrictions.\n";
			}
			@set_time_limit(0);
		}
		elseif (!$safe_mode)
		{
			if ($verboseMode)
			{
				echo "Could not unset time limit restrictions; you may get a timeout error\n";
			}
		}
		else
		{
			if ($verboseMode)
			{
				echo "You are using PHP's Safe Mode; you may get a timeout error\n";
			}
		}
		if ($verboseMode)
		{
			echo "\n";
		}

		// Log some paths
		if ($verboseMode)
		{
			echo "Site paths determined by this script:\n";
			echo "JPATH_BASE : " . JPATH_BASE . "\n";
			echo "JPATH_ADMINISTRATOR : " . JPATH_ADMINISTRATOR . "\n\n";
		}

		// Load the engine
		$factoryPath = JPATH_ADMINISTRATOR . '/components/com_akeeba/engine/Factory.php';
		define('JPATH_COMPONENT_ADMINISTRATOR', JPATH_ADMINISTRATOR . '/components/com_akeeba');
		define('AKEEBAROOT', JPATH_ADMINISTRATOR . '/components/com_akeeba/akeeba');
		if (!file_exists($factoryPath))
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

		// Assign the correct platform
		Platform::addPlatform('joomla25', JPATH_COMPONENT_ADMINISTRATOR . '/platform/joomla25');

		// Forced CLI mode settings
		define('AKEEBA_PROFILE', $profile);
		define('AKEEBA_BACKUP_ORIGIN', 'cli');

		// Load the profile
		Platform::getInstance()->load_configuration($profile);

		// Reset Kettenrad and its storage
		Factory::resetState(array(
			'maxrun' => 0
		));

		Factory::getFactoryStorage()->reset(AKEEBA_BACKUP_ORIGIN);

		// Setup
		$kettenrad = Factory::getKettenrad();

		$options	 = array(
			'description'	 => $description,
			'comment'		 => ''
		);

		if (!empty($overrides))
		{
			$platformOverrides = Platform::getInstance()->configOverrides;
			Platform::getInstance()->configOverrides = array_merge($platformOverrides, $overrides);
		}

		$kettenrad->setup($options);

		// Dummy array so that the loop iterates once
		$array = array(
			'HasRun' => 0,
			'Error'	 => ''
		);

		$warnings_flag = false;

		while (($array['HasRun'] != 1) && (empty($array['Error'])))
		{
			// Recycle the database conenction to minimise problems with database timeouts
			$db = Factory::getDatabase();
			$db->close();
			$db->open();

			Factory::getLog()->open(AKEEBA_BACKUP_ORIGIN);
			Factory::getLog()->unpause();

			// Apply overrides in the command line
			if (!empty($overrides))
			{
				$config = Factory::getConfiguration();

				foreach ($overrides as $key => $value)
				{
					$config->set($key, $value);
				}
			}

			// Apply engine optimization overrides
			$config = Factory::getConfiguration();
			$config->set('akeeba.tuning.min_exec_time', 0);
			$config->set('akeeba.tuning.nobreak.beforelargefile', 1);
			$config->set('akeeba.tuning.nobreak.afterlargefile', 1);
			$config->set('akeeba.tuning.nobreak.proactive', 1);
			$config->set('akeeba.tuning.nobreak.finalization', 1);
			$config->set('akeeba.tuning.settimelimit', 0);
			$config->set('akeeba.tuning.nobreak.domains', 0);

			$kettenrad->tick();

			Factory::getTimer()->resetTime();

			$array		 = $kettenrad->getStatusArray();

			Factory::getLog()->close();

			$time		 = date('Y-m-d H:i:s \G\M\TO (T)');
			$memusage	 = $this->memUsage();

			$warnings		 = "no warnings issued (good)";
			$stepWarnings	 = false;

			if (!empty($array['Warnings']))
			{
				$warnings_flag	 = true;
				$warnings		 = "POTENTIAL PROBLEMS DETECTED; " . count($array['Warnings']) . " warnings issued (see below).\n";
				foreach ($array['Warnings'] as $line)
				{
					$warnings .= "\t$line\n";
				}
				$stepWarnings = true;
				$kettenrad->resetWarnings();
			}

			if (($verboseMode) || $stepWarnings)
				echo <<<ENDSTEPINFO
Last Tick   : $time
Domain      : {$array['Domain']}
Step        : {$array['Step']}
Substep     : {$array['Substep']}
Memory used : $memusage
Warnings    : $warnings


ENDSTEPINFO;
		}

		// Clean up
		Factory::getFactoryStorage()->reset(AKEEBA_BACKUP_ORIGIN);

		if (!empty($array['Error']))
		{
			echo "An error has occurred:\n{$array['Error']}\n\n";

			$exitCode = 2;
		}
		else
		{
			if ($verboseMode)
			{
				echo "Backup job finished successfully after approximately " . $this->timeago($start_backup, time(), '', false) . "\n";
			}

			$exitCode = 0;
		}

		if ($warnings_flag && ($verboseMode))
		{
			$exitCode = 1;
			echo "\n" . str_repeat('=', 79) . "\n";
			echo "!!!!!  W A R N I N G  !!!!!\n\n";
			echo "Akeeba Backup issued warnings during the backup process. You have to review them\n";
			echo "and make sure that your backup has completed successfully. Always test a backup with\n";
			echo "warnings to make sure that it is working properly, by restoring it to a local server.\n";
			echo "DO NOT IGNORE THIS MESSAGE! AN UNTESTED BACKUP IS AS GOOD AS NO BACKUP AT ALL.\n";
			echo "\n" . str_repeat('=', 79) . "\n";
		}
		elseif ($warnings_flag)
		{
			$exitCode = 1;
		}

		if ($verboseMode)
		{
			echo "Peak memory usage: " . $this->peakMemUsage() . "\n\n";
		}

		$this->close($exitCode);
	}
}

// Load the version file
require_once JPATH_ADMINISTRATOR . '/components/com_akeeba/version.php';

// Instanciate and run the application
AkeebaCliBase::getInstance('AkeebaBackupCLI')->execute();