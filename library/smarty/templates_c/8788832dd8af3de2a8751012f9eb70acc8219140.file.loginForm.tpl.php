<?php /* Smarty version Smarty-3.0.6, created on 2013-09-29 16:39:47
         compiled from "I:/home/test1.ru/www/standard/admin/template/loginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177865247d943c29de2-64621481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8788832dd8af3de2a8751012f9eb70acc8219140' => 
    array (
      0 => 'I:/home/test1.ru/www/standard/admin/template/loginForm.tpl',
      1 => 1380440375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177865247d943c29de2-64621481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>Форма авторизации</title>
<link rel="stylesheet" href="/code/login-form.css">
<script src="/code/js/jquery-1.5.min.js" type="text/javascript"></script>
<script src="/code/my_js/autoriz.js" type="text/javascript"></script>
<script src="scripts.js" type="text/javascript"></script>
<!--<script type="text/javascript">
function checkLogin(form) {
  if (form.login_name.value.length == 0 || form.login_name.value.length > 50) {
    form.login_name.focus();
    alert("Please enter 'Login Name'");
    return false;
  }
  if (form.user_passwd.value.length == 0 || form.user_passwd.value.length > 50) {
    form.user_passwd.focus();
    alert("Please enter 'Password'");
    return false;
  }
  form.btn_login.disabled = true;
  return false;
};
function forgotPassword() {
  linkWindow("about:blank");
  return false;
};

function forgotPassword() {
  linkWindow("index.php");
  return false;
};
</script>-->
</head>
<body>
<span id="warning" class=""></span>
<div id="wrapper">
	<span style="display:block; width:100%; height:30px; color:#FFF; background-color:#424242; font:100%/30px Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; text-shadow:0 1px #000; cursor:default;">Авторизация</span>
    <!--<form name="auth" action="/loginProcess" method="POST" onsubmit="return checkLogin(this);">-->
        <ul>
        	<li><input type="text" maxlength="50" name="login" class="pole" placeholder="Логин" autofocus id="fLogin"></li>
        	<li><input type="password" maxlength="50" name="password" class="pole" placeholder="Пароль" id="fPassw"></li>
        	<input type="hidden" name="Location" value="loginForm">
        	<li><input type="button" name="btn_login" value="Войти" class="buttons" id="go"/></li>
        <!--<li><input type="button" name="btn_passwd" value="Забыл пароль" onclick="forgotPassword();"/></li>-->
        </ul>        
    <!--</form>-->  
</div>  
</body>
</html>