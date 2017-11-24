<?php
/* Smarty version 3.1.30, created on 2017-11-22 08:56:55
  from "C:\xampp\htdocs\ci\content\themes\smarty\partials\alert.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a152dc7ae7179_49851075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '794f3432e69df218e96d92418c3ab1d8597a097d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\partials\\alert.tpl',
      1 => 1511131583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a152dc7ae7179_49851075 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ui 
     <?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'info' : $tmp);?>
 message">
    <i class="close icon"></i>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
