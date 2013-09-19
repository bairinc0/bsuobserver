<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:35:08
         compiled from "Z:/home/imibsu_ru.ru/www/standard/gallery/template/showGallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266995153ba6c560646-13316565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86a7a99b5396ff159b8b2ddac36353b489f00d1c' => 
    array (
      0 => 'Z:/home/imibsu_ru.ru/www/standard/gallery/template/showGallery.tpl',
      1 => 1363070785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266995153ba6c560646-13316565',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<link type="text/css" href="/code/prettyPhoto.css" rel="stylesheet" />
<script src="/code/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="/code/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
$(function(){
  $(".foto a[rel^='prettyPhoto']").prettyPhoto({
  	theme: 'dark_rounded'
  });
});
-->
</script>
	
	<!-- Content box -->
	<div id="content-box">
		<div id="content-box-in">
		
			<!-- Content left -->
			<div id="content-box-in-left">
				<div id="content-box-in-left-in">
					<h3 class="line">
						
					<?php if ($_smarty_tpl->getVariable('onephoto')->value){?>
						<span><a href="/gallery">Галерея ИМИ</a> >><?php echo $_smarty_tpl->getVariable('gallery_info')->value['title'];?>
</span></h3>
						
					<?php }else{ ?>	
						<span>Галерея ИМИ</span></h3>
					<?php }?>
						<!-- My latest work -->
						<div class="galerie">
						<?php if ($_smarty_tpl->getVariable('onephoto')->value){?>
						
							<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gallery_photo')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
?>
								<div class="foto">
									<a rel="prettyPhoto[mixed]" href="/img/gallery/<?php echo $_smarty_tpl->tpl_vars['photo']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
">
									
									<img src="/img/gallery/<?php echo $_smarty_tpl->tpl_vars['photo']->value['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
" height="90" />
									
									</a> 
									
								</div>
							<?php }} ?>
						
						<?php }else{ ?>
						
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
" title=""><?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
</a></p>
							</div>
						<?php }} ?>
						<?php }?>
							
							
							
						</div>
						<!-- My latest work end -->
			
					
			
					
				</div>
			</div>
			<!-- Content left end -->
				
			<!-- Content right -->
			<div id="content-box-in-right">
				<div id="content-box-in-right-in">
				<?php if ($_smarty_tpl->getVariable('onephoto')->value){?>
					<h3>Описание галереи</h3>
						<?php echo $_smarty_tpl->getVariable('gallery_info')->value['description'];?>

				<?php }else{ ?>
				<?php }?>		 
				</div>
			</div>
			<!-- Content right end -->
			<div class="cleaner">&nbsp;</div>
		</div>
	</div>
	<!-- Content box end -->


