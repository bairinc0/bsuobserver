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

