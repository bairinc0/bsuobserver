<?php /* Smarty version Smarty-3.0.6, created on 2013-09-28 22:53:49
         compiled from "I:/home/test1.ru/www/standard/admin/template/cabinet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176275246df6d801432-70713452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8f7570b9633b9581d401bac7bcd9caa50e4a69' => 
    array (
      0 => 'I:/home/test1.ru/www/standard/admin/template/cabinet.tpl',
      1 => 1379600686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176275246df6d801432-70713452',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
<b>Личный кабинет</b><br>Здравствуйте <b><?php echo $_smarty_tpl->getVariable('username')->value;?>
</b><br>Ваш статус: <b><?php echo $_smarty_tpl->getVariable('status')->value;?>
</b><br><br>Доступные функции:<br>
<?php if ($_smarty_tpl->getVariable('order')->value==1){?>
<h2>Каталоги</h2>
<a href="<?php echo $_smarty_tpl->getVariable('panelCat')->value;?>
">Управление каталогами</a><br>



<h2>Другое</h2>
<a href="<?php echo $_smarty_tpl->getVariable('panelImage')->value;?>
">Управление Изображениями</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('panelFile')->value;?>
">Управление Файлами</a><br>
<a href="panelUser.php">Управление Пользователями</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('panelQ')->value;?>
">Управление Анкетами</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('panelGB')->value;?>
">Управление Гостевой книгой</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('albums')->value;?>
">Управление фотогалереей</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('panelNews')->value;?>
">Управление новостями</a><br>
<?php }else{ ?>
<a href="/observer">Перейти к редактированию посещаемости</a>
<?php }?>
</td>

