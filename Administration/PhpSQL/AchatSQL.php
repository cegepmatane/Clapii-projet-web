<?php
interface AchatSQL
{
    public const SELECT_ALL_ACHAT = "SELECT * FROM achat";
    public const INSERT_ACHAT_BY_UTILISATEUR_DATE = "INSERT INTO achat(id_utilisateur, date) VALUES (:id_utilisateur, :date)";

}