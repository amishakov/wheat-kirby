<?php if ($block->youtubeUrl()->isNotEmpty()): ?>
<?php preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $block->youtubeUrl(), $matches); ?>
<?php if ($matches): ?>
<section class="_youtube">
    <div class="ctn" in>   
        <you-tube
            videoid="<?= $matches[0] ?>"
            <?php if ($poster = $block->poster()->toFile()): ?>
            style="background-image: url('<?= $poster->url() ?>');"
            <?php endif ?>
            fx="fadein"
            ></you-tube>
    </div>
</section>
<?php endif ?>
<?php endif ?>