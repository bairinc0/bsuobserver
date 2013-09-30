<?php
/*
 *скрипт выводит форму авторизации 
*/
if ($_SESSION['logged_in']){header("Location:/cabinet");}
//-------------------------Определяем директорию в которой лежит скрипт-----------------
$Site_Name="";
//--------------------------------------------------------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/Smarty.class.php');
//--------------------------Подключаем Smarty-----------------------------------------
$smarty = new Smarty();
$smarty->template_dir = 'template/';
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/templates_c/';
$smarty->config_dir = '/library/smarty/configs/';
$smarty->cache_dir = '/library/smarty/cache/';
//----------------------------------Врубаем мейн--------------------------------------
$smarty->assign('head_title', 'User');
$smarty->assign('body_title', 'Access');


$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/loginForm.tpl');
?>