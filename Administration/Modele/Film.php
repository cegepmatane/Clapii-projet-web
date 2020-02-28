<?php


class Film{

    
    protected $id;
    protected $titre;
    protected $synopsis;
    protected $date;
    protected $casting;
    protected $commentaire;
    /*
    public function __construct(){
        $id = null;
    }

    public function __construct1(int $id){
        $this->id = $id;
    }

    public function __construct2(int $id, string $titre){
        $this->id = $id;
        $this->titre = $titre;
    }

    public function __construct3(int $id, string $titre, string $synopsis){
        $this->id = $id;
        $this->titre = $titre;
        $this->synopsis = $synopsis;
    }
    */
    public function __construct(int $id, string $titre, string $synopsis, string $date){
        $this->id = $id;
        $this->titre = $titre;
        $this->synopsis = $synopsis;
        $this->date = $date;
    }

    function setId(int $id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function  setTitre(string $titre){
        $this->titre = $titre;
    }

    function getTitre(){
        return $this->titre;
    }

    function  setDate(string $date){
        $this->date = $date;
    }

    function getDate(){
        return $this->date;
    }

    function setSynopsis(string $synopsis){
        $this->synopsis = $synopsis;
    }

    function getSynopsis(){
        return $this->synopsis;
    }

}