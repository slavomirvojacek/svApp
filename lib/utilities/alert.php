<?php

namespace Utilities;

class Alert
{

	/**
	 * Renders html formatted alert
	 * @param mixed $r
	 * @param string $cl
	 * @param string $m
	 * @return string
	 */
	public static function render($r, $cl = "alert")
	{
		$a = '';

		if (is_array($r)) {
			foreach ($r as $k)
			{
				$a .= '<div class="' . $cl . '">';
				$a .= '<p>' . $k . '</p></div>' . PHP_EOL;
			}
		}
		elseif (is_bool($r) && $r === true) {
			$a .= '<div class="alert success">';
			$a .= '<p>';
			$a .= 'Well done! You filled out the form successfully.';
			$a .= '</p></div>' . PHP_EOL;
		}
		elseif (is_string($r)) {
			$a .= '<div class="' . $cl . '">';
			$a .= '<p>' . $r . '</p></div>' . PHP_EOL;
		}
		else {
			$a .= '<div class="alert error">';
			$a .= '<p>';
			$a .= 'Oh no! An unknown error occured.';
			$a .= '</p></div>' . PHP_EOL;
		}

		return $a;
	}

}
