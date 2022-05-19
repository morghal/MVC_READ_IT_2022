<?php

function findPostById(PDO $connexion, int $postId) {
    $sql = 'SELECT *
    FROM tags t
    JOIN posts_has_tags pht ON t.id = pht.tag_id
    WHERE pht.post_id = :postId; 

';

$rs = $connexion->prepare($sql);
$rs->bindValue(':postId', $postId, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}