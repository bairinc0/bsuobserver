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
//

/*$data=get_week(35,2013);
$data1=array('week_begin'=>$data['week_begin'],'week_end'=>$data['week_end'],'week_lessons_quantity'=>20,'week_group_id'=>1);
insertOneRow('observer_weeks',$data1);*/
/*$data=getAllRow('observer_groups');
foreach($data as $elem){
	$new=array("group_code"=>trim($elem['group_code']));
	updateRow('observer_groups','group_id',$elem['group_id'],$new);
}
echo "OK";*/

//деканат
//ищем сколько не заполнено в группах
$last_weeks=count(get_last_weeks());//количество недель которые прошли
$query="SELECT group_code,".$last_weeks."-COUNT(week_begin) AS filled FROM observer_groups LEFT JOIN observer_weeks ON week_group_id=group_id GROUP BY group_code";
$result=mysql_query($query);
for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
if (count($data)>0){
	$smarty->assign('filled',$data);
	$smarty->assign("empty",false);
}
else{
	$smarty->assign("empty",true);
}
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/observer/template/showObserver.tpl');
//----------------------------------Подключаем футер--------------------------------------
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabFooter.tpl');
?>