<?php $anchor = $block->anchor() ?>
<?php $text = $block->text() ?>
<?php $items = $block->items()->toStructure() ?>

<a-details class="block"<?php if ($anchor != ""): ?> id="<?= $anchor ?>"<?php endif ?>>
    <div class="wrapper">
        <div class="a_lede">
            <div class="a_title">
                <span class="dot"></span>
                <?= $block->title() ?>
            </div>
            <div class="prose">
                <?= $block->text() ?>
            </div>  
        </div>
        <div class="g1_3">
            <div></div>
            <div>
                <?php foreach ($items as $item): ?>
                <details>
                <summary>
                    <?= $item->title() ?>
                    <?= asset('assets/svg/arrow.svg')->read() ?>
                </summary>
                <div class="prose">
                    <?= $item->text() ?>
                </div>
                </details>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</a-details>
