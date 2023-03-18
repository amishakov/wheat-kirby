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
    <div class="title">
        <span style="--index:1;">W</span>
        <span style="--index:2;">h</span>
        <span style="--index:3;">e</span>
        <span style="--index:4;">a</span>
        <span style="--index:5;">t</span>
    </div>
    <div class="spinner" style="--spinner-color:white"></div>
</div>
<?php endif ?>
