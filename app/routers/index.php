<?php
include_once '../app/controllers/postController.php';
if(isset($_GET['postID'])) {
//ROUTE DETAILS ARTICLE
//PATTERN : /?postID=x
//ctrl : postcontroller
//index : showaction
showaction($connexion, $_GET['postID']);
}

else {
//ROUTE PAR DEFAUT
//PATTERN : /
//ctrl : postController
//action : index action
indexAction($connexion);
}