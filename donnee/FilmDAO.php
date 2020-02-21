<?php
include_once "./phpsql/filmSQL.php";
include_once "./modele/film.php";
include_once "./donnee/BaseDeDonnees.php";

class FilmDAO implements filmSQL
	{
		public static function listerFilms()
		{

			$connexion = BaseDeDonnees::getInstance()->getConnexion();

			$demandeFilms = $connexion->prepare(self::SELECT_ALL_FILM);
			$demandeFilms->execute();
            $filmsTableau = $demandeFilms->fetchAll(PDO::FETCH_ASSOC);

            for($i = 0; $i < count($filmsTableau); $i++) {
                $films[$i] = new film($filmsTableau[$i]['id'],
                $filmsTableau[$i]['titre'],
                $filmsTableau[$i]['synopsis'],
                $filmsTableau[$i]['date_sortie']);
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
			return new film($film['id'],
            $film['titre'],
            $film['synopsis'],
            $film['date_sortie']);
		}


	}


?>
