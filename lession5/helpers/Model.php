<?php

class Model
{
	static $pdo = null;

	/**
	 * Get connection command to PDO
	 * 
	 * @example static::getCommand()->execute();
	 * @example static::getCommand()->run();
	 * 
	 * @return [type] [description]
	 */
	public static function getCommand()
	{
		if (static::$pdo == null) {
			static::$pdo = new PDO('mysql:host=localhost;dbname=training;charset=utf8', 'root', 'root');
		}
		return static::$pdo;
	}

	/**
	 * Set model data
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function assign($data)
	{
		$data = (array) $data;
		foreach($data as $k => $v) {
			if (is_string($k)) {
				$this->{$k} = $v;
			}
		}
	}
}