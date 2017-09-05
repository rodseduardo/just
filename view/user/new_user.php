<div class="col-md-offset-4 col-md-4">
	<form method="post" class="form-group input-group">
		<fieldset>
			<legend>Cadastrar novo usuario.</legend>

            <label class="control-label" >Login: </label>
            <div class="form-group input-group">
				<span class="input-group-addon">
					<i class="fa fa fa-user" aria-hidden="true"></i>
				</span>
                <input type="text" required name="login" class="form-control" />
            </div>

			<label class="control-label" >Nome: </label>
			<div class="form-group input-group">
				<span class="input-group-addon">
					<i class="fa fa-user-circle-o" aria-hidden="true"></i>
				</span>
				<input type="text" required name="name" class="form-control" />
			</div>

			<label class="control-label" >email: </label>
			<div class="form-group input-group">
				<span class="input-group-addon">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</span>
				<input type="email" required name="email" class="form-control" />
			</div>

			<label class="control-label" >Senha: </label>
			<div class="form-group input-group">
				<span class="input-group-addon">
					<i class="fa fa-key" aria-hidden="true"></i>
				</span>
				<input type="password" required name="password" class="form-control" />
			</div>

			<div class="form-group input-group">
				<input type="submit" name="acao" value="Cadastrar usuario" class="btn btn-success">
			</div>
		</fieldset>
	</form>
</div>
