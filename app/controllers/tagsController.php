<?php
function indexByPostIdAction(PDO $connexion, int $postId) {
    include '../app/modeles/tagsmodel.php';
    $tags = findPostById($connexion, $postId);

    include '../app/views/tags/indexByPostId.php';
}