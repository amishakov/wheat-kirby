<?php $results = $site->search(get('q'))->listed()->paginate(24); ?>
<?php if ($results->count() > 0): ?>
<?php foreach ($results->listed() as $result): ?>
<article>
    <a href="<?= $result->url() ?>">
        <div class="title"><?= $result->title() ?></div>
        <div class="desc"><?= $result->seoDescription() ?></div>
        <div class="path"><?= $result->url() ?></div>
    </a>
</article>
<?php endforeach ?>
<?php else: ?>
<article>
    <div class="title">[no results]</div>
</article>
<?php endif ?>