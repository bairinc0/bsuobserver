<td valign="top">
<a href="registerForm.php"><img src="{$sitefolder}/images/new.gif" alt="Добавить пользователя"></a><br>
{foreach item=elem from=$data}
{$elem.login} <a href="registerForm.php?id={$elem.id}">[Редактировать]</a> <a href="deleteUser.php?id={$elem.id}">[Удалить]</a><br>
{/foreach}
</td>

