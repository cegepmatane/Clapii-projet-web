<?php


class Commentaire
{
    protected $id;
    protected $idUtilisateur;
    protected $idFilm;
    protected $text;

    /**
     * commentaire constructor.
     * @param $id
     * @param $id_utilisateur
     * @param $idFilm
     * @param $text
     */
    public function __construct($id, $idUtilisateur, $idFilm, $text)
    {
        $this->id = $id;
        $this->idUtilisateur = $idUtilisateur;
        $this->idFilm = $idFilm;
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
        return $this->idUtilisateur;
    }

    /**
     * @param mixed $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur): void
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }

    /**
     * @param mixed $id_film
     */
    public function setIdFilm($idFilm): void
    {
        $this->idFilm = $idFilm;
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