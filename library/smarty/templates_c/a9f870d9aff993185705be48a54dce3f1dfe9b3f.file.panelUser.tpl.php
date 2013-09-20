<?php /* Smarty version Smarty-3.0.6, created on 2013-09-01 12:57:20
         compiled from "template/panelUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20982522339b07fec32-69221365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f870d9aff993185705be48a54dce3f1dfe9b3f' => 
    array (
      0 => 'template/panelUser.tpl',
      1 => 1340615711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20982522339b07fec32-69221365',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
<a href="registerForm.php"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/new.gif" alt="Добавить пользователя"></a><br>
<?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
?>
<?php echo $_smarty_tpl->tpl_vars['elem']->value['login'];?>
 <a href="registerForm.php?id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['id'];?>
">[Редактировать]</a> <a href="deleteUser.php?id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['id'];?>
">[Удалить]</a><br>
<?php }} ?>
</td>

