<?php
namespace empress;

class General {
	/**
	 * Get current language being used
	 */
	public static function isPersian() {
		if (get_locale() == 'fa_IR') {
			return true;
		}

		return false;
	}
}