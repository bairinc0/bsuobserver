<td valign="top">
<a href="registerForm.php"><img src="{$sitefolder}/images/new.gif" alt="�������� ������������"></a><br>
{foreach item=elem from=$data}
{$elem.login} <a href="registerForm.php?id={$elem.id}">[�������������]</a> <a href="deleteUser.php?id={$elem.id}">[�������]</a><br>
{/foreach}
</td>

