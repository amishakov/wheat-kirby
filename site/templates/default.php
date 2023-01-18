<?= snippet('site-start') ?>
<?= snippet('site-header') ?>
<div id="page" class="default ctn">
    <h1><?= $page->title() ?></h1>
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
    <?php snippet('blocks/' . $block->type(), ['block'=>$block]) ?>
    <?php endforeach ?>
</div>
<?= snippet('footer') ?>
<?= snippet('site-end') ?>