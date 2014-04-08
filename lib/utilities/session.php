<?php

namespace Utilities;

class Session
{

	private static $instance;

	/**
	 * Defines the time after which session ID gets regenerated
	 * @var int
	 */
	private static $regenTimeout = 900;

	/**
	 * Defines the time after which session is destroyed
	 * @var int
	 */
	private static $destroyTimeout = 3600;

	/**
	 * Current session container
	 * @var array
	 */
	private $session;

	/**
	 * Returns class object
	 * @return object
	 */
	public static function getInstance()
	{
		if (!is_object(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct()
	{
		$this->session = $_SESSION;

		$this->check();
		$this->set("lastActivity", time());
	}

	/**
	 * Returns current session
	 * @return mixed
	 */
	public function get()
	{
		return $this->session["app"];
	}

	/**
	 * Regenerates session id
	 * @return boolean
	 */
	private function check()
	{
		if (!isset($this->session["app"]["lastActivity"])) {
			return false;
		}

		$regen = time() - $this->session["app"]["lastActivity"];
		$destroy = time() - $this->session["app"]["lastActivity"];

		if ($destroy > static::$destroyTimeout) {
			$this->destroy();
		}
		elseif ($regen > static::$regenTimeout) {
			session_regenerate_id();
		}
	}

	/**
	 * Sets a session key
	 * @param string $k
	 * @param mixed $v
	 * @return boolean
	 */
	public function set($k, $v)
	{
		$this->session["app"][$k] = $v;
		$_SESSION["app"][$k] = $v;
	}

	/**
	 * Destroys a session key or a whole session
	 * @param string $k
	 * @return boolean
	 */
	public function destroy($k = true)
	{
		if (is_bool($k) && $k) {
			$this->session["app"] = "";
			unset($_SESSION["app"]);

			return true;
		}

		if (isset($this->session["app"][$k])) {
			$this->session["app"][$k] = "";
			unset($_SESSION["app"][$k]);
		}

		return true;
	}

}
