<?php

namespace Utilities;

/**
 * Thrown when an internal error occurs
 */
class appException extends \Exception
{

	public function __construct($message, $code = 0)
	{
		parent::__construct($this->formatException($message), $code, null);
	}

	private function formatException($m)
	{
		return "Application (internal) error! " . $m;
	}

}

/**
 * Thrown when a database-related error occurs
 */
class dbException extends \Exception
{

	public function __construct($message, $code = 0)
	{
		parent::__construct($this->formatException($message), $code, null);
	}

	private function formatException($m)
	{
		return "Database error! " . $m;
	}

}

/**
 * Thrown when invalid input is passed to a function
 */
class inputException extends \Exception
{

	public function __construct($message, $code = 0)
	{
		parent::__construct($this->formatException($message), $code, null);
	}

	private function formatException($m)
	{
		return "Input error! Invalid arguments passed to " . $m;
	}

}
