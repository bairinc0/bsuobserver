<?php /* Smarty version Smarty-3.0.6, created on 2013-08-26 11:41:01
         compiled from "Z:/home/imibsu_ru.ru/www/standard/observer/template/editForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20816521b3ecdcafbd3-65835841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff989eb69af8bd6a60805298c9614a5156fcf003' => 
    array (
      0 => 'Z:/home/imibsu_ru.ru/www/standard/observer/template/editForm.tpl',
      1 => 1377517260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20816521b3ecdcafbd3-65835841',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
<?php if ($_smarty_tpl->getVariable('flag')->value){?>
<form method="POST" action="/observer/saveForm/">
Количество занятий: <input name="lessons" value="<?php echo $_smarty_tpl->getVariable('lessons')->value;?>
" size="3"/><br/><br/>
<table border="1" margin="2px">
<tr>
<td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Пропущено</td><td>По ув. причине</td>
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
<input type="submit" value="Внести изменения"/>
</form>
<?php }else{ ?>
<?php echo $_smarty_tpl->getVariable('message')->value;?>

<?php }?>
</td>