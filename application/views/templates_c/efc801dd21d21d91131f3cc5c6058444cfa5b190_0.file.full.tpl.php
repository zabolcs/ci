<?php
/* Smarty version 3.1.30, created on 2017-08-04 19:32:11
  from "C:\xampp\htdocs\ci\content\themes\smarty\layouts\full.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984af9b285390_17680691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc801dd21d21d91131f3cc5c6058444cfa5b190' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\layouts\\full.tpl',
      1 => 1501867929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/sidebar_full.tpl' => 1,
  ),
),false)) {
function content_5984af9b285390_17680691 (Smarty_Internal_Template $_smarty_tpl) {
echo theme_header();?>

<div class="ui grid container">
    <?php echo print_flash_alert();?>


    <div class="row">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div><!--/.row-->
    <div class="row clearfix">
        <?php $_smarty_tpl->_subTemplateRender("file:partials/sidebar_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class='clearfix'></div>
        <br> <br> <br> <br>
    </div>
</div><!-- /.ui.grid.container -->
<?php echo theme_footer();?>

<?php }
}
