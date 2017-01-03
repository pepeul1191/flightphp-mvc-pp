<?php

class Configuration
{
	public static $data;

	public static function init($path, $base_url, $db)
	{
		self::$data["path"] = $path;
		self::$data["base_url"] = $base_url;
		if($db){
			self::$data["db"] = $db;
		}
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