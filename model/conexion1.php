<?php
class Db
{
	private static $conexion = NULL;
	private function __construct()
	{
	}

	public static function conectar()
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		self::$conexion = new PDO('mysql:host=us-cdbr-east-05.cleardb.net; dbname=heroku_619553700a45b98', 'bcc4441154c3a9', 'b4a4c01d', $pdo_options);
		return self::$conexion;
	}
}