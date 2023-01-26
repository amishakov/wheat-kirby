<?= snippet('site-start') ?>
<?= snippet('site-header') ?>
<div id="page" class="default">
    <div class="ctn mt-300">
        <h1 class="h1"><?= $page->title() ?></h1>
    </div>
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
    <?php snippet('blocks/' . $block->type(), ['block'=>$block]) ?>
    <?php endforeach ?>
</div>
<?= snippet('footer') ?>
<?= snippet('site-end') ?>