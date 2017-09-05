<?php

class Post
{
    public static function routes($acao, $parans = [])
    {
        switch ($acao) {
            case 'Cadastrar usuario':

                $user = new Users();

                $user->setLogin($_POST['login']);
                $user->setName($_POST['name']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);

                if($user->findByEmail($user->getEmail())->email == $user->getEmail())
                { ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        O e-mail já está cadastrado!
                    </div>
                <?php
                }else {
                    if($user->insert())
                    {
                       unset($user);
                    }
                    ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Usuário cadastrado com sucesso!
                    </div>
                    <?php
                }

                break;

            case 'Atualizar usuario':

                $user = new Users();

                $user->setLogin($_POST['login']);
                $user->setName($_POST['name']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);

                if($user->update($_POST['id']))
                {
                    unset($user);
                }

                break;

            case 'Cadastrar Post':

                $post = new Posts();

                $post->setTitle($_POST['title']);
                $post->setSlug($_POST['slug']);
                $post->setContent($_POST['conteudo']);

                if($post->findBySlug($post->getSlug())->slug == $post->getSlug())
                { ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Ja existe um post com esse slug cadastrado!
                    </div>
                    <?php
                }else {
                    if($post->insert())
                    {
                        unset($post);
                    }
                    ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Post cadastrado com sucesso!
                    </div>
                    <?php
                }

                break;

            case 'Atualizar post':

                $post = new Posts();

                $post->setTitle($_POST['title']);
                $post->setSlug($_POST['slug']);
                $post->setContent($_POST['conteudo']);

                if($post->update($_POST['id']))
                {
                    unset($post);
                }

                break;

            case 'logar':

                //$parans['logar'] == SingletonLogin
                if ($parans['logar']->logar($_POST["email"], md5($_POST["senha"]))) {
                    header("location: painel.php");
                } else {
                    ?>
                    <div class="container">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Erro ao logar!
                        </div>
                    </div>
                    <?php

                }

                break;
        }
    }
}
