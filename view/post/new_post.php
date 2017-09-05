<div class="col-xs-12">
    <form method="post" class="form-group input-group" novalidate>
        <fieldset>
            <legend>Cadastrar novo Post.</legend>

            <label class="control-label" >Título: </label>
            <div class="form-group input-group">
                <input id="slug-source" required name="title" class="form-control" />
            </div>

            <label class="control-label" >Slug: </label>
            <div class="form-group input-group">
                <input id="slug-target" required name="slug" class="form-control" />
            </div>

            <label class="control-label" >Texto: </label>
            <div>
                <textarea required name="conteudo" class="form-control"></textarea>
            </div>

            <br clear="all">
            <br clear="all">

            <div class="form-group input-group">
                <input type="submit" name="acao" value="Cadastrar Post" class="btn btn-success">
            </div>
        </fieldset>
    </form>
</div>

<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>