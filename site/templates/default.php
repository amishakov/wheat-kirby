<?= snippet('header') ?>
<div id="page" class="default">
    <?php if (!$page->isHomePage()): ?>
    <?= snippet('crumbs') ?>
    <?= snippet('blocks/landing-hr') ?>
    <?php endif ?> 
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
        <?php snippet('blocks/' . $block->type(), ['block'=>$block]) ?>
    <?php endforeach ?>
</div>
<?= snippet('footer') ?>
