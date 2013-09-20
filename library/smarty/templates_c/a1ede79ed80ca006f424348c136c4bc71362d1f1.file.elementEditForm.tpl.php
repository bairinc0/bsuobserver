<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:29:46
         compiled from "template/elementEditForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126745153b92abe3f61-56184604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ede79ed80ca006f424348c136c4bc71362d1f1' => 
    array (
      0 => 'template/elementEditForm.tpl',
      1 => 1341213911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126745153b92abe3f61-56184604',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<td valign="top">
<form name="elemEditProcess" method="POST" action="elemEditProcess.php" enctype="multipart/form-data">
<input type="hidden" name="elem_id" value="<?php echo $_smarty_tpl->getVariable('elem')->value['element_id'];?>
">
<input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->getVariable('cat_id')->value;?>
">
<input type="hidden" name="type_id" value="<?php echo $_smarty_tpl->getVariable('type_id')->value;?>
">

<b>Название</b><br><input type="text" name="name" value="<?php echo $_smarty_tpl->getVariable('elem')->value['element_name'];?>
"><br>

<br>
<b>Содержание</b><br>
<textarea name="content" class="" rows="20" cols="85">
<?php echo $_smarty_tpl->getVariable('elem')->value['element_content'];?>

</textarea><br><br>
<b>Краткое описание</b><br>
<textarea name="alt" class="" rows="20" cols="85">
<?php echo $_smarty_tpl->getVariable('elem')->value['element_alt'];?>

</textarea><br>

<br><br>
<input type="submit" value="Внести изменения">


</form>
<br></br>
<a href="panelElem.php">Вернуться к таблице элементов</a>
</td>