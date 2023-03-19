<?php
    $boosted = null;
    foreach (getallheaders() as $name => $value) {
        if ($name === 'HX-Boosted') {
            $boosted = true;
        }
    }

    $chars = str_split($site->title());
    $i = 0;
?>

<?php if (!$boosted): ?> 
<div id="loading">
    <div class="title">
        <?php foreach ($chars as $c): ?>
            <?php $i = $i + 1 ?>
            <span style="--index:<?= $i ?>;"><?= $c ?></span>
        <?php endforeach ?>
    </div>
</div>
<?php endif ?>
