<?php
/* Smarty version 3.1.30, created on 2017-07-27 22:11:59
  from "C:\xampp\htdocs\ci\application\modules\welcome\themes\smarty\mobile\views\welcome_full.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597a490f874032_68454505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d9ccd13ccba03f03fa378811a7c6f64db9b15e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\application\\modules\\welcome\\themes\\smarty\\mobile\\views\\welcome_full.tpl',
      1 => 1501186317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597a490f874032_68454505 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style='width: 100%'>
    <?php echo print_alert('This is a dummy alert just to show you how to display an alert using <strong>print_alert()</strong> function.');?>

    <div class="ui segment">

        <h1 class="ui header" style="margin-top: 0;">Welcome to CodeIgniter! TESZT mobile full</h1>

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
