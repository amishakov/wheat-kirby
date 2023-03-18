<?php
    $boosted = null;
        foreach (getallheaders() as $name => $value) {
        if ($name === 'HX-Boosted') {
            $boosted = true;
        }
    }
?>

<?php if (!$boosted): ?> 
<div id="loading">
    <div><?= $site->title() ?></div>
    <div class="spinner" style="--spinner-color:white;"></div>
</div>
<?php endif ?>
