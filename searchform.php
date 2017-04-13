<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="navbar-form navbar-right">
    <div class="form-group">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Find...">
    </div>
</form>