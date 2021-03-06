<?php
/**
 * Akeeba Engine
 * The modular PHP5 site backup engine
 * @copyright Copyright (c)2006-2015 Nicholas K. Dionysopoulos
 * @license   GNU GPL version 3 or, at your option, any later version
 * @package   akeebaengine
 *
 */

namespace Akeeba\Engine\Dump;

// Protection against direct access
defined('AKEEBAENGINE') or die();

use Psr\Log\LogLevel;
use Akeeba\Engine\Base\Part;
use Akeeba\Engine\Factory;
use Akeeba\Engine\Dump\Base as DumpBase;

class Reverse extends Part
{
	/** @var DumpBase */
	private $_engine = null;

	/**
	 * Implements the constructor of the class
	 *
	 * @return Reverse
	 */
	public function __construct()
	{
		parent::__construct();
		Factory::getLog()->log(LogLevel::DEBUG, __CLASS__ . " :: New instance");
	}

	protected function _prepare()
	{
		Factory::getLog()->log(LogLevel::DEBUG, __CLASS__ . " :: Processing parameters");

		// Get the DB connection parameters
		if (is_array($this->_parametersArray))
		{
			$driver = array_key_exists('driver', $this->_parametersArray) ? $this->_parametersArray['driver'] : 'mysql';
			$host = array_key_exists('host', $this->_parametersArray) ? $this->_parametersArray['host'] : '';
			$port = array_key_exists('port', $this->_parametersArray) ? $this->_parametersArray['port'] : '';
			$username = array_key_exists('username', $this->_parametersArray) ? $this->_parametersArray['username'] : '';
			$username = array_key_exists('user', $this->_parametersArray) ? $this->_parametersArray['user'] : $username;
			$password = array_key_exists('password', $this->_parametersArray) ? $this->_parametersArray['password'] : '';
			$database = array_key_exists('database', $this->_parametersArray) ? $this->_parametersArray['database'] : '';
			$prefix = array_key_exists('prefix', $this->_parametersArray) ? $this->_parametersArray['prefix'] : '';
		}

		if (($driver == 'mysql') && !function_exists('mysql_connect'))
		{
			$driver = 'mysqli';
		}

		$options = array(
			'driver'   => $driver,
			'host'     => $host . ($port != '' ? ':' . $port : ''),
			'user'     => $username,
			'password' => $password,
			'database' => $database,
			'prefix'   => is_null($prefix) ? '' : $prefix
		);
		$db = Factory::getDatabase($options);

		$driverType = $db->getDriverType();
		if ($driverType == 'mssql')
		{
			$driverType = 'sqlsrv';
		}
		$className = '\\Akeeba\\Engine\\Dump\\Reverse\\' . ucfirst($driverType);

		Factory::getLog()->log(LogLevel::DEBUG, __CLASS__ . " :: Instanciating new reverse engineering database dump engine $className");
		if (!class_exists($className, true))
		{
			$this->setState('error', 'Akeeba Engine does not have a reverse engineering dump engine for ' . $driverType . ' databases');
		}
		else
		{
			$this->_engine = new $className;
			$this->_engine->setup($this->_parametersArray);
			$this->_engine->callStage('_prepare');
			$this->setState($this->_engine->getState(), $this->_engine->getError());
		}
	}

	protected function _finalize()
	{
		$this->_engine->callStage('_finalize');
		$this->setState($this->_engine->getState(), $this->_engine->getError());
	}

	protected function _run()
	{
		$this->_engine->callStage('_run');
		$this->setState($this->_engine->getState(), $this->_engine->getError());
		$this->setStep($this->_engine->getStep());
		$this->setSubstep($this->_engine->getSubstep());
		$this->partNumber = $this->_engine->partNumber;
	}
}