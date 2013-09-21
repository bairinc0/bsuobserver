<?php /* Smarty version Smarty-3.0.6, created on 2013-09-20 06:12:03
         compiled from "Z:/home/bsuobserver_ru.ru/www/standard/admin/template/loginSuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28684523be7332033a2-32610949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce3dbfb234f53ae1f505ff278aeaa910ef5b609' => 
    array (
      0 => 'Z:/home/bsuobserver_ru.ru/www/standard/admin/template/loginSuccess.tpl',
      1 => 1379657316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28684523be7332033a2-32610949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
Здравствуйте, <?php echo $_smarty_tpl->getVariable('login')->value;?>
. Вы <?php echo $_smarty_tpl->getVariable('status')->value;?>
.
<a href="/cabinet">Личный кабинет</a>