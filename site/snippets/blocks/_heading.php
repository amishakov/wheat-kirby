<section class="_heading"<?= e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor().'"') ?>>
    <div class="ctn" in>
        <h2 class="h2" fx="fadein">
            <?= $block->title() ?>
        </h2>
        <?php if ($block->links()->inNoteEmpty()): ?>
        <div class="links" in>
            <?php $i = 0 ?>
            <?php foreach ($block->links()->toStructure() as $l): ?>
            <a class="btn" href="<?= $l->url() ?>" fx="fadein <?= $i++ ?>"><?= $l->label() ?></a>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </div>
</section>
