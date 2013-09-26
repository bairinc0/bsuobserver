<html>
<head>
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <link rel="stylesheet" type="text/css" href="/code/styles.css">
  <title>Форма авторизации</title>
</head>
<body onload="document.forms[0].elements[0].focus();">
<script language="JavaScript" src="scripts.js"></script>
<script language="JavaScript">
<!--
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
//-->
function forgotPassword() {
  linkWindow("index.php");
  return false;
};
</script>
<table width="100%" height="100%" border="0">
  <tr>
    <td height="100%">
      <table class="rubr" cellspacing="0" cellpadding="2" width="400" align="center">
        <form name="auth" action="/loginProcess" method="POST" onsubmit="return checkLogin(this);">
        <tr><td colspan="2" class="rubr">&nbsp;<img src="/../../images/h_list.gif" width="15" height="15" align="absmiddle">&nbsp;Форма авторизации</td></tr>
        
        <tr class="tform"><td colspan="2" class="tform" align="center" height="25"><b>Введите логин и пароль</b></td></tr>
        <tr class="tform"><td class="tform" width="20%">Логин</td><td width="80%"><input type="text" maxlength="50" name="login" value="" class="inp" style="width: 90%;"></td></tr>
        <tr class="tform"><td class="tform">Пароль</td><td><input type="password" maxlength="50" name="password" value="" class="inp" style="width: 90%;"></td></tr>
        <tr class="tform"><input type="hidden" name="Location" value="loginForm"><td colspan="2" class="tform">&nbsp;</td></tr>
        <tr class="tform">
          <td colspan="2" class="tform" align="center">
            <input class="btn_big" type="submit" name="btn_login" value="Войти"/>
            <input class="btn_big" type="button" name="btn_passwd" value="Забыл пароль" onclick="forgotPassword();"/>
          </td>
        </tr>
        <tr class="tform"><td colspan="2" class="tform">&nbsp;</td></tr>
        </form>
      </table>
    </td>
  </tr>
</table>
</body>
</html>