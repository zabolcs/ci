<?php
/* Smarty version 3.1.30, created on 2017-07-27 22:03:27
  from "C:\xampp\htdocs\ci\content\themes\smarty\partials\alert.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597a470f69aab7_59638351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c9ebac2e118b21880d5ce487da467a3e52b03c' => 
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
function content_597a470f69aab7_59638351 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ui 
     <?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'info' : $tmp);?>
 message">
    <i class="close icon"></i>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
