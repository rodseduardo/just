<?php

require_once "helpers/start.php";

// Método que faz o autoload do sistema.
startApp();

$logar = SingletonLogin::getInstance();

include "view/layout/head.php";

if (isset($_SESSION['logado']))
{

    $user = new Users();
    $users = $user->findAll();

    $post = new Posts();
    $posts = $post->findAll();

    $parans = array('user' => $user, 'users' => $users, 'post' => $post, 'posts' => $posts, 'logar' => $logar );

    include "view/layout/menu.php";

    isset($_POST['acao']) ? Post::routes($_POST['acao'], $parans) : '' ;

    isset($_GET['acao']) ? Get::routes($_GET['acao'], $parans) : '' ;

}
else
{

    include "view/login/index.php";

    isset($_POST['acao']) ? Post::routes($_POST['acao'], array('logar' => $logar)) : '';

}

include "view/layout/footer.php";