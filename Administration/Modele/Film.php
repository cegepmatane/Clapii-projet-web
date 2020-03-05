<?php


class Film{

    
    protected $id;
    protected $titre;
    protected $synopsis;
    protected $date;
    protected $casting;
    protected $commentaire;
    protected $origine;
    protected $duree;
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
    public function __construct(int $id, string $titre, string $synopsis, string $date, string $origine, string $duree){
        $this->id = $id;
        $this->titre = $titre;
        $this->synopsis = $synopsis;
        $this->date = $date;
        $this->origine = $origine;
        $this->duree = $duree;
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

    function setOrigine(string $origine){
        $this->origine = $origine;
    }

    function getOrigine(){
        return $this->origine;
    }

    function setDuree(string $duree){
        $this->duree = $duree;
    }

    function getDuree(){
        return $this->duree;
    }

}