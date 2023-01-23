<?php
class Model
{
    private $bd;
    private static $instance = null;

    private function __construct()
    {
        $this->bd = new PDO("pgsql:host=192.168.0.46;dbname=pi", "pi", "raspi");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }

    public static function getModel()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }


}