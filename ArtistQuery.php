<?php
error_reporting(-1);
require_once __DIR__ . '/Database.php';
class ArtistQuery extends Database{
	public $artists;
	public function getAll()
	{
		$sql = "
		SELECT artist_name
		FROM artists
		ORDER BY artist_name ASC
		";

		$statement = $pdo->prepare($sql);
		$statement->execute();
		$artists = $statement->fetchAll(PDO::FETCH_OBJ);
		return $this->artists;

	}

}
	
	
