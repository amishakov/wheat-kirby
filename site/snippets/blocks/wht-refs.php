<wht-refs class="block">
    <div class="ctn">
        <div class="content">
            <div class="prose">
                <?= $block->text()->kirbytext() ?>
            </div>
            <?php if ($block->links()->isNotEmpty()): ?>
            <div class="links mt-200">
                <?php foreach ($block->links()->toStructure() as $l): ?>
                <a class="<?= $s = $l->style()->or('btn') ?>" href="<?= $l->url() ?>"><?= $l->label() ?></a>
            </div>
            <?php endforeach ?>
            <?php endif ?>
        </div>
        <ul class="refs">
            <?php foreach ($block->items()->toStructure() as $item): ?>
             <li>

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
</wht-refs>