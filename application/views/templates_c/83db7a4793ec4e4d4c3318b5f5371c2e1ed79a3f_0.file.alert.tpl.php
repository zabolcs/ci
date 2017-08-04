<?php
/* Smarty version 3.1.30, created on 2017-08-04 19:27:23
  from "C:\xampp\htdocs\ci\content\themes\smarty\partials\alert.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984ae7b922561_77171552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83db7a4793ec4e4d4c3318b5f5371c2e1ed79a3f' => 
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
function content_5984ae7b922561_77171552 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ui 
     <?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? 'info' : $tmp);?>
 message">
    <i class="close icon"></i>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
