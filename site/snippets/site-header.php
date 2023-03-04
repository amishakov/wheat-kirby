<header id="header">
    <nav>
        <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>
        <?php foreach ($site->headerLinks()->toStructure() as $l): ?>
        <a class="link" href="<?= $l->url() ?>"><?= $l->label() ?></a>
        <?php endforeach ?>
        <?= snippet('langswitcher') ?>
        <button title="Menu" aria-haspopup="true" aria-controls="menu">Menu</button>
    </nav>
</header>