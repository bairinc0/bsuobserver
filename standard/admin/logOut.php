<?php
/*
 * ������ ������������ ����� ������������ �� �������
 */
//-------------------------���������� ���������� � ������� ����� ������-----------------
$Site_Name="";
//---------------------------���������� ����������-------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/auth/auth.php');
//----------------------------������� �� �������---------------------------------------------
logOut();
//session_destroy();//����������, ������ ������� �� � �� ��� ���� � ��� ������
header("Location:../../index.php");
?>