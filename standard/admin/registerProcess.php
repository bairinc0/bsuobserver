<?php
/*
 *������ ������� ����� ����������� ������������/��������������
 */
//-------------------------���������� ���������� � ������� ����� ������-----------------
$Site_Name="";
//--------------------------���������� ����������---------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/auth/auth.php');

//-------------------------���� �����������---------------------------------------------
if ((getPrivelegies(0,@$_SESSION['logged_status'])!=1)){		
	header("Location:../../index.php");
}
//--------------------------���������� Smarty-----------------------------------------

//----------------------------------���������� �����--------------------------------------
$id=$_POST['id'];
$login=$_POST['login'];
$pswd1=$_POST['password'];
$pswd2=$_POST['password2'];
$data=array('login'=>$login);
if ((getNumRow('user',$data)>0)&&($id==-1)){
	$message="������������ � ����� ������� � ���� ��� ����. ";
}
if ($login==''){
	$message="������ �����. ";
}
if (($pswd1==$pswd2)&&($message=='')){
	$pswd=md5($pswd1);
	$data=array('login'=>$login,'password'=>$pswd,'statusid'=>1,'description'=>$_POST['descr']);
	if ($id==-1){
		$id=insertOneRow('user',$data);
	}
	else{
		updateRow('user','id',$id,$data);
	}
	$message="���������� ��������";
}
else{
	if ($pswd1!=$pswd2){
		$message=$message."�� ��������� ������ ";
	}
}
header("location:registerForm.php?id=".$id."&mess=".$message);
//----------------------------------���������� ����--------------------------------------

//----------------------------------���������� �����--------------------------------------

?>