<?php
/*
 *скрипт выводит таблицу редактирования пользователей
 */
//-------------------------Определяем директорию в которой лежит скрипт-----------------
$Site_Name="";
//--------------------------Подключаем библиотеки---------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/auth/auth.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/Smarty.class.php');
//-------------------------Блок авторизации---------------------------------------------
if ((getPrivelegies(0,@$_SESSION['logged_status'])!=1)){		
	header("Location:../../index.php");
}
//--------------------------Подключаем Smarty-----------------------------------------
$smarty = new Smarty();
$smarty->template_dir = 'template/';
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/templates_c/';
$smarty->config_dir = $Site_Name.'/library/smarty/configs/';
$smarty->cache_dir = $Site_Name.'/library/smarty/cache/';
//----------------------------------Подключаем хидер--------------------------------------
include($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/standard/admin/headerCab.php');//Подключаем хидер кабинета
$smarty->display('template/cabHeader.tpl');

//----------------------------------Подключаем мейн--------------------------------------
//-----------------------------Подключаем модули для полных прав-----------------------------
$data=getAllRow('user');
$smarty->assign('data',$data);
$smarty->display('template/panelUser.tpl');
//----------------------------------Подключаем футер--------------------------------------
$smarty->display('template/cabFooter.tpl');
?>