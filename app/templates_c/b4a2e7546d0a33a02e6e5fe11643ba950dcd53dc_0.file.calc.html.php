<?php
/* Smarty version 4.1.0, created on 2022-03-24 19:17:53
  from 'C:\xampp\htdocs\php_04_uproszczony\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623cb5d1e8e621_37871143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a2e7546d0a33a02e6e5fe11643ba950dcd53dc' => 
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
function content_623cb5d1e8e621_37871143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1584362626623cb5d1e81e99_48668543', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_877793449623cb5d1e82957_48600024', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1994880653623cb5d1e82f42_44761969', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_1584362626623cb5d1e81e99_48668543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1584362626623cb5d1e81e99_48668543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>KALKUALTOR </p> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_877793449623cb5d1e82957_48600024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_877793449623cb5d1e82957_48600024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator obliczania rat<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1994880653623cb5d1e82f42_44761969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1994880653623cb5d1e82f42_44761969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator obliczania rat kredytu ! </h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="kw">Kwota kredytu</label>
		<input id="kw" type="number" min="1000" max="100000 placeholder="wartość x" name="kw" value="<?php echo $_smarty_tpl->tpl_vars['def']->value['x'];?>
">
	<br>
		<label style="color: white;" for="rt">podaj ilość rat</label>
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
		<h4>Wystąpiły błędy: </h4>
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
	Miesięczna rata wynosi :  <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 <br>
	Prowizja wynosi  :  <?php echo $_smarty_tpl->tpl_vars['wynik']->value['prowizja'];?>
 zł <br>
	kwota do spłaty  :  <?php echo $_smarty_tpl->tpl_vars['wynik']->value['kwotaend'];?>
  zł
	</p>

<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
