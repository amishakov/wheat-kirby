<site-menu>
    <nav>
        <?php foreach ($site->menu_links()->toStructure() as $link): ?>
        <a href="<?= $link->url() ?>" is="nav-link" role="menuitem"><?= $link->label() ?></a>
        <?php endforeach ?>
        <?= snippet('ls') ?>
    </nav>
    <button><?= t('close') ?></button>
</site-menu>