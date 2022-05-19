<?php
function showAction(PDO $connexion, int $id) {
    include '../app/modeles/postModel.php';
    $post = findOneById($connexion, $_GET['postID']);

    global $content;
    ob_start();
    include '../app/views/posts/article.php';
    $content = ob_get_clean();
}

function indexAction (PDO $connexion) {
    include '../app/modeles/postModel.php';
    $posts = findAll($connexion);

    global $content;
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();

}
?>