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
//Проверяем входные параметы

$flag=false;
if (getNumRow('observer_groups',array('group_code'=>$group))>0){
	$group_info=getAllRow('observer_groups',array('group_code'=>$group));
	$group_info=$group_info[0];
	
	if ((($group==$_SESSION['logged_login'])||($_SESSION['logged_status']==2))&&($week_begin<date("Y-m-d"))){//ТУТ БОЛЬШОЙ КОСЯК
		//можем редактировать неделю
		$flag=true;
		//пытаемся прогрузить неделю
		if (getNumRow('observer_weeks',array('week_begin'=>$week_begin,'week_end'=>$week_end,'week_group_id'=>$group_info['group_id']))>0){
			//неделя уже загружалась - идёт редактирование
			//получаем информацию об учебной неделе для этой группы
			$week_info=getAllRow('observer_weeks',array('week_begin'=>$week_begin,'week_end'=>$week_end,'week_group_id'=>$group_info['group_id']));
			$week_info=$week_info[0];
			//получаем список группы с оценками
			$query="SELECT stud.student_id,student_name,student_secname,student_patronymic,student_less,student_reason FROM observer_students AS stud,observer_students_week_connection AS week WHERE stud.student_id=week.student_id AND week.week_id=".$week_info['week_id']." AND group_id=".$group_info['group_id']." ORDER BY student_secname,student_name,student_patronymic ASC";
			$result=mysql_query($query);
			
			for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
			//ОБРАБОТКА ОШИБКИ!!!
			$mode=1;//редактирование
			$lessons=$week_info['week_lessons_quantity'];//Количество занятий			
		}
		else{
			//неделя не загружалась - идёт заполнение
			//формируем список группы c нулевыми оценками
			
			$query="SELECT student_id,student_name,student_secname,student_patronymic,0 AS student_less,0 AS student_reason FROM observer_students WHERE group_id=".$group_info['group_id']." ORDER BY student_secname,student_name,student_patronymic ASC";			
			$result=mysql_query($query);
			for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
			$mode=2;//создание
			$lessons=0;
		}
		$smarty->assign('group_id',$group_info['group_id']);
		$smarty->assign('week_begin',$week_begin);
		$smarty->assign('week_end',$week_end);
		$smarty->assign('mode',$mode);		
		$smarty->assign('students',$data);
		$smarty->assign('lessons',$lessons);		
		$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/observer/template/editForm.tpl');
	}
	else{
		//не можем редактировать неделю
		if ($week_begin>=date("Y-m-d")){
			$message="Вы не можете редактировать ещё не прошедшую неделю";
		}
		else{
			$message="Вы не имеете доступа к данной группе";
		}
		$smarty->assign('message',$message);
	}
}
$smarty->assign('flag',$flag);

$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/observer/template/editForm.tpl');
//----------------------------------Подключаем футер--------------------------------------
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabFooter.tpl');
?>