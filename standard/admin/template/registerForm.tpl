<td valign="top">
<form name="reg" action="registerProcess.php" method="POST">
<b>{$message}</b><br>
�����: <input name="login" value="{$user.login}"><br>
������: <input type="password" name="password"><br>
������ (��������� ����): <input type="password" name="password2"><br>
��������:<br>
<textarea name="descr">{$user.description}</textarea>
<input type="hidden" name="id" value="{$userid}"><br>
<input type="submit" value="��������">
</form>
</td>

