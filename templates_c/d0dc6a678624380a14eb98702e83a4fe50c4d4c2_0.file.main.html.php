<?php
/* Smarty version 4.1.0, created on 2022-03-24 18:05:50
  from 'C:\xampp\htdocs\php_04_uproszczony\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623ca4eece45d8_95768053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0dc6a678624380a14eb98702e83a4fe50c4d4c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\templates\\main.html',
      1 => 1648137304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623ca4eece45d8_95768053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">	
</head>
<body>

<div class="header">
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<p>
		<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

	</p>
</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1324598484623ca4eece3959_93274875', 'content');
?>

</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_944653412623ca4eece4075_43465722', 'footer');
?>

	</p>
	<p>
		Stopka kalkulatora procentowego.
</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_1324598484623ca4eece3959_93274875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1324598484623ca4eece3959_93274875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_944653412623ca4eece4075_43465722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_944653412623ca4eece4075_43465722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
