<site-search>
    <div class="veil"></div>
    <input 
    type="text" 
    name="q" value="" 
    placeholder="Search for anything …" 
    autocomplete="off"
    hx-trigger="keyup changed delay:0.5s"
    hx-get="/search"
    hx-target="site-search .results"
    hx-indicator="site-search .results">
    <div class="results"></div>
</site-search>
