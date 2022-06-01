<?php
function findAll(PDO $connexion) {
    $sql = 'SELECT *
        FROM posts
        ORDER BY created_at DESC
        LIMIT 10; ';

    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id){
    $sql = "SELECT *
        FROM posts
        where id = :id;";
    
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}

function findRecent(PDO $connexion){
    $sql = 'SELECT p.title, p.created_at, p.image, a.firstname, COUNT(c.id) AS nbrComments
        FROM posts p
        JOIN authors a on p.author_id = a.id
        LEFT JOIN comments c on c.post_id = p.id
        GROUP BY p.title, p.created_at, p.image, a.firstname
        ORDER BY created_at DESC
        LIMIT 3; ';

    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}