<div class="col-md-offset-4 col-md-4">
	<form method="post" class="form-group input-group">
		<fieldset>
			<legend>Atualize o usuario.</legend>

            <label class="control-label" >Login: </label>
            <div class="form-group input-group">
				<span class="input-group-addon">
					<i class="fa fa fa-user" aria-hidden="true"></i>
				</span>
                <input type="text" required name="login" class="form-control" value="<?= $result->login; ?>"/>
            </div>

			<label class="control-label" >Nome: </label>
			<div class="form-group input-group">
				<span class="input-group-addon">
					<i class="fa fa-user-circle-o" aria-hidden="true"></i>
				</span>
				<input type="text" required name="name" class="form-control" value="<?= $result->name; ?>"/>
			</div>

			<label class="control-label" >email: </label>
			<div class="form-group input-group">
				<span class="input-group-addon">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</span>
				<input type="email" required name="email" class="form-control" value="<?= $result->email; ?>"/>
			</div>

			<label class="control-label" >Senha: </label>
			<div class="form-group input-group">
				<span class="input-group-addon">
					<i class="fa fa-key" aria-hidden="true"></i>
				</span>
				<input type="password" name="password" class="form-control" placeholder="Digite uma senha" required/>
			</div>

			<div class="form-group input-group">
				<input type="hidden" name="id" value="<?= $result->id; ?>">
				<input type="submit" name="acao" value="Atualizar usuario" class="btn btn-success">
			</div>
		</fieldset>
	</form>
</div>
