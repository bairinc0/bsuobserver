<?php
/*
 *������ ������� ����� ����������� ������������/��������������
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
$id=$_GET['id'];

$message=$_GET['mess'];
if ((is_numeric($id))&&($id>0)){
	$smarty->assign('userid',$id);
	$data=array('id'=>$id);
	$data=getAllRow('user',$data);
	$smarty->assign('user',$data[0]);
}
else{
	$smarty->assign('userid',-1);	
}
$smarty->assign('message',$message);
$smarty->display('template/registerForm.tpl');
//----------------------------------���������� �����--------------------------------------
$smarty->display('template/cabFooter.tpl');
?>