<?php

function findComments(PDO $connexion, int $postId) {
    $sql = 'SELECT *
    FROM comments
    where post_id = :postId
    ORDER BY created_at DESC;
    ; 

';

$rs = $connexion->prepare($sql);
$rs->bindValue(':postId', $postId, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}