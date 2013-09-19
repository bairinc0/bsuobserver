<?php
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
include($_SERVER['DOCUMENT_ROOT'].'/standard/admin/headerCab.php');//Подключаем хидер кабинета
$smarty->assign('status',$_SESSION['status']);
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabHeader.tpl');

//----------------------------------Подключаем мейн--------------------------------------
//-----------------------------Подключаем модули для полных прав-----------------------------
switch (getPrivelegies(0,@$_SESSION['logged_status'])){
	case 1:
		$smarty->assign('order',1);
		$smarty->assign('CatDeleteForm','/standard/cat/CatDeleteForm.php');
		$smarty->assign('CatEditForm','/standard/cat/CatEditForm.php');
		$smarty->assign('CatLinkForm','/standard/cat/CatLinkForm.php');
		$smarty->assign('CatLinkSelectForm','/standard/cat/CatLinkSelectForm.php');
		$smarty->assign('CatSelectElemForm','/standard/cat/CatSelectElemForm.php');
		$smarty->assign('CatUnlinkForm','/standard/cat/CatUnlinkForm.php');
		$smarty->assign('changeParentForm','/standard/cat/changeParentForm.php');
		$smarty->assign('panelCat','/standard/cat/panelCat.php');		
		$smarty->assign('panelElem','/standard/element/panelElem.php');
		$smarty->assign('panelImage','/standard/image/panelImage.php');
		$smarty->assign('panelFile','/standard/file/fileTable.php');		
		$smarty->assign('panelQ','./standard/feedback/panelQuestions.php');
		$smarty->assign('panelGB','/standard/guestbook/panelQuestions.php');
		$smarty->assign('panelB','/standard/banner/panelBanner.php');			
		$smarty->assign('mainInfo','/standard/statpage/editStatPage.php');
		$smarty->assign('panelNews','/standard/news/panelNews.php');
		$smarty->assign('panelOrders','/standard/cart/panelOrders.php');
		$smarty->assign('albums','/galery/my_albums/');
		$smarty->assign('pdf','/utils/pdfformer.php');
		break;	
}
if ((@$_SESSION['logged_status']==2)||(@$_SESSION['logged_status']==3)){
	$smarty->assign('order',2);
}
$smarty->assign('username',$_SESSION['logged_login']);

$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabinet.tpl');
//----------------------------------Подключаем футер--------------------------------------
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabFooter.tpl');
?>