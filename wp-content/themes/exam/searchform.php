<form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form">
    <input type="search"
           class="search-input"
           placeholder="Type and hit Enter..."
           value="<?php get_search_query(); ?>"
           name="s">
</form>