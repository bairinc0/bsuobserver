<?php /* Smarty version Smarty-3.0.6, created on 2013-08-24 05:42:53
         compiled from "Z:/home/imibsu_ru.ru/www/standard/observer/template/showGroupInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27734521847dd4f9a83-30533245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9a28415ed11fffc9bd262f7ef1e833937256ce' => 
    array (
      0 => 'Z:/home/imibsu_ru.ru/www/standard/observer/template/showGroupInfo.tpl',
      1 => 1377322957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27734521847dd4f9a83-30533245',
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

