<header id="site-header">
    <div class="navbar">
        <a class="logo" href="<?= $site->url() ?>" aria-label="Site logo">
            <?= asset('assets/svg/calotte.svg')->read() ?>
        </a>
        <button class="button portrait" title="Menu" aria-haspopup="true" aria-controls="menu">Menu</button>
        <div class="status landscape-flex">
            <?= snippet('time-of-day', ['id'=>'navbar-time-of-day']) ?>
            <a class="button" href="mailto:<?= $site->contact_email() ?>"><?= $site->contact_email() ?></a>
        </div>
    </div>
</header>