<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>����� �����������</title>
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
	<span style="display:block; width:100%; height:30px; color:#FFF; background-color:#424242; font:100%/30px Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; text-shadow:0 1px #000; cursor:default;">�����������</span>
    <!--<form name="auth" action="/loginProcess" method="POST" onsubmit="return checkLogin(this);">-->
        <ul>
        	<li><input type="text" maxlength="50" name="login" class="pole" placeholder="�����" autofocus id="fLogin"></li>
        	<li><input type="password" maxlength="50" name="password" class="pole" placeholder="������" id="fPassw"></li>
        	<input type="hidden" name="Location" value="loginForm">
        	<li><input type="button" name="btn_login" value="�����" class="buttons" id="go"/></li>
        <!--<li><input type="button" name="btn_passwd" value="����� ������" onclick="forgotPassword();"/></li>-->
        </ul>        
    <!--</form>-->  
</div>  
</body>
</html>