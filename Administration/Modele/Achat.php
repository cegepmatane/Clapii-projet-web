<?php


class Achat
{
    protected $id;
    protected $idUtilisateur;
    protected $date;

    public function __construct(int $id, string $idUtilisateur, string $date){
        $this->id = $id;
        $this->idUtilisateur = $idUtilisateur;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdUtilisateur(): string
    {
        return $this->idUtilisateur;
    }

    /**
     * @param string $pseudo
     */
    public function setIdUtilisateur(string $idUtilisateur): void
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $nom
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }


}