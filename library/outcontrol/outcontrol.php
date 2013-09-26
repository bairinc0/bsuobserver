<?php
//Библиотека функций для работы со сторонними (неавторизованными) юзерами

function sendMail($email,$subject,$content,$from_name='newsite.ru',$from_mail='admin@newsite.ru'){
	//Функция отсылает на $email мыло. Возвращает true если запрос на отправку отдан серверу
	//step 1 form header
	$bound="spravkaweb-1234";
	$header="From: \"$from_name\" <$from_mail>\n";
	$header.="Subject: $subject\n";
 	$header.="Mime-Version: 1.0\n";
 	$header.="Content-Type: multipart/mixed; boundary=\"$bound\"";
 	//step 2 form body
 	$body="\n\n--$bound\n";
 	$body.="Content-type: text/html; charset=\"windows-1251\"\n";
 	$body.="Content-Transfer-Encoding: quoted-printable\n\n";
 	$body.="$content";
	if (mail($email,$subject,$body,$header)){
		return true;	
	}
	else{
		return false;
	}
}
function validEmail($email){
	//функция проверяет валидность email
	$validOne=trim($email);
	if (!(preg_match('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $validOne))){
		return false;
	}
	else{
		return true; 	
	}
}
?>