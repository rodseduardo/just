<div class="col-md-12">
    <fieldset>
        <legend>Os Posts</legend>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Id:</th>
                <th>Titulo:</th>
                <th>Slug:</th>
                <th>Ações:</th>
            </tr>
            </thead>
            <tbody>
            <?php if($parans['posts']): ?>

            <?php foreach ($parans['posts'] as $value): ?>
            <tr>
                <td><?= $value->id; ?></td>
                <td><?= $value->title; ?></td>
                <td><?= $value->slug; ?></td>
                <td>
                    <a href='?acao=edit_post&id=<?= $value->id; ?>'
                       class="btn btn-warning btn-circle">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <a href='?acao=delete_post&id=<?=  $value->id; ?>'
                       class="btn btn-danger btn-circle"
                       onclick='return confirm(\"Deseja realmente deletar?\")'>
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
                <?php endforeach; ?>

                <?php endif; ?>
            </tr>
            </tbody>
        </table>
    </fieldset>
</div>
