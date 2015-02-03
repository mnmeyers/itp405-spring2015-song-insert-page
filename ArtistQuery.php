<?php
error_reporting(-1);
require_once __DIR__ . '/Database.php';
class ArtistQuery extends Database{
	public function getAll()
	{
		$sql = "
		SELECT id, artist_name
		FROM artists
		ORDER BY artist_name ASC
		";

		$statement = static::$pdo->prepare($sql);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);

	}

}

	
