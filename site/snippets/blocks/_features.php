<section class="_features">
    <div class="ctn">
        <?php foreach ($block->items()->toStructure() as $item): ?>
        <article>
            <?php if ($p = $item->picture()->toFile()): ?>
            <figure class="mb-100 <?= $block->size()->or('icon') ?>">
            <img loading="lazy" src="<?= $p->resize(300)->url() ?>" srcset="<?= $p->srcset('webp') ?>" alt="<?= $p->alt() ?>">
            </figure>
            <?php endif ?>
            <h3 class="h3"><?= $item->title() ?></h3>
            <p><?= $item->text() ?></p>
        </article>
        <?php endforeach ?>
    </div>
</section>