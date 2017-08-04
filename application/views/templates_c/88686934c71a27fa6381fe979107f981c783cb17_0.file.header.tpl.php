<?php
/* Smarty version 3.1.30, created on 2017-08-04 19:14:01
  from "C:\xampp\htdocs\ci\content\themes\smarty\partials\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984ab59c577e8_38503781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88686934c71a27fa6381fe979107f981c783cb17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ci\\content\\themes\\smarty\\partials\\header.tpl',
      1 => 1501187597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5984ab59c577e8_38503781 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="ui fixed inverted menu">
	<div class="ui container">
		<a class="header item" href="<?php echo site_url();?>
"><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</a>
		<a class="item" href="<?php echo site_url();?>
">Bootstrap Theme</a></li>
		<a class="item" href="https://goo.gl/fZ5P94" target="_blank">GitHub</a>
		<a class="item" href="http://www.codeigniter.com/" target="_blank">CodeIgniter</a>
		<a class="item" href="https://goo.gl/wGXHO9" target="_blank">@kader</a>
		<div class="ui simple dropdown item">
			My Other Repos <i class="dropdown icon"></i>
			<div class="menu">
				<a class="item" href="https://goo.gl/RzSsE9" target="_blank">CodeIgniter Gettext Hook</a>
				<a class="item" href="https://goo.gl/gIMfYw" target="_blank">CodeIgniter Theme Library</a>
				<a class="item" href="https://goo.gl/dHupYv" target="_blank">Dinakit Framework</a>
				<div class="divider"></div>
				<a class="item" href="https://github.com/bkader?tab=repositories" target="_blank">View all</a>
			</div><!--/.menu-->
		</div><!--/.ui.simple.dropdown.item-->

		<div class="item">
			<div class="ui input">
				<input type="text" name="name" placeholder="Search">
			</div><!--/.div-group-->
		</div><!--/.navbar-div-->

		</div><!-- /.navbar-collapse -->
	</div><!--/.ui container-->
</nav><!--/.ui.fixed.inverted.menu-->
<?php }
}
