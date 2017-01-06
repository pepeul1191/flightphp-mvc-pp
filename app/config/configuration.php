<?php

class Configuration
{
	public static $data;

	public static function init($path, $base_url, $public_url, $db, $session_time)
	{
		self::$data["path"] = $path;
		self::$data["base_url"] = $base_url;
		self::$data["public_url"] = $public_url;
		if($db){
			self::$data["db"] = $db;
		}
		self::$data["session_time"] = $session_time;
	}

	public static function get($key)
	{
		return self::$data[$key];
	}

	public static function set($key, $value)
	{
		return self::$data[$key] = $value;
	}

}

?>