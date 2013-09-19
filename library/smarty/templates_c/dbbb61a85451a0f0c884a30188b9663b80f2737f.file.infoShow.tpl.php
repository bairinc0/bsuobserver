<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:33:12
         compiled from "Z:/home/imibsu_ru.ru/www/standard/element/template/infoShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101815153b9f89a15f9-09994683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbbb61a85451a0f0c884a30188b9663b80f2737f' => 
    array (
      0 => 'Z:/home/imibsu_ru.ru/www/standard/element/template/infoShow.tpl',
      1 => 1362467358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101815153b9f89a15f9-09994683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content-box">
		<div id="content-box-in">	<br>
		<?php echo $_smarty_tpl->getVariable('furl')->value;?>
<br><br>
		<h3 class="line"><span><?php echo $_smarty_tpl->getVariable('element')->value['element_name'];?>
</span></h3>
		<br>
		
		
		
		
		<?php echo $_smarty_tpl->getVariable('element')->value['element_content'];?>
	<br><br>
		<?php if ($_smarty_tpl->getVariable('fileexist')->value==1){?>
			<b>Прикреплённые файлы</b><br>
			<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('files')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
?>
				<a href="/fileshow/<?php echo $_smarty_tpl->tpl_vars['file']->value['furl'];?>
/" target="_blank" onClick="popupWin = window.open(this.href, 'contacts', 'location=no,scrollbars=1,menubar=no,status=no,toolbar=no,width=350,height=200,top=0'); popupWin.focus(); return false;"><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
</a><br>
			<?php }} ?>
		<?php }?>	
</div></div>