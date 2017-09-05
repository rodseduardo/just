<div class="col-md-12">

    <div class="container">

        <?php if ($parans['posts']): ?>

            <?php foreach ($parans['posts'] as $value): ?>

                <div class="row">

                    <h2><?= $value->title; ?></h2>

                    <p><?= $value->content; ?></p>

                </div>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>

</div>
