<?php /* Smarty version Smarty-3.0.6, created on 2013-08-25 13:02:23
         compiled from "Z:/home/imibsu_ru.ru/www/standard/observer/template/showObserver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20635521a005f6b0e27-73290407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a8b7930b744dc7a4550100cfdc57129604c6df' => 
    array (
      0 => 'Z:/home/imibsu_ru.ru/www/standard/observer/template/showObserver.tpl',
      1 => 1377435511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20635521a005f6b0e27-73290407',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
Сводка по заполнению:<br>
<?php if ($_smarty_tpl->getVariable('empty')->value){?>
Данные не занесены
<?php }else{ ?>
<table border=1>
<tr>
<td>Группа</td>
<td>Не заполнено!</td>
</tr>
<?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('filled')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
?>
<tr>
<td><a href="/observer/show/<?php echo $_smarty_tpl->tpl_vars['elem']->value['group_code'];?>
/"><?php echo $_smarty_tpl->tpl_vars['elem']->value['group_code'];?>
</a></td>
	<?php if ($_smarty_tpl->tpl_vars['elem']->value['filled']>0){?>
		<td style="background-color:red">
	<?php }else{ ?>
		<td>
	<?php }?>	
		<?php echo $_smarty_tpl->tpl_vars['elem']->value['filled'];?>

	</td>
</tr>
<?php }} ?>
</table>
<?php }?>
</td>

