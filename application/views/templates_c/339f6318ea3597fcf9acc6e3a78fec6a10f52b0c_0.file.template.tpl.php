<?php
/* Smarty version 3.1.30, created on 2017-11-22 08:56:56
  from "C:\xampp\htdocs\ci\content\themes\smarty\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a152dc881a717_58364944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '339f6318ea3597fcf9acc6e3a78fec6a10f52b0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\template.tpl',
      1 => 1511131581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a152dc881a717_58364944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
        <?php echo $_smarty_tpl->tpl_vars['metadata']->value;?>

        <!-- StyleSheets -->
        <?php echo css('https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css');?>

        <?php echo $_smarty_tpl->tpl_vars['css_files']->value;?>

        <?php echo js('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');?>
 
        <!--[if lt IE 9]>
        <?php echo js('https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js');?>
 
        <?php echo js('https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js');?>
 
        <![endif]-->
    </head>
    <body>
        <?php echo $_smarty_tpl->tpl_vars['layout']->value;?>

        <!-- JavaScripts -->
        <?php echo js('http://code.jquery.com/jquery-1.12.4.min.js');?>
 
        <?php echo js('https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js');?>
 

        <?php echo $_smarty_tpl->tpl_vars['js_files']->value;?>

        <!-- Feel free to remove this line because you don't need it -->
        <?php echo '<script'; ?>
 async defer src="https://buttons.github.io/buttons.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
