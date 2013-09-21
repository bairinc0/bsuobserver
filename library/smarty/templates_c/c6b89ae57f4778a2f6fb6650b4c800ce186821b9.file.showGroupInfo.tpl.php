<?php /* Smarty version Smarty-3.0.6, created on 2013-09-20 06:12:09
         compiled from "Z:/home/bsuobserver_ru.ru/www/standard/observer/template/showGroupInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10705523be7393e8bd9-99199666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b89ae57f4778a2f6fb6650b4c800ce186821b9' => 
    array (
      0 => 'Z:/home/bsuobserver_ru.ru/www/standard/observer/template/showGroupInfo.tpl',
      1 => 1379657316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10705523be7393e8bd9-99199666',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
<?php if ($_smarty_tpl->getVariable('group_ext')->value){?>
	<?php  $_smarty_tpl->tpl_vars['week'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('week_stat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['week']->key => $_smarty_tpl->tpl_vars['week']->value){
?>
		<?php echo $_smarty_tpl->tpl_vars['week']->value['week_begin'];?>
 - <?php echo $_smarty_tpl->tpl_vars['week']->value['week_end'];?>
 
		<a href="/observer/edit/?group_id=<?php echo $_smarty_tpl->tpl_vars['week']->value['group_id'];?>
&week_begin=<?php echo $_smarty_tpl->tpl_vars['week']->value['week_begin'];?>
&week_end=<?php echo $_smarty_tpl->tpl_vars['week']->value['week_end'];?>
"><img src="/images/edit.gif" alt="edit" title="Редактировать неделю"></a>
		: <?php if ($_smarty_tpl->tpl_vars['week']->value['filled']){?><font style="color:green">Заполнено<?php }else{ ?><font style="color:red">Незаполнено<?php }?></font> <br>
	<?php }} ?>
<?php }else{ ?>
	Ошибка, обратитесь к администратору ресурса
<?php }?>
</td>

