<?php

    function getArticles (PDO $pdo, int $limit = 5) : array
    {

        $query = "SELECT * FROM article ORDER BY id DESC LIMIT :limit";
        $req = $pdo->prepare($query);
        $req->bindParam(":limit", $limit, PDO::PARAM_INT);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }