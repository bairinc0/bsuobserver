<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:21:02
         compiled from "template/catEditForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104405153b71e96b2f8-26503721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4927320eb041779d5a210ed9beb936363b043a4' => 
    array (
      0 => 'template/catEditForm.tpl',
      1 => 1340616120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104405153b71e96b2f8-26503721',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
<b><?php echo $_smarty_tpl->getVariable('message')->value;?>
</b>
<form name="catEditProcess.php" action="catEditProcess.php" method="post">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_id'];?>
">
<table class="element">
<tr><th><b>Пункт</b></th><th><b>Текущее значение</b></th><th><b>Замена</b><br></th></tr>
<tr><td><b>Название</b></td><td><?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_name'];?>
</td><td><input type="text" name="name" value='<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_name'];?>
'><br></td></tr>
<tr><td><b>Родитель</b></td><td><?php echo $_smarty_tpl->getVariable('parentName')->value;?>
</td><td>
<a href="changeParentForm.php?id=<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_id'];?>
">Выбрать из существующих</a><br>
</td></tr>
<tr><td><b>Вес</b></td><td><?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_weight'];?>
</td><td><input type="text" name="weight" value="<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_weight'];?>
"><br></td></tr>
<?php if ($_smarty_tpl->getVariable('imageex')->value==1){?>
<tr><td><b>Картинка</b></td><td><img src="../image/<?php echo $_smarty_tpl->getVariable('image')->value['url'];?>
"  width="200">
<?php }else{ ?>
<tr><td><b>Картинка</b></td><td>Не загружена
<?php }?>
</td><td>
<a href="../image/imageSelectForm.php?cat_id=<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_id'];?>
">Выбрать из существующих</a><br>
<a href="../image/imageUploadForm.php?cat_id=<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_id'];?>
">Загрузить новую</a>
</td></tr>

<tr><td><b>Элемент</b></td><td><?php echo $_smarty_tpl->getVariable('elementName')->value;?>
</td><td>

<a href="catSelectElemForm.php?cat_id=<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_id'];?>
&type_id=<?php echo $_smarty_tpl->getVariable('catalogue_type_id')->value;?>
">Выбрать из существующих</a><br>
<a href="../element/elemAddProcess.php?cat_id=<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_id'];?>
&type_id=<?php echo $_smarty_tpl->getVariable('catalogue_type_id')->value;?>
">Создать новый</a></td></tr>
</td>

<tr><td><b>Файлы</b></td><td>
<?php if ($_smarty_tpl->getVariable('fileex')->value==1){?>
<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
?><br>
<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>

<?php }} ?>
<?php }else{ ?>
Файлы не прикреплены
<?php }?>
</td><td>
<a href="../file/fileSelect.php?catid=<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_id'];?>
">Выбрать из существующих</a><br>
<a href="../file/fileUploadForm.php">Загрузить новый</a>
</td></tr>

<!-- bair -->
<tr><td><b>Показать каталог</b></td>
<?php if ($_smarty_tpl->getVariable('elem')->value['catalogue_visibility']==1){?>
<td>Да</td>
<td><input type="checkbox" name="visibility" checked></td>
<?php }else{ ?>
<td>Нет</td>
<td><input type="checkbox" name="visibility"></td>
<?php }?>
</tr>
<tr><td><b>Тип каталога</b></td>
<td></td>
<td>
<select name="catalogue_type">
<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('catalogue_types')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['type_id'];?>
" <?php echo $_smarty_tpl->tpl_vars['type']->value['checked'];?>
><?php echo $_smarty_tpl->tpl_vars['type']->value['type_name'];?>
</option>
<?php }} ?>
</select>
</td>
</tr>
<!-- bair -->
<tr><td><b>ЧПУ</b></td>
<td><?php echo $_smarty_tpl->getVariable('elem')->value['furl'];?>
</td>
<td><input name="furl" value="<?php echo $_smarty_tpl->getVariable('elem')->value['catalogue_furl'];?>
" ></td></tr>

</table>

<br>
<input type="submit" value="Внести изменения">
</form>
<br></br>
<a href="panelCat.php">Вернуться к таблице каталогов</a>
</td>