<header id="header">
    <nav>
        <a class="logo" href="<?= $site->url() ?>"><?= asset('assets/svg/wheat.svg')->read() ?></a>
        <?php foreach ($site->headerLinks()->toStructure() as $l): ?>
        <a class="link" href="<?= $l->url() ?>"><?= $l->label() ?></a>
        <?php endforeach ?>
        <?= snippet('lang') ?>
        <button class="btn search" title="<?= t('search') ?>" site-search-toggle><?= asset('assets/svg/search.svg')->read() ?></button>
        <button class="btn menu" title="<?= t('menu') ?>"><?= t('menu') ?></button>
    </nav>
</header>