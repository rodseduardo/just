<div class="col-md-12">
	<fieldset>
		<legend>Os usuarios</legend>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Id:</th>
					<th>Nome:</th>
					<th>E-mail:</th>
					<th>Login:</th>
					<th>Ações:</th>
				</tr>
			</thead>
			<tbody>
				<?php if($parans['users']): ?>

                <?php foreach ($parans['users'] as $value): ?>
				<tr>
					<td><?= $value->id; ?></td>
					<td><?= $value->name; ?></td>
					<td><?= $value->email; ?></td>
					<td><?= $value->login; ?></td>
					<td>
						<a href='?acao=edit_user&id=<?= $value->id; ?>'
							class="btn btn-warning btn-circle">
							<i class="fa fa-pencil"></i>
						</a>
						<a href='?acao=delete_user&id=<?=  $value->id; ?>'
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
