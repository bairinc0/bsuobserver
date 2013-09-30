<td valign="top">
{if $flag}
<form method="POST" action="/observer/saveForm/">
Количество занятий: <input name="lessons" value="{$lessons}" size="3"/><br/><br/>
<table border="1" margin="2px">
<tr>
	<td>Фото</td><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Пропущено</td><td>По ув. причине</td>
</tr>

{foreach item=student from=$students}
<tr>
	<td>{$student.student_photo}</td><td>{$student.student_secname}</td><td>{$student.student_name}</td><td>{$student.student_patronymic}</td>
	<td><input name="student_less_{$student.student_id}" value="{$student.student_less}" size=4/></td>
	<td><input name="student_reason_{$student.student_id}" value="{$student.student_reason}" size=4/></td>
</tr>
{/foreach}
</table>
<input type="hidden" name="mode" value="{$mode}"/>
<input type="hidden" name="group_id" value="{$group_id}"/>
<input type="hidden" name="week_begin" value="{$week_begin}"/>
<input type="hidden" name="week_end" value="{$week_end}"/>
<input type="hidden" name="Location" value="observerGroupEdit">
<input type="submit" value="Внести изменения"/>
</form>
{else}
{$message}
{/if}
</td>