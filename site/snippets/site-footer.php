<footer id="footer">
    <div class="wrapper">
        <section class="layout">
            <div class="brand">
                <div class="avatar">
                    <?= asset('assets/svg/avatar.svg')->read() ?>
                </div>        
                <div class="social">
                    <div class="h2">Un peu de nous dans vos réseaux</div>
                    <ul>
                        <?php foreach ($site->social_links()->toStructure() as $l): ?>
                        <li>
                            <a class="button" href="<?= $l->url() ?>"><?= $l->label() ?></a>
                        </li>  
                        <?php endforeach ?>                       
                    </ul>
                </div>
            </div>
            <div class="utils">
                <nav>
                    <?php foreach ($site->footer_links()->toStructure() as $group): ?>
                    <ul>
                        <li class="title"><?= $group->name() ?></li>
                        <?php foreach ($group->links()->toStructure() as $l): ?>
                        <li>
                            <a href="<?= $l->url() ?>"><?= $l->label() ?></a>
                        </li>  
                        <?php endforeach ?> 
                    </ul>
                    <?php endforeach ?>
                </nav>
                <div class="footnote">
                    <div class="dot"></div>
                    <p><?= $site->footnote() ?></p>
                </div>
            </div>
        </section>

        <section class="cta">
            <a href="mailto:<?= $site->contact_email() ?>">Dites bonjour.</a>                            
        </section>

        <section class="legal">
            <div><?= $site->legal() ?></div>
            <button onclick="scrollToTop()" title="Scroll to top"><?= asset('assets/svg/arrow.svg')->read() ?></button>
        </section>
        
    </div>
</footer>
