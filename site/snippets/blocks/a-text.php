<a-text class="block"<?php e($block->anchor()->isNotEmpty(), ' id="'.$block->anchor() .'"') ?>>
    <div class="wrapper">
        <div class="a_lede">
            <div class="a_title">
                <span class="dot"></span>
                <?= $block->title() ?>
            </div>
            <div class="content">
                <div class="prose">
                    <?= $block->text() ?>
                </div>
            </div>            
        </div>
    </div>
</a-text>
