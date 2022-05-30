<?php

function CommentAction(PDO $connexion, int $postId) {
    include_once '../app/modeles/CommentsModel.php';
    $comments = findComments($connexion, $postId);

    include '../app/views/comments/indexByPostId.php';
}