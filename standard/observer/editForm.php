<?php
//-------------------------���������� ���������� � ������� ����� ������-----------------
$Site_Name="";
//--------------------------���������� ����������---------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/auth/auth.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/Smarty.class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/standard/observer/observerLib.php');
//-------------------------���� �����������---------------------------------------------
if ((getPrivelegies(14,@$_SESSION['logged_status'])!=1)){		
	header("Location:../../index.php");
}
//--------------------------���������� Smarty-----------------------------------------
$smarty = new Smarty();
$smarty->template_dir = 'template/';
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/templates_c/';
$smarty->config_dir = $Site_Name.'/library/smarty/configs/';
$smarty->cache_dir = $Site_Name.'/library/smarty/cache/';
//----------------------------------���������� �����--------------------------------------
include($_SERVER['DOCUMENT_ROOT'].'/standard/admin/headerCab.php');//���������� ����� ��������
$smarty->assign('status',$_SESSION['status']);
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabHeader.tpl');

//----------------------------------���������� ����--------------------------------------
//��������� ������� ��������

$flag=false;
if (getNumRow('observer_groups',array('group_code'=>$group))>0){
	$group_info=getAllRow('observer_groups',array('group_code'=>$group));
	$group_info=$group_info[0];
	
	if ((($group==$_SESSION['logged_login'])||($_SESSION['logged_status']==2))&&($week_begin<date("Y-m-d"))){//��� ������� �����
		//����� ������������� ������
		$flag=true;
		//�������� ���������� ������
		if (getNumRow('observer_weeks',array('week_begin'=>$week_begin,'week_end'=>$week_end,'week_group_id'=>$group_info['group_id']))>0){
			//������ ��� ����������� - ��� ��������������
			//�������� ���������� �� ������� ������ ��� ���� ������
			$week_info=getAllRow('observer_weeks',array('week_begin'=>$week_begin,'week_end'=>$week_end,'week_group_id'=>$group_info['group_id']));
			$week_info=$week_info[0];
			//�������� ������ ������ � ��������
			$query="SELECT stud.student_id,student_name,student_secname,student_patronymic,student_less,student_reason FROM observer_students AS stud,observer_students_week_connection AS week WHERE stud.student_id=week.student_id AND week.week_id=".$week_info['week_id']." AND group_id=".$group_info['group_id']." ORDER BY student_secname,student_name,student_patronymic ASC";
			$result=mysql_query($query);
			
			for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
			//��������� ������!!!
			$mode=1;//��������������
			$lessons=$week_info['week_lessons_quantity'];//���������� �������			
		}
		else{
			//������ �� ����������� - ��� ����������
			//��������� ������ ������ c �������� ��������
			
			$query="SELECT student_id,student_name,student_secname,student_patronymic,0 AS student_less,0 AS student_reason FROM observer_students WHERE group_id=".$group_info['group_id']." ORDER BY student_secname,student_name,student_patronymic ASC";			
			$result=mysql_query($query);
			for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
			$mode=2;//��������
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
		//�� ����� ������������� ������
		if ($week_begin>=date("Y-m-d")){
			$message="�� �� ������ ������������� ��� �� ��������� ������";
		}
		else{
			$message="�� �� ������ ������� � ������ ������";
		}
		$smarty->assign('message',$message);
	}
}
$smarty->assign('flag',$flag);

$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/observer/template/editForm.tpl');
//----------------------------------���������� �����--------------------------------------
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabFooter.tpl');
?>