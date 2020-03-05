<?php

include_once __DIR__."/ParametresConnection.php";


class BaseDeDonnees
{
    private $basededonnees = null;

    private static $instance = null;



    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new BaseDeDonnees();
        }
        return self::$instance;
    }

    public function getConnexion(){
        return $this->basededonnees;
    }

    public function __construct()
    {
        $dsn = 'mysql:dbname='.ParametresConnection::$base.';host=' . ParametresConnection::$hote. '';
        $this->basededonnees = new PDO($dsn, ParametresConnection::$usager, ParametresConnection::$motdepasse);
        $this->basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


}


