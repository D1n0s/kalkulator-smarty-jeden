<?php
/* Smarty version 4.1.0, created on 2022-03-24 19:17:56
  from 'C:\xampp\htdocs\php_04_uproszczony\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623cb5d40e3d59_17822620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '434963079226bde543fbc8b5f0459e4e58826653' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\app\\calc.html',
      1 => 1648145817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623cb5d40e3d59_17822620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_324213728623cb5d40d7ad6_98103994', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_848770586623cb5d40d83d3_88626976', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_806865191623cb5d40d8995_65357722', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_324213728623cb5d40d7ad6_98103994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_324213728623cb5d40d7ad6_98103994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>KALKUALTOR </p> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_848770586623cb5d40d83d3_88626976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_848770586623cb5d40d83d3_88626976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator obliczania rat<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_806865191623cb5d40d8995_65357722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_806865191623cb5d40d8995_65357722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator obliczania rat kredytu ! </h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="kw">Kwota kredytu</label>
		<input id="kw" type="number" min="1000" max="100000 placeholder="warto???? x" name="kw" value="<?php echo $_smarty_tpl->tpl_vars['def']->value['x'];?>
">
	<br>
		<label style="color: white;" for="rt">podaj ilo???? rat</label>
		<input type="range" min="3" max="36" step="3" name="rt" value="<?php echo $_smarty_tpl->tpl_vars['def']->value['y'];?>
" oninput="this.nextElementSibling.value = this.value" >
		<output style="color: white;"><?php echo $_smarty_tpl->tpl_vars['def']->value['y'];?>
</output>
	<br><br>
		<label for="op">oprocentowanie</label>
		<input id="op" type="number" min="1.0" max="15.0" name="op" value="<?php echo $_smarty_tpl->tpl_vars['def']->value['op'];?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>




<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wyst??pi??y b????dy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	Miesi??czna rata wynosi :  <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 <br>
	Prowizja wynosi  :  <?php echo $_smarty_tpl->tpl_vars['wynik']->value['prowizja'];?>
 z?? <br>
	kwota do sp??aty  :  <?php echo $_smarty_tpl->tpl_vars['wynik']->value['kwotaend'];?>
  z??
	</p>

<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
