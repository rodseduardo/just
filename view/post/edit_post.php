<div class="col-xs-12">
    <form method="post" class="form-group input-group" novalidate>
        <fieldset>
            <legend>Atualize o Post.</legend>

            <label class="control-label" >Titulo: </label>
            <div class="form-group input-group">
				<input id="slug-source" type="text" required name="title" class="form-control" value="<?= $result->title; ?>"/>
            </div>

            <label class="control-label" >Slug: </label>
            <div class="form-group input-group">
				<input id="slug-target" type="text" required name="slug" class="form-control" value="<?= $result->slug; ?>"/>
            </div>

            <label class="control-label" >Texto: </label>
            <div class="form-group input-group">
				<textarea required name="conteudo" class="form-control"><?= $result->content; ?></textarea>
            </div>

            <div class="form-group input-group">
                <input type="hidden" name="id" value="<?= $result->id; ?>">
                <input type="submit" name="acao" value="Atualizar post" class="btn btn-success">
            </div>
        </fieldset>
    </form>
</div>

<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>