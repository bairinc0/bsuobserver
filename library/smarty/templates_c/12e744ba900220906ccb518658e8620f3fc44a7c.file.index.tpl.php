<?php /* Smarty version Smarty-3.0.6, created on 2013-08-23 06:53:43
         compiled from "template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4055521706f793b576-12390579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e744ba900220906ccb518658e8620f3fc44a7c' => 
    array (
      0 => 'template/index.tpl',
      1 => 1369890296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4055521706f793b576-12390579',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	
	<!-- Content box -->
	<div id="content-box">
		<div id="content-box-in">
		
			<!-- Content left -->
			<div id="content-box-in-left">
				<div id="content-box-in-left-in">
					<h3 class="line"><span>Важная информация</span></h3>
						
						<!-- My latest work -->
						<div class="galerie">
						
							<div class="foto">
								<a href="/how_examine" title=""><img src="/img/main/assign.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="/how_examine/" title="">Как поступить в ИМИ</a></p>
							</div>
			
							<div class="foto">
								<a href="/science/" title=""><img src="/img/main/science.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="/science/" title="">Студенческая наука</a></p>
							</div>
			
							<div class="foto">
								<a href="/sport/" title=""><img src="/img/main/sports.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="/sport/" title="">Спорт</a></p>
							</div>
							<div class="cleaner">&nbsp;</div>
						</div>
						<!-- My latest work end -->
			
							<div class="perex">
								<?php if ($_smarty_tpl->getVariable('special')->value){?>
								<?php echo $_smarty_tpl->getVariable('special')->value['content'];?>

								<?php }else{ ?>
								Нет важных сообщений деканата
								<?php }?>
							</div>
			
					<h3 class="line"><span>Галерея</span></h3>
					
						<!-- My other work -->
						<div class="galerie">
						
							
						<?php  $_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('galleries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->key => $_smarty_tpl->tpl_vars['gallery']->value){
?>
							<div class="foto">
								<a href="/gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['furl'];?>
" title="">
								<?php if ($_smarty_tpl->tpl_vars['gallery']->value['url']==null){?>
								<img src="/img/image.jpg" alt="" width="120" height="90" />
								<?php }else{ ?>
								<img src="/img/gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['url'];?>
" alt="" height="90" />
								<?php }?>
								</a> 
								<p><a href="/gallery/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['furl'];?>
/" title=""><?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
</a></p>
							</div>
						<?php }} ?>
							<div class="cleaner">&nbsp;</div>
						</div>
						<!-- My other work end -->
				</div>
			</div>
			<!-- Content left end -->
				
			<!-- Content right -->
			<div id="content-box-in-right">
				<div id="content-box-in-right-in">
					<h3>Новости</h3>
					<?php if ($_smarty_tpl->getVariable('news')->value){?>
						<dl>	
							<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
?>						
							<dt><?php echo $_smarty_tpl->tpl_vars['new']->value['uploaddate'];?>
</dt>
								<dd><?php echo $_smarty_tpl->tpl_vars['new']->value['alt'];?>

								&hellip; <span>(<a href="/news/<?php echo $_smarty_tpl->tpl_vars['new']->value['furl'];?>
/">Подробнее&hellip;</a>)</span></dd>
							<?php }} ?>								
						</dl>
					<?php }else{ ?>
						Нет новостей
					<?php }?>	
					<!-- 
					<h3>Связь с деканатом</h3>
						<form action="">
							<fieldset>
								<label>Name</label>
								<input type="text" /><br />
								<label>E-mail</label>
								<input type="text" value="@" /><br />
								<label>Message</label>
								<textarea cols="25" rows="7"></textarea><br />
								<input class="send-button" type="submit" value="SEND" />
							</fieldset>
						</form>
						 -->
					<h3>Сообщения деканата</h3>
					<?php if ($_smarty_tpl->getVariable('newsdek')->value){?>
						<dl>	
							<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('newsdek')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
?>						
							<dt><?php echo $_smarty_tpl->tpl_vars['new']->value['uploaddate'];?>
</dt>
								<dd><?php echo $_smarty_tpl->tpl_vars['new']->value['alt'];?>

								&hellip; <span>(<a href="/news/<?php echo $_smarty_tpl->tpl_vars['new']->value['furl'];?>
/">Подробнее&hellip;</a>)</span></dd>
							<?php }} ?>								
						</dl>
					<?php }else{ ?>
						Нет новостей деканата
					<?php }?>	 
				</div>
			</div>
			<!-- Content right end -->
			<div class="cleaner">&nbsp;</div>
		</div>
	</div>
	<!-- Content box end -->


