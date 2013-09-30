<?php
/*
 *скрипт обрабатывает форму авторизации (loginForm.php) 
 */
//-------------------------Определяем директорию в которой лежит скрипт-----------------
$Site_Name="";
//----------------------------Подключаем библиотеки-------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/auth/auth.php');
/*require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/Smarty.class.php');
//--------------------------Подключаем Smarty-----------------------------------------

$smarty = new Smarty();
$smarty->template_dir = 'template/';
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/smarty/templates_c/';
$smarty->config_dir = $Site_Name.'/library/smarty/configs/';
$smarty->cache_dir = $Site_Name.'/library/smarty/cache/';
*/
//--------------------------Авторизация пользователя----------------------------------
$login=$_POST['login'];
$password=$_POST['password'];
$user=login($login,$password);
if ($user){
	setUser($user);
	header("Location:/cabinet");
	/*$smarty->assign('login',$_SESSION['logged_login']);
	$smarty->assign('status',$_SESSION['status']);	
	$smarty->display($_SERVER['DOCUMENT_ROOT'].'/standard/admin/template/loginSuccess.tpl');
	
		//echo "Здравствуйте, ".$_SESSION['logged_login'].". Вы ".$_SESSION['status'].". <a href='/cabinet'>Личный кабинет</a>";
	*/
	}
	
else{
	echo 0;
}






?>