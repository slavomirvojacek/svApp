<?php

namespace Utilities;

use Template\Url;

class Debug
{

	/**
	 * Throws errors
	 * @param mixed $i
	 * @throws exception
	 */
	public static function err($i)
	{
		if (DEBUG) {
			throw $i;
		}
		else {
			$f = APP_DIR . "/error_log";
			$e = date("d M Y G:i:s", time()) . " => " . $i . BR;
			file_put_contents($f, $e, FILE_APPEND | LOCK_EX);
		}

		return true;
	}

	/**
	 * Generates an app stat bar
	 * @global array $appUsage
	 * @return string
	 */
	public static function getStats()
	{
		global $app;

		$appUsageN = getrusage();
		$url = Url::parseUrl();

		$s = $app["usage"]["ru_utime.tv_usec"] + $app["usage"]["ru_stime.tv_usec"];
		$f = $appUsageN["ru_utime.tv_usec"] + $appUsageN["ru_stime.tv_usec"];
		$d = (($f - $s) / 1000) . " ms";

		$out = '<div id="appInfo">';
		$out .= '<strong>Execution time:</strong> ' . $d;
		$out .= ' :: <strong>Language:</strong> ' . $app["lang"];
		$out .= ' :: <strong>Dependencies:</strong> ' . print_r($url, true);
		$out .= '</div>';

		return $out;
	}

}
