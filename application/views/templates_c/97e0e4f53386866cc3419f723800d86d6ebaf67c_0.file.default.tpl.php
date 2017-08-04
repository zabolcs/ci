<?php
/* Smarty version 3.1.30, created on 2017-08-04 19:14:01
  from "C:\xampp\htdocs\ci\content\themes\smarty\layouts\default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984ab59be1281_51902432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97e0e4f53386866cc3419f723800d86d6ebaf67c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\layouts\\default.tpl',
      1 => 1501866543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/header.tpl' => 1,
    'file:partials/sidebar.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_5984ab59be1281_51902432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui grid container">
    <?php echo print_flash_alert();?>

    <div class="row">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php $_smarty_tpl->_subTemplateRender("file:partials/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div><!--/.row-->
</div><!-- /.ui.grid.container -->
<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
