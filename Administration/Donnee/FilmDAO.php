<?php
include_once "./PhpSQL/FilmSQL.php";
include_once "./Modele/Film.php";
include_once "./Donnee/BaseDeDonnees.php";


class FilmDAO  implements FilmSQL
	{				
		public static function listerFilms()
		{
            $connexion = BaseDeDonnees::getInstance()->getConnexion();
			$demandeFilms = $connexion->prepare(self::SELECT_ALL_FILM);
			$demandeFilms->execute();
            $filmsTableau = $demandeFilms->fetchAll(PDO::FETCH_ASSOC);
            
            for($i = 0; $i < count($filmsTableau); $i++) {
                //print_r($filmsTableau[$i]['nom']);
                $films[$i] = new Film($filmsTableau[$i]['id'],
                $filmsTableau[$i]['titre'],
                $filmsTableau[$i]['synopsis'], 
                $filmsTableau[$i]['date_sortie'],
                $filmsTableau[$i]['origine'],
                $filmsTableau[$i]['duree']);
            }
			return $films;
		}
		
		public static function detaillerFilm($id)
		{
            $connexion = BaseDeDonnees::getInstance()->getConnexion();
			$demandeFilm = $connexion->prepare(self::SELECT_FILM_BY_ID);
			$demandeFilm->bindParam(':id', $id, PDO::PARAM_INT);
			$demandeFilm->execute();
			//$contrat = $demandeContrat->fetchAll(PDO::FETCH_OBJ)[0];
			$film = $demandeFilm->fetch(PDO::FETCH_ASSOC);
			return new Film($film['id'],
            $film['titre'],
            $film['synopsis'], 
            $film['date_sortie'],
            $film['origine'],
            $film['duree']);
        }
        
        public static function insererFilm($film)
        {
            $connexion = BaseDeDonnees::getInstance()->getConnexion();
            $demandeFilm = $connexion->prepare(self::INSERT_FILM_BY_NOM_DATE_SYNOPSIS);
            $titre = $film->getTitre();
            $date = $film->getDate();
            $synopsis =$film->getSynopsis();
            $demandeFilm->bindParam(':titre', $titre, PDO::PARAM_STR);
            $demandeFilm->bindParam(':date', $date, PDO::PARAM_STR);
            $demandeFilm->bindParam(':synopsis', $synopsis, PDO::PARAM_STR);
			$demandeFilm->execute();
        }

        public static function modifierFilm($film)
        {
            $connexion = BaseDeDonnees::getInstance()->getConnexion();
            $demandeFilm = $connexion->prepare(self::UPDATE_FILM_BY_ID);
            $id = $film->getId();
            $titre = $film->getTitre();
            $date = $film->getDate();
            $synopsis =$film->getSynopsis();
            $demandeFilm->bindParam(':id', $id, PDO::PARAM_INT);
            $demandeFilm->bindParam(':titre', $titre, PDO::PARAM_STR);
            $demandeFilm->bindParam(':date', $date, PDO::PARAM_STR);
            $demandeFilm->bindParam(':synopsis', $synopsis, PDO::PARAM_STR);
			$demandeFilm->execute();
        }
	
		
	}
    

?>