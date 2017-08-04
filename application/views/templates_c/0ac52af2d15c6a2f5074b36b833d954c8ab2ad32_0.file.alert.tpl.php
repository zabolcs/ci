<?php
/* Smarty version 3.1.30, created on 2017-08-04 19:14:01
  from "C:\xampp\htdocs\ci\content\themes\smarty\partials\alert.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984ab59b6d517_23740268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ac52af2d15c6a2f5074b36b833d954c8ab2ad32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\partials\\alert.tpl',
      1 => 1501185804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5984ab59b6d517_23740268 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ui 
     <?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'info' : $tmp);?>
 message">
    <i class="close icon"></i>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
