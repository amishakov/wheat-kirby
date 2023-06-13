<site-menu role="menu">
    <nav>
        <?php foreach ($site->nav()->toStructure() as $a): ?>
        <a href="<?= $a->url() ?>" role="menuitem"><?= $a->label() ?></a>
        <?php endforeach ?>
        <?= snippet('lang') ?>
    </nav>
    <button class="btn close" title="<?= t('close') ?>"><?= t('close') ?></button>
</site-menu>