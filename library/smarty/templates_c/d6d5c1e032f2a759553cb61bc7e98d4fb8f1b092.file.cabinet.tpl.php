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
<b>������ �������</b><br>������������ <b><?php echo $_smarty_tpl->getVariable('username')->value;?>
</b><br>��� ������: <b><?php echo $_smarty_tpl->getVariable('status')->value;?>
</b><br><br>��������� �������:<br>
<?php if ($_smarty_tpl->getVariable('order')->value==1){?>
<h2>��������</h2>
<a href="<?php echo $_smarty_tpl->getVariable('panelCat')->value;?>
">���������� ����������</a><br>



<h2>������</h2>
<a href="<?php echo $_smarty_tpl->getVariable('panelImage')->value;?>
">���������� �������������</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('panelFile')->value;?>
">���������� �������</a><br>
<a href="panelUser.php">���������� ��������������</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('panelQ')->value;?>
">���������� ��������</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('panelGB')->value;?>
">���������� �������� ������</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('albums')->value;?>
">���������� ������������</a><br>
<a href="<?php echo $_smarty_tpl->getVariable('panelNews')->value;?>
">���������� ���������</a><br>
<?php }else{ ?>
<a href="/observer">������� � �������������� ������������</a>
<?php }?>
</td>

