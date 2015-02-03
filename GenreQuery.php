<?php
error_reporting(-1);
require_once __DIR__ . '/Database.php';
class GenreQuery extends Database {
    public $genres;
    public function getAll()
    {
        $sql = "
        SELECT *
        FROM genres
        ORDER BY genre ASC
        ";

        $statement = static::$pdo->prepare($sql);
        $statement->execute();
        $_genres = $statement->fetchAll(PDO::FETCH_OBJ);
        return $this->genres;

    }


}