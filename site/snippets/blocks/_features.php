<section class="_features"<?= e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor().'"') ?>>
    <div class="ctn" in>
        <?php $i = 0 ?>
        <?php foreach ($block->items()->toStructure() as $item): ?>
        <article fx="fadein <?= $i++ ?>">
            <?php if ($pic = $item->picture()->toFile()): ?>
            <figure class="<?= $block->size()->or('icon') ?>">
            <?= snippet('img', ['image'=>$pic]) ?>
            </figure>
            <?php endif ?>
            <h3 class="h3"><?= $item->title() ?></h3>
            <p><?= $item->text() ?></p>
        </article>
        <?php endforeach ?>
    </div>
</section>
