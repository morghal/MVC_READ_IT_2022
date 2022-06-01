<?php

function findCat(PDO $connexion) {
    $sql = "SELECT *
        FROM categories
        ORDER BY nam ASC;";

$rs = $connexion->query($sql);
return $rs->fetchAll(PDO::FETCH_ASSOC);
}