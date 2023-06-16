<site-search>
    <div class="veil"></div>
    <input 
    type="text" 
    name="q" value="" 
    placeholder="Search for anything …" 
    autocomplete="off"
    hx-trigger="keyup changed delay:0.25s"
    hx-get="/search"
    hx-target="site-search .results"
    hx-indicator="site-search">
    <div class="results">
        <div class="noresult">
            <?= asset('assets/svg/explore.svg')->read() ?>
            Start typing...
        </div>
    </div>
</site-search>
