<?php
/*
 *������ ������� ����� ����������� 
*/
if ($_SESSION['logged_in']){header("Location:/cabinet");}
//-------------------------���������� ���������� � ������� ����� ������-----------------
$Site_Name="";
//--------------------------------------------------------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/Smarty.class.php');
//--------------------------���������� Smarty-----------------------------------------
$smarty = new Smarty();
$smarty->template_dir = 'template/';
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/templates_c/';
$smarty->config_dir = '/library/smarty/configs/';
$smarty->cache_dir = '/library/smarty/cache/';
//----------------------------------������� ����--------------------------------------
$smarty->assign('head_title', 'User');
$smarty->assign('body_title', 'Access');


$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/loginForm.tpl');
?>