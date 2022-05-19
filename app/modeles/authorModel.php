<?php
function findAuthById(PDO $connexion, int $id){
    $sql = "SELECT *
        FROM authors
        where id = :id;";
    
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}
