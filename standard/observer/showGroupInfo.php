<?php
//-------------------------Определяем директорию в которой лежит скрипт-----------------
$Site_Name="";
//--------------------------Подключаем библиотеки---------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/auth/auth.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/Smarty.class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/standard/observer/observerLib.php');
//-------------------------Блок авторизации---------------------------------------------
if ((getPrivelegies(14,@$_SESSION['logged_status'])!=1)){		
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
if (getNumRow('observer_groups',array('group_code'=>$group))>0){
	$smarty->assign('group_ext',true);
	$all_weeks=get_last_weeks();
	$group_info=getAllRow('observer_groups',array('group_code'=>$group));
	$group_info=$group_info[0];		
	$weeks_stat=array();
	foreach ($all_weeks as $week){
		if (getNumRow('observer_weeks',array('week_group_id'=>$group_info['group_id'],'week_begin'=>$week['week_begin']))>0){
			$filled=true;
		}
		else{
			$filled=false;
		}
		array_push($weeks_stat,array('week_begin'=>$week['week_begin'],'week_end'=>$week['week_end'],'filled'=>$filled,'group_id'=>$group_info['group_code']));
	}
	$smarty->assign('week_stat',$weeks_stat);
}
else{
	$smarty->assign('group_ext',false);
}

$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/observer/template/showGroupInfo.tpl');
//----------------------------------Подключаем футер--------------------------------------
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabFooter.tpl');
?>