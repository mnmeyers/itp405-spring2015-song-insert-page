<?php
error_reporting(-1);
require_once __DIR__ . '/Database.php';
class GenreQuery extends Database {
    public function getAll()
    {
        $sql = "
        SELECT *
        FROM genres
        ORDER BY genre ASC
        ";

        $statement = static::$pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);

    }


}