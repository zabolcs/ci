{theme_header()}
<div class="ui grid container">
    {print_flash_alert()}

    <div class="row">
        {$content}
    </div><!--/.row-->
    <div class="row clearfix">
        {include file="partials/sidebar_full.tpl"}
        <div class='clearfix'></div>
        <br> <br> <br> <br>
    </div>
</div><!-- /.ui.grid.container -->
{theme_footer()}
