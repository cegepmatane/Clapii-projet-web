<?php

include_once "./donnee/ParametresConnection.php";


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
        $dsn = 'mysql:dbname='.Param::$base.';host=' . Param::$hote. '';
        $this->basededonnees = new PDO($dsn, Param::$usager, Param::$motdepasse);
        $this->basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


}


