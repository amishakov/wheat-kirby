<?php $anchor = $block->anchor() ?>
<?php $speaker = $block->speaker()->toObject() ?>
<?php $speaker_photo = $speaker->photo()->toFile() ?>
<?php $speaker_text = $speaker->text() ?>

<a-cards class="block"<?php if ($anchor != ""): ?> id="<?= $anchor ?>"<?php endif ?>>
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
        <ul class="g1_1">
            <?php foreach ($block->items()->toStructure() as $item): ?>
                <li class="prose">
                    <h3><?= $item->title() ?></h3>
                    <?php if ($picture = $item->picture()->toFile()): ?>
                    <figure>
                        <?= snippet('picture', ['image' => $picture]) ?>
                    </figure>
                    <?php endif ?>
                    <p><?= $item->text() ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</a-cards>
