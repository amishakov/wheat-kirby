<?php snippet('document', slots: true) ?>
<?php slot() ?>
    <?= snippet('default-heading') ?>
    <?php foreach ($page->blocks()->toBlocks() as $block): ?>
    <?php snippet('blocks/' . $block->type(), ['block'=>$block]) ?>
    <?php endforeach ?>   
<?php endslot() ?>
<?php endsnippet() ?>
