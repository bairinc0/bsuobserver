<?php
//----------------------«адание переменных дл€ шаблона кабинета------------------
$smarty->assign('status', $_SESSION['user_status']);
$smarty->assign('css', '/code/styles.css');
$smarty->assign('MCE', '/library/tiny_mce/tiny_mce.js');
?>