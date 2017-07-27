<?php
/* Smarty version 3.1.30, created on 2017-07-27 22:06:08
  from "C:\xampp\htdocs\ci\content\themes\smarty\layouts\full.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597a47b0a4ff10_35230028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '388c7300d34848b75c687f506d729d95b5d4cbb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\layouts\\full.tpl',
      1 => 1501185849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597a47b0a4ff10_35230028 (Smarty_Internal_Template $_smarty_tpl) {
echo theme_header();?>

<div class="ui grid container">
    <?php echo print_flash_alert();?>


	<div class="row">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div><!--/.row-->
</div><!-- /.ui.grid.container -->
<?php echo theme_footer();?>

<?php }
}
