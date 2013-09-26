<?php /* Smarty version Smarty-3.0.6, created on 2013-09-20 06:12:06
         compiled from "Z:/home/bsuobserver_ru.ru/www/standard/observer/template/showObserver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248523be7367339b4-52969792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20decdd126aacca4c5b7e45fddc7729668b22c9' => 
    array (
      0 => 'Z:/home/bsuobserver_ru.ru/www/standard/observer/template/showObserver.tpl',
      1 => 1379657316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248523be7367339b4-52969792',
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

