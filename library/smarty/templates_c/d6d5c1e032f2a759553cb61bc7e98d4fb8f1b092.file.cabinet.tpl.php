<?php /* Smarty version Smarty-3.0.6, created on 2013-08-23 07:05:10
         compiled from "template/cabinet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51521709a6720618-88050689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6d5c1e032f2a759553cb61bc7e98d4fb8f1b092' => 
    array (
      0 => 'template/cabinet.tpl',
      1 => 1377241509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51521709a6720618-88050689',
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

