<?php

class Get
{
    public static function routes($acao, $parans = [])
    {
        switch ($acao) {

            //Crud Usuarios

        case 'delete_user':

            $id = (int)$_GET['id'];

            if ($parans['user']->delete($id))
            { ?>
                <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Usuário deletado com sucesso!
                </div>
            <?php
            }

            break;

        case 'edit_user':

            $id = (int)$_GET['id'];

            $result = $parans['user']->find($id);

            include "view/user/edit_user.php";

            break;

        case 'new_user':

            include "view/user/new_user.php";

            break;

        case 'list_user':

            include "view/user/list_user.php";

            break;


        case 'delete_post':
            $id = (int)$_GET['id'];

            if ($parans['post']->delete($id)) {
                ?>
                  <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Deletado com sucesso!
                  </div>
              <?php

            }

            break;

        case 'edit_post':

            $id = (int)$_GET['id'];

            $result = $parans['post']->find($id);

            include "view/post/edit_post.php";

            break;

        case 'new_post':

            include "view/post/new_post.php";

            break;

        case 'list_post':

            include "view/post/list_post.php";

            break;

        case 'logout':

            $parans['logar']->deslogar();

            break;
          }
    }
}
