<?php 
    $salt = rand();
    if (Url::query() === 'dev=' && $kirby->option('debug')) {
        Cookie::set('dev', '');
    };
    if (Url::query() === 'nodev=') {
        Cookie::remove('dev', '');
    };
?>

<link rel="preload" href="/assets/fonts/inter-v12-latin-regular.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="/assets/fonts/ibm-plex-serif-v19-latin-regular.woff2" as="font" type="font/woff2" crossorigin="">

<?php if ($dev = Cookie::exists('dev')): ?>
<link rel="stylesheet" href="/assets/css/index.css?v=<?= $salt ?>">
<?php foreach (array_slice(scandir('assets/js/app'), 2) as $f): ?>
<script src="/assets/js/app/<?= $f ?>?v=<?= $salt ?>" defer></script>
<?php endforeach ?>
<?php foreach (array_slice(scandir('assets/js/com'), 2) as $f): ?>
<script src="/assets/js/com/<?= $f ?>?v=<?= $salt ?>" defer></script>
<?php endforeach ?>

<?php else: ?>
<link rel="stylesheet" href="/assets/css/app.css?v=<?= $salt ?>">
<script src="/assets/js/app.js?v=<?= $salt ?>" defer></script>
<script src="/assets/js/com.js?v=<?= $salt ?>" defer></script>
<?php endif ?>