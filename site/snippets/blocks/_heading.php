<section class="_heading">
    <div class="ctn" in>
        <<?= $level = $block->level()->or('h2') ?> class="<?= $level ?>" fx="fadein">
        <?= $block->title() ?>
        </<?= $level ?>>
        <?php if ($block->links()->inNoteEmpty()): ?>
        <div class="links" in>
            <?php $i = 0 ?>
            <?php foreach ($block->links()->toStructure() as $l): ?>
            <a class="<?= $s = $l->style()->or('btn') ?>" href="<?= $l->url() ?>" fx="fadein <?= $i++ ?>"><?= $l->label() ?></a>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </div>
</section>
