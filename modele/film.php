<?php


class film
{
    private int $id;
    private string $titre;
    private string $synopsis;
    private array $casting;
    private array $commentaire;

    function __construct(){
        $id = null;
    }

    function __construct1(int $id){
        $this->id = $id;
    }

    function __construct2(int $id, string $titre){
        $this->id = $id;
        $this->titre = $titre;
    }

    function __construct3(int $id, string $titre, string $synopsis){
        $this->id = $id;
        $this->titre = $titre;
        $this->synopsis = $synopsis;
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

    function setSynopsis(string $synopsis){
        $this->synopsis = $synopsis;
    }

    function getSynopsis(){
        return $this->synopsis;
    }

}