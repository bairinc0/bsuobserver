<?php
/*
 *������ ������� ������� �������������� �������������
 */
//-------------------------���������� ���������� � ������� ����� ������-----------------
$Site_Name="";
//--------------------------���������� ����������---------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/auth/auth.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/Smarty.class.php');
//-------------------------���� �����������---------------------------------------------
if ((getPrivelegies(0,@$_SESSION['logged_status'])!=1)){		
	header("Location:../../index.php");
}
//--------------------------���������� Smarty-----------------------------------------
$smarty = new Smarty();
$smarty->template_dir = 'template/';
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/templates_c/';
$smarty->config_dir = $Site_Name.'/library/smarty/configs/';
$smarty->cache_dir = $Site_Name.'/library/smarty/cache/';
//----------------------------------���������� �����--------------------------------------
include($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/standard/admin/headerCab.php');//���������� ����� ��������
$smarty->display('template/cabHeader.tpl');

//----------------------------------���������� ����--------------------------------------
//-----------------------------���������� ������ ��� ������ ����-----------------------------
$data=getAllRow('user');
$smarty->assign('data',$data);
$smarty->display('template/panelUser.tpl');
//----------------------------------���������� �����--------------------------------------
$smarty->display('template/cabFooter.tpl');
?>