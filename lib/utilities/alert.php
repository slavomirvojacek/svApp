<?php

namespace Utilities;

class Alert
{

	/**
	 * Renders html formatted alert
	 * @param mixed $r
	 * @param string $cl
	 * @return string
	 */
	public static function render($r, $cl = "alert")
	{
		$a = '';

		if (is_array($r)) {
			foreach ($r as $k)
			{
				$a .= '<div class="' . $cl . '">';
				$a .= '<p>' . $k . '</p></div>' . BR;
			}
		}
		elseif (is_bool($r) && $r === true) {
			$a .= '<div class="alert success">';
			$a .= '<p>';
			$a .= 'Well done! You filled out the form successfully.';
			$a .= '</p></div>' . BR;
		}
		elseif (is_string($r)) {
			$a .= '<div class="' . $cl . '">';
			$a .= '<p>' . $r . '</p></div>' . BR;
		}
		else {
			$a .= '<div class="alert error">';
			$a .= '<p>';
			$a .= 'Oh no! An unknown error occured.';
			$a .= '</p></div>' . BR;
		}

		return $a;
	}

}
