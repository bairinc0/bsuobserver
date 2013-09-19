<?php /* Smarty version Smarty-3.0.6, created on 2013-08-23 07:11:58
         compiled from "Z:/home/imibsu_ru.ru/www/standard/admin/template/loginSuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:995452170b3e57ee06-27525734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce6e0f6b5b49638040d9006b58e81538f9209c60' => 
    array (
      0 => 'Z:/home/imibsu_ru.ru/www/standard/admin/template/loginSuccess.tpl',
      1 => 1377241614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995452170b3e57ee06-27525734',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
Здравствуйте, <?php echo $_smarty_tpl->getVariable('login')->value;?>
. Вы <?php echo $_smarty_tpl->getVariable('status')->value;?>
.
<a href="/cabinet">Личный кабинет</a>