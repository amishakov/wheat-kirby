<section class="_text">
    <div class="ctn" in>
        <div class="prose" fx="fadein 2">
            <?= $block->text()->kirbytext() ?>
            <?php if ($block->links()->isNotEmpty()): ?>
            <div class="links">
                <?php foreach ($block->links()->toStructure() as $l): ?>
                <a class="btn" href="<?= $l->url() ?>"><?= $l->label() ?></a>
                <?php endforeach ?>
            </div>
            <?php endif ?>
        </div>
    </div>
</section>
