<?php
/* Smarty version 3.1.30, created on 2017-08-04 19:27:23
  from "C:\xampp\htdocs\ci\content\themes\smarty\layouts\full.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984ae7b98a9e5_25615016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954dd2675ef012c85adfd6d60eb2a256383f57fd' => 
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
function content_5984ae7b98a9e5_25615016 (Smarty_Internal_Template $_smarty_tpl) {
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
