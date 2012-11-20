<?php
require_once( Director::baseFolder().'/Sanitize/thirdparty/htmlpurifier/HTMLPurifier.auto.php');
class Sanitize {
	static $_config;

	static function set($key, $value) {
		if (!isset(self::$_config)) {
			self::$_config = HTMLPurifier_Config::createDefault();
		}
		self::$_config->set($key, $value);
	}

	static function Purify($input) {
		$purifier = new HTMLPurifier(self::$_config);
		return $purifier->purify($input);
	}
}