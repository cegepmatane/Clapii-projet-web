<?php
include_once __DIR__ . "/../PhpSQL/AchatSQL.php";
include_once __DIR__ . "/../Modele/Achat.php";
include_once __DIR__ . "/../Donnee/BaseDeDonnees.php";

class AchatDAO implements AchatSQL
{
    public static function listerAchats()
    {

        $connexion = BaseDeDonnees::getInstance()->getConnexion();

        $demandeAchats = $connexion->prepare(self::SELECT_ALL_ACHAT);
        $demandeAchats->execute();
        $achatsTableau = $demandeAchats->fetchAll(PDO::FETCH_ASSOC);

        $achats = [];

        for ($i = 0; $i < count($achatsTableau); $i++) {
            $achats[$i] = new Achat($achatsTableau[$i]['id'],
                $achatsTableau[$i]['id_utilisateur'],
                $achatsTableau[$i]['date']);
        }
        return $achats;

    }

    public static function insererAchat($achat)
    {
        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeAchat = $connexion->prepare(self::INSERT_ACHAT_BY_UTILISATEUR_DATE);
        $idUtilisateur = $achat->getIdUtilisateur();
        $date = $achat->getDate();
        $demandeAchat->bindParam(':id_utilisateur', $idUtilisateur, PDO::PARAM_INT);
        $demandeAchat->bindParam(':date', $date, PDO::PARAM_STR);
        $demandeAchat->execute();
    }
}

?>
