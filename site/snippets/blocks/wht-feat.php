<wht-feat class="block">
    <div class="ctn">
        <div class="media <?= $block->position()->or('left') ?>">
            <?php if($p = $block->picture()->toFile()): ?>

            <img src="<?= $p->resize(300)->url() ?>" srcset="<?= $p->srcset('webp') ?>" alt="<?= $p->alt() ?>">

            <?php endif ?>
        </div>
        <div class="prose">
            <?= $block->text()->kirbytext() ?>
            <?php if ($block->links()->isNotEmpty()): ?>
            <div class="links mt-200">
                <?php foreach ($block->links()->toStructure() as $l): ?>
                <a class="<?= $s = $l->style()->or('btn') ?>" href="<?= $l->url() ?>"><?= $l->label() ?></a>
                <?php endforeach ?>
            </div>
            <?php endif ?>
        </div>
    </div>
</wht-feat>
