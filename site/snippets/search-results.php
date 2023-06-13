<?php $results = $site->search(get('q'))->listed()->paginate(24); ?>
<?php if ($results->count() > 0): ?>
<?php foreach ($results->listed() as $result): ?>
<article>
    <a href="<?= $result->url() ?>"><?= $result->title() ?></a>
</article>
<?php endforeach ?>
<?php else: ?>
<article>
    [no results]
</article>
<?php endif ?>