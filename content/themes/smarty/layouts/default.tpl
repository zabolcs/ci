{include file="../partials/header.tpl"}
<div class="ui grid container">
    {print_flash_alert()}
    <div class="row">
        {$content}
        {include file="partials/sidebar.tpl"}
    </div><!--/.row-->
</div><!-- /.ui.grid.container -->
{include file="partials/footer.tpl"}