<?php
include_once "./phpsql/filmSQL.php";
include_once "./modele/film.php";
include_once "./donnee/ParametresConnection.php";
class Connection{
    public static $basededonnees = null;
    public static function initialiser()
	{
        $dsn = 'mysql:dbname='.Param::$base.';host=' . Param::$hote. '';
        $basededonnees = new PDO($dsn, Param::$usager, Param::$motdepasse);
        FilmDAO::$basededonnees = new PDO($dsn, Param::$usager, Param::$motdepasse);
        FilmDAO::$basededonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}

class FilmDAO extends Connection implements filmSQL
	{
		public static function listerFilms()
		{

			FilmDAO::initialiser();

			$demandeFilms = FilmDAO::$basededonnees->prepare(filmDAO::SELECT_ALL_FILM);
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
			FilmDAO::initialiser();

			$demandeFilm = FilmDAO::$basededonnees->prepare(FilmDAO::SELECT_FILM_BY_ID);
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
