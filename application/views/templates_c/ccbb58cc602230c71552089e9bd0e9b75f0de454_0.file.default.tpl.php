<?php
/* Smarty version 3.1.30, created on 2017-07-27 21:47:24
  from "C:\xampp\htdocs\ci\content\themes\semantic\layouts\default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597a434c066528_11543850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccbb58cc602230c71552089e9bd0e9b75f0de454' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\semantic\\layouts\\default.tpl',
      1 => 1501184840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597a434c066528_11543850 (Smarty_Internal_Template $_smarty_tpl) {
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
