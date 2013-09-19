<?php
require_once($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/library/db/db.php');
function checkSite(){
	if ($_SESSION['site_id']=='newsite.ru'){
		return true;
	}
	else{
		return false;
	}
}
function getPrivelegies($id,$statusid){
	if (checkSite()){
		$data=array('id'=>$id,'statusid'=>$statusid);
		if (getNumRow('privilegies',$data)>0){
			$rule=getAllRow('privilegies',$data);
						
			return $rule[0]['grant'];
		}
		else{			
			return -1;
		}
	}
	else 
		return -2;
}
function setUser($user){	
	$data=array('id'=>$user['statusid']);
	$status=getAllRow('userstatus',$data);
	$_SESSION['logged_id']=$user['id'];
	$_SESSION['logged_login']=$user['login'];	
	$_SESSION['logged_status']=$user['statusid'];
	$_SESSION['status']=$status[0]['title'];	
	$_SESSION['logged_in']=true;
	$_SESSION['site_id']='newsite.ru';
}
function logOut(){
	$_SESSION['logged_id']=-1;
	$_SESSION['logged_login']=0;	
	$_SESSION['logged_status']=-1;
	$_SESSION['status']=0;	
	$_SESSION['logged_in']=false;
	$_SESSION['site_id']='unknownportal';
}
function login($login,$password){
	$data=array('login'=>$login,'password'=>md5($password));	
	if (getNumRow('user',$data)>0){
		$user=getAllRow('user',$data);
		setUser($user[0]);
		return $user[0];
	}
	else 
		return false;
}

?>
