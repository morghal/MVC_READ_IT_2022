<?php
function indexAction (PDO $connexion) {
    include '../app/modeles/postModel.php';
    $posts = findAll($connexion);

    global $content;
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();

}
?>