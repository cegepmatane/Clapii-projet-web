<?php
include_once __DIR__."/../PhpSQL/TransactionSQL.php";
include_once __DIR__."/../Modele/Transaction.php";
include_once __DIR__."/../Donnee/BaseDeDonnees.php";

class TransactionDAO implements TransactionSQL
	{
		public static function listerTransactions()
		{

			$connexion = BaseDeDonnees::getInstance()->getConnexion();

			$demandeTransactions = $connexion->prepare(self::SELECT_ALL_TRANSACTION);
			$demandeTransactions->execute();
            $transactionsTableau = $demandeTransactions->fetchAll(PDO::FETCH_ASSOC);

            for($i = 0; $i < count($TransactionsTableau); $i++) {
                $transactions[$i] = new Transaction($TransactionsTableau[$i]['id'],
                $transactionsTableau[$i]['idUtilisateur'],
                $transactionsTableau[$i]['date']);
            }
			return $Transactions;
		}

		public static function insererTransaction($transaction)
        {
            $connexion = BaseDeDonnees::getInstance()->getConnexion();
            $demandeTransaction = $connexion->prepare(self::INSERT_TRANSACTION_BY_UTILISATEUR_DATE);
            $idUtilisateur = $transaction->getIdUtilisateur();
            $date = $transaction->getDate();
            $demandeTransaction->bindParam(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);
            $demandeTransaction->bindParam(':date', $date, PDO::PARAM_STR);
			$demandeTransaction->execute();
        }
	}
?>
