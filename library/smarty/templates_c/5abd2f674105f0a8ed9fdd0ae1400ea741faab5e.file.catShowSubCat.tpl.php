<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:36:24
         compiled from "Z:/home/imibsu_ru.ru/www/standard/cat/template/catShowSubCat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297235153bab859a765-12324750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5abd2f674105f0a8ed9fdd0ae1400ea741faab5e' => 
    array (
      0 => 'Z:/home/imibsu_ru.ru/www/standard/cat/template/catShowSubCat.tpl',
      1 => 1362628622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297235153bab859a765-12324750',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content-box">
		<div id="content-box-in">	<br>
		<?php echo $_smarty_tpl->getVariable('furl')->value;?>
<br><br>
		<?php if ($_smarty_tpl->getVariable('showcats')->value){?>
								<?php if ($_smarty_tpl->getVariable('elementsEx')->value){?>
							<?php if ($_smarty_tpl->getVariable('pageNavEx')->value){?>
								<?php echo $_smarty_tpl->getVariable('pageNav')->value;?>
						
							<?php }?>
										
										<?php if ($_smarty_tpl->getVariable('type')->value==1){?>
								
											<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('elements')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
?>
								
												<a href="<?php echo $_smarty_tpl->tpl_vars['element']->value['catalogue_furl'];?>
">
												<?php if ($_smarty_tpl->tpl_vars['element']->value['url']==''){?>
												<img src="/img/logo.gif" alt="<?php echo $_smarty_tpl->tpl_vars['element']->value['element_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['element']->value['element_artikul'];?>
" ></a><br/>
												<?php }else{ ?>
												<img src="/standard/image/<?php echo $_smarty_tpl->tpl_vars['element']->value['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['element']->value['element_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['element']->value['element_artikul'];?>
" width="180" height="240"></a><br/>
												
												<?php }?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['element']->value['catalogue_furl'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['element_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['element']->value['element_artikul'];?>
</a><br/>
												<?php echo $_smarty_tpl->tpl_vars['element']->value['parent_name'];?>
<br/>		
												<span class="price"><?php echo $_smarty_tpl->tpl_vars['element']->value['element_price'];?>
&nbsp;</span>руб<br/>
												
												<?php if ($_smarty_tpl->tpl_vars['element']->value['delim']){?>
												
												
												<?php }?>	
											<?php }} ?>
										<?php }else{ ?>
										<br>
											<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('elements')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
?>
												
												<p>
												<a href="<?php echo $_smarty_tpl->tpl_vars['element']->value['catalogue_furl'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['element_name'];?>
</a><br/>
												<?php echo $_smarty_tpl->tpl_vars['element']->value['element_alt'];?>
<br>												
												</p>																								
																									
											<?php }} ?>
											
										<?php }?>							
									
									
									
															
							<?php if ($_smarty_tpl->getVariable('pageNavEx')->value){?>
								<?php echo $_smarty_tpl->getVariable('pageNav')->value;?>
						
							<?php }?>
						<?php }?>
		<?php }else{ ?>
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
		<?php }?>
</div></div>
						
						
<!-- 

	
	 -->
			