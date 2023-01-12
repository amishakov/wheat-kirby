<site-menu>
    <div class="veil"></div>
    <div class="dialog" role="menu">
        <nav>
            <?php foreach ($site->menu_links()->toStructure() as $link): ?>
            <a href="<?= $link->url() ?>" is="nav-link" role="menuitem"><?= $link->label() ?></a>
            <?php endforeach ?> 
        </nav>
        <?= snippet('time-of-day', ['id'=>'menu-time-of-day']) ?>
        <a class="button" href="mailto:<?= $site->contact_email() ?>"><?= $site->contact_email() ?></a>
    </div>
</site-menu>