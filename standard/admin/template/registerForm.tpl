<td valign="top">
<form name="reg" action="registerProcess.php" method="POST">
<b>{$message}</b><br>
Логин: <input name="login" value="{$user.login}"><br>
Пароль: <input type="password" name="password"><br>
Пароль (Повторите ввод): <input type="password" name="password2"><br>
Описание:<br>
<textarea name="descr">{$user.description}</textarea>
<input type="hidden" name="id" value="{$userid}"><br>
<input type="submit" value="Изменить">
</form>
</td>

