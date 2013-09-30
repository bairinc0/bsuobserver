<?php /* Smarty version Smarty-3.0.6, created on 2013-09-28 22:53:42
         compiled from "I:/home/test1.ru/www/standard/admin/template/loginSuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281175246df66c6b9a2-25914653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9ac4ed31423ceab3a6e95b2508a63f7ecff3e2f' => 
    array (
      0 => 'I:/home/test1.ru/www/standard/admin/template/loginSuccess.tpl',
      1 => 1379600686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281175246df66c6b9a2-25914653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
Здравствуйте, <?php echo $_smarty_tpl->getVariable('login')->value;?>
. Вы <?php echo $_smarty_tpl->getVariable('status')->value;?>
.
<a href="/cabinet">Личный кабинет</a>