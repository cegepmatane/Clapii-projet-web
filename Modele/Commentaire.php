<?php


class Commentaire
{
    protected $id;
    protected $id_utilisateur;
    protected $id_film;
    protected $text;

    /**
     * commentaire constructor.
     * @param $id
     * @param $id_utilisateur
     * @param $id_film
     * @param $text
     */
    public function __construct($id, $id_utilisateur, $id_film, $text)
    {
        $this->id = $id;
        $this->id_utilisateur = $id_utilisateur;
        $this->id_film = $id_film;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * @param mixed $id_utilisateur
     */
    public function setIdUtilisateur($id_utilisateur): void
    {
        $this->id_utilisateur = $id_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getIdFilm()
    {
        return $this->id_film;
    }

    /**
     * @param mixed $id_film
     */
    public function setIdFilm($id_film): void
    {
        $this->id_film = $id_film;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }


}