<?php
interface TransactionSQL
{
    public const SELECT_ALL_TRANSACTION = "SELECT * FROM transaction";
    public const INSERT_TRANSACTION_BY_UTILISATEUR_DATE = "INSERT INTO transaction(idUtilisateur, date) VALUES (:idUtilisateur, :date)";

}