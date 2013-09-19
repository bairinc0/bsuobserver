<td valign="top">
<b>Личный кабинет</b><br>Здравствуйте <b>{$username}</b><br>Ваш статус: <b>{$status}</b><br><br>Доступные функции:<br>
{if $order == 1}
<h2>Каталоги</h2>
<a href="{$panelCat}">Управление каталогами</a><br>



<h2>Другое</h2>
<a href="{$panelImage}">Управление Изображениями</a><br>
<a href="{$panelFile}">Управление Файлами</a><br>
<a href="panelUser.php">Управление Пользователями</a><br>
<a href="{$panelQ}">Управление Анкетами</a><br>
<a href="{$panelGB}">Управление Гостевой книгой</a><br>
<a href="{$albums}">Управление фотогалереей</a><br>
<a href="{$panelNews}">Управление новостями</a><br>
{else}
<a href="/observer">Перейти к редактированию посещаемости</a>
{/if}
</td>

