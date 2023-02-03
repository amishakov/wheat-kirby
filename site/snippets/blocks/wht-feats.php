<wht-feats class="block">
    <div class="ctn">
        <?php foreach ($block->items()->toStructure() as $item): ?>
        <article>
            <?php if ($picture = $item->picture()->toFile()): ?>
            <figure class="mb-100 <?= $block->size()->or('icon') ?>">
            <?= snippet('img', ['image'=>$picture]) ?>
            </figure>
            <?php endif ?>
            <h3 class="h3"><?= $item->title() ?></h3>
            <p><?= $item->text() ?></p>
        </article>
        <?php endforeach ?>
    </div>
</wht-feats>