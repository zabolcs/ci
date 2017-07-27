<?php
/* Smarty version 3.1.30, created on 2017-07-27 22:03:27
  from "C:\xampp\htdocs\ci\content\themes\smarty\layouts\default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597a470f7330f6_35046500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d11b7e735a26e5da4161167bf244aa8deb02986' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\layouts\\default.tpl',
      1 => 1501185124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597a470f7330f6_35046500 (Smarty_Internal_Template $_smarty_tpl) {
echo theme_header();?>

<div class="ui grid container">
    <?php echo print_flash_alert();?>


	<div class="row">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                <?php echo theme_partial('sidebar');?>

	</div><!--/.row-->
</div><!-- /.ui.grid.container -->
<?php echo theme_footer();?>

<?php }
}
