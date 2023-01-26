<footer id="footer">
    <div class="ctn">
        <hr>
        <nav class="mt-600">
            <?php foreach ($site->footerLinks()->toStructure() as $group): ?>
            <ul>
                <li><?= $group->name() ?></li>
                <?php foreach ($group->links()->toStructure() as $link): ?>
                <li>
                    <a href="<?= $link->url() ?>"><?= $link->label() ?></a>
                </li>
                <?php endforeach ?>
            </ul>
            <?php endforeach ?>
        </nav>
    </div>
</footer>
