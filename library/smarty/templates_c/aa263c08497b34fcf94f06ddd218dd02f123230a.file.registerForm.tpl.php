<?php /* Smarty version Smarty-3.0.6, created on 2013-09-29 16:59:22
         compiled from "template/registerForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2551522339b42d4b95-35934696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa263c08497b34fcf94f06ddd218dd02f123230a' => 
    array (
      0 => 'template/registerForm.tpl',
      1 => 1379600686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2551522339b42d4b95-35934696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
<form name="reg" action="registerProcess.php" method="POST">
<b><?php echo $_smarty_tpl->getVariable('message')->value;?>
</b><br>
Логин: <input name="login" value="<?php echo $_smarty_tpl->getVariable('user')->value['login'];?>
"><br>
Пароль: <input type="password" name="password"><br>
Пароль (Повторите ввод): <input type="password" name="password2"><br>
Описание:<br>
<textarea name="descr"><?php echo $_smarty_tpl->getVariable('user')->value['description'];?>
</textarea>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('userid')->value;?>
"><br>
<input type="submit" value="Изменить">
</form>
</td>

