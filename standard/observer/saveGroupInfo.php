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
if ($_POST['Location']!='observerGroupEdit'){
	header("Location:/observer");
}
if ($redirect!='ok'){
	header("Location:/observer");
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
//�������� ������� ��������� � �����
$mode=$_POST['mode'];
$group_id=$_POST['group_id'];
$week_begin=$_POST['week_begin'];
$week_end=$_POST['week_end'];
$lessons=$_POST['lessons'];
$group_info=getAllRow('observer_groups',array('group_id'=>$group_id));
$group_info=$group_info[0];

//��������� ������� ���������
$flag=true;
if ($week_begin>=date("Y-m-d")){//��������� - ����� ��� �� ����� ���� ������!! ������
	$flag=false;
}
if (($_SESSION['logged_status']==3)&&($group_info['group_code']!=$_SESSION['logged_login'])){
	//������������ - �������� ������ � �������� ������ ������ ��������
	$flag=false;
}
if ($flag){
	//�������� ������ ������
	
	$students=getAllRow('observer_students',array('group_id'=>$group_id));
	if ($mode==2){//������
		//������� ������
		$week_id=insertOneRow('observer_weeks',array('week_begin'=>$week_begin,'week_end'=>$week_end,'week_lessons_quantity'=>$lessons,'week_group_id'=>$group_id));
		//�������� ������ � ��
		foreach($students as $student){	
			$insertStud=array('week_id'=>$week_id,'student_id'=>$student['student_id'],'student_less'=>$_POST['student_less_'.$student['student_id']],'student_reason'=>$_POST['student_reason_'.$student['student_id']]);		
			insertOneRow('observer_students_week_connection',$insertStud);
		}
	} 
	else{//�����������
		//�������� ������ ������		
		$week_id=getAllRow('observer_weeks',array('week_begin'=>$week_begin,'week_end'=>$week_end,'week_group_id'=>$group_id));
		$week_id=$week_id[0]['week_id'];
		if (is_numeric($week_id)&&($week_id>0)){//��������� ��� ���� ����� ������
			//����������� ������
			updateRow('observer_weeks','week_id',$week_id,array('week_lessons_quantity'=>$lessons));
			//�������� ���������
			foreach($students as $student){	
				$query="UPDATE observer_students_week_connection SET student_less=".$_POST['student_less_'.$student['student_id']].",student_reason=".$_POST['student_reason_'.$student['student_id']]." WHERE week_id=".$week_id." AND student_id=".$student['student_id']." LIMIT 1";
				mysql_query($query);								
			}
		}
	}
	$smarty->assign('message','������ ������� ���������������');
}
else{
	
	$smarty->assign('message','�� �� ������ ������������� ������ ������');
}
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/observer/template/saveGroupInfo.tpl');
//----------------------------------���������� �����--------------------------------------
$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/cabFooter.tpl');
?>