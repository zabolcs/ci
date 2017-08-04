<?php
/* Smarty version 3.1.30, created on 2017-08-04 19:24:42
  from "C:\xampp\htdocs\ci\application\modules\welcome\themes\smarty\views\test_module_partial.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984adda4f1f20_76008497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e3ad581a883cec91177ec4107c2751b86b4d3b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\modules\\welcome\\themes\\smarty\\views\\test_module_partial.tpl',
      1 => 1501867393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5984adda4f1f20_76008497 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sixteen wide tablet ten wide computer column">
    <?php echo print_alert('This is a dummy alert just to show you how to display an alert using <strong>print_alert()</strong> function. TEST MODULE PARTIAL');?>

    <div class="ui segment">

        <h1 class="ui header" style="margin-top: 0;">Welcome to CodeIgniter! TESZT</h1>

        <p>The page you are looking at is being generated dynamically by CodeIgniter. <?php echo $_smarty_tpl->tpl_vars['teszt']->value;?>
!!!</p>

        <p>If you would like to edit this page you'll find it located at:</p>
        <code></code>

        <p>The corresponding controller for this page is found at:</p>
        <code>application/controllers/Welcome.php</code>

        <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="https://www.codeigniter.com/user_guide/" target="_blank">User Guide</a>.</p>
    </div><!--/.ui.segment-->
</div><!--/.column--><?php }
}
