<?php /* Smarty version Smarty-3.0.6, created on 2013-09-20 06:12:11
         compiled from "Z:/home/bsuobserver_ru.ru/www/standard/observer/template/editForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11318523be73b0ec9a8-76885784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cb5576be109abe4896ef17dffccf17ddd1bb516' => 
    array (
      0 => 'Z:/home/bsuobserver_ru.ru/www/standard/observer/template/editForm.tpl',
      1 => 1379657316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11318523be73b0ec9a8-76885784',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
<?php if ($_smarty_tpl->getVariable('flag')->value){?>
<form method="POST" action="/observer/saveForm/">
���������� �������: <input name="lessons" value="<?php echo $_smarty_tpl->getVariable('lessons')->value;?>
" size="3"/><br/><br/>
<table border="1" margin="2px">
<tr>
<td>�������</td><td>���</td><td>��������</td><td>���������</td><td>�� ��. �������</td>
</tr>

<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('students')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_secname'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['student']->value['student_patronymic'];?>
</td>
<td><input name="student_less_<?php echo $_smarty_tpl->tpl_vars['student']->value['student_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['student_less'];?>
" size=4/></td>
<td><input name="student_reason_<?php echo $_smarty_tpl->tpl_vars['student']->value['student_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['student_reason'];?>
" size=4/></td>
</tr>
<?php }} ?>
</table>
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->getVariable('mode')->value;?>
"/>
<input type="hidden" name="group_id" value="<?php echo $_smarty_tpl->getVariable('group_id')->value;?>
"/>
<input type="hidden" name="week_begin" value="<?php echo $_smarty_tpl->getVariable('week_begin')->value;?>
"/>
<input type="hidden" name="week_end" value="<?php echo $_smarty_tpl->getVariable('week_end')->value;?>
"/>
<input type="hidden" name="Location" value="observerGroupEdit">
<input type="submit" value="������ ���������"/>
</form>
<?php }else{ ?>
<?php echo $_smarty_tpl->getVariable('message')->value;?>

<?php }?>
</td>