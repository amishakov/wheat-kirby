<section class="_references">
    <div class="ctn">
        <div class="content" in>
            <div class="prose" fx="fadein">
                <?= $block->text()->kirbytext() ?>
            </div>
        </div>
        <ul class="refs" in>
            <?php $i = 0 ?>
            <?php foreach ($block->items()->toStructure() as $item): ?>
             <li fx="fadein <?= $i++ ?>">

                <hr fx="trace <?= $i ?>" >

                <?php if ($title = $item->title()): ?>
                <a href="<?= $item->url() ?>"><?= $title ?></a>
                <?php endif ?>

                <?php if ($subtext = $item->subtext()): ?>
                <sub><?= $subtext ?></sub>    
                <?php endif ?>

             </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>