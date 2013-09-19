<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:36:13
         compiled from "Z:/home/imibsu_ru.ru/www/standard/news/template/showOneNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118905153baad1766f8-21944516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f64965902b438c9bc5192edcb7b0bca3e5326241' => 
    array (
      0 => 'Z:/home/imibsu_ru.ru/www/standard/news/template/showOneNews.tpl',
      1 => 1362467565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118905153baad1766f8-21944516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	
	<!-- Content box -->
	<div id="content-box">
		<div id="content-box-in">
		<br>
			<a href="/">Главная</a>>><a href="/news">Лента новостей</a>>><?php echo $_smarty_tpl->getVariable('news')->value['name'];?>
<br><br>
			<h3 class="line"><span><?php echo $_smarty_tpl->getVariable('news')->value['name'];?>
 (<?php echo $_smarty_tpl->getVariable('news')->value['uploaddate'];?>
)</span></h3>
			<br>
			
			<?php echo $_smarty_tpl->getVariable('news')->value['content'];?>

			<br>
			<br>
		</div>
	</div>
	<!-- Content box end -->


