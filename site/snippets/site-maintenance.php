<style>
.maintenance {
    padding-bottom: var(--gutter);
    text-align: center;
    margin-top: var(--rhythm);
}

.maintenance article { 
    display: block;
    text-align: left;
    width: 80vw;
    margin: 0 auto; 
}

.maintenance h1 { 
    font-size: 4rem; 
}

.maintenance p:first-child { 
    max-width: 78ch;
}
</style>
<?php
$asset = asset('assets/css/site-maintenance.css');
?>
    <div class="ctn maintenance">
        <article>
            <h1>Désolé, ce site est en cours de réparation&nbsp!</h1>
            <div>
                <p>Nous sommes désolés, mais nous effectuons actuellement des travaux de maintenance.
                    Nous serons de retour en ligne sous peu ! 
                    Nous vous remercions de votre patience et espérons que vous passez une excellente journée.
                </p>
                <p>
                    <?php
                        $site->title()
                    ?>
                </p>
            </div>
        </article>
</div>
