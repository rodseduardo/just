<?php
require_once "helpers/start.php";

// Método que faz o autoload do sistema.
startApp();

include "view/layout/head.php";

$post = new Posts();
$posts = $post->findAll();

$parans = array('posts' => $posts);

include "view/site/index.php";

include "view/layout/footer.php";