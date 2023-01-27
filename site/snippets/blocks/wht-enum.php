<wht-enum class="block">
    <div class="ctn">
        <?php foreach ($block->items()->toStructure() as $item): ?>
        <article>
            <h3><?= $item->title() ?></h3>
            <p><?= $item->text() ?></p>
        </article>
        <?php endforeach ?>
    </div>
</wht-enum>