<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:18:58
         compiled from "template/loginSuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10375153b6a26a6027-70524335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1683b36008e74c204e119a0976b20b151ff9e652' => 
    array (
      0 => 'template/loginSuccess.tpl',
      1 => 1340615708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10375153b6a26a6027-70524335',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
Здравствуйте, <?php echo $_smarty_tpl->getVariable('login')->value;?>
. Вы <?php echo $_smarty_tpl->getVariable('status')->value;?>
.
<a href="/standard/admin/cabinet.php">Личный кабинет</a>