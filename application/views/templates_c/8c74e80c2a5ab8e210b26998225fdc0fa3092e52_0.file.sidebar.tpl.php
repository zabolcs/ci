<?php
/* Smarty version 3.1.30, created on 2017-08-04 19:09:16
  from "C:\xampp\htdocs\ci\content\themes\smarty\partials\sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984aa3ca56776_02727149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c74e80c2a5ab8e210b26998225fdc0fa3092e52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\partials\\sidebar.tpl',
      1 => 1501185125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5984aa3ca56776_02727149 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sixteen wide tablet six wide computer column">
    <div class="ui segment">
        <p>This view is located in: <br><code><?php echo dirname($_smarty_tpl->source->filepath);?>
\<?php echo basename($_smarty_tpl->source->filepath);?>
</code>.</p>
        <div class="ui grid">
            <div class="sixteen wide tablet eight wide computer column">
                <?php echo img('bkader.jpg','class="ui bordered fluid image"','uploads');?>

                <p><code>content/uploads/</code></p>
            </div><!--/.column-->
            <div class="sixteen wide tablet eight wide computer column">
                <?php echo img('https://avatars0.githubusercontent.com/u/4732702?v=3&u=9ad5322d448cf4e41ada5262d9d3ff3caf09d397&s=400','class="ui bordered fluid image"');?>

                <p><code>From <a target="_blank" href="https://avatars0.githubusercontent.com/u/4732702?v=3&amp;u=9ad5322d448cf4e41ada5262d9d3ff3caf09d397&amp;s=400">Github</a></code></p>
            </div><!--/.column-->
        </div><!--/.ui grid-->
    </div><!--/.ui segment-->
</div><!--/.column--><?php }
}
