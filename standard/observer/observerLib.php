<?php
// Возвращает дату понедельника заданного года по номеру понедельника и году
function get_monday($week, $year=""){
	//$week - номер недели в году 	
	  //$year - год
	  //34,2013 - 19 сентября 2013 г.
   /*	   $first_date = strtotime("1 january ".($year ? $year : date("Y")));
         if(date("D", $first_date)=="Mon") {
              $monday = $first_date;
         } else {
              $monday = strtotime("next Monday", $first_date)-604800;
         }
         $plus_week = "+".($week-1)." week";
    return strtotime($plus_week, $monday);
    */
	$monday  = strtotime("1 january ".($year ? $year : date("Y")));
	$dw = date("w", $monday);
	if ($dw!=1) {//если не понедельник, то переходим на дату понедельника
	    $monday = strtotime("next Monday", $monday);
	    $week--;
	    }
	//начало текущего года может приходиться на последнюю неделю предыдущего
	if (($dw>0)&($dw<5)) $week--;//учитываем это
	
	$plus_week = "$week week";
	if ($week>0) $plus_week = '+'.$plus_week;
	return strtotime($plus_week, $monday);//переходим к понедельнику заданной недели
}
//Аналог get_monday(), но возвращает дату воскресенья
function get_sunday($week, $year=""){
    return get_monday($week, $year)+604799;
}
function get_saturday($week, $year=""){
    return get_monday($week, $year)+494799;
}

function get_week($week,$year=""){
	$data=array("week_begin"=>date("Y-m-d", get_monday($week, $year)),"week_end"=>date("Y-m-d", get_sunday($week, $year)));
	return $data; 
}
//возвращает массив недель до текущей даты
function get_last_weeks(){
	$curr_date=date("Y-m-d");
	//ТУТ НУЖНА ФУНКЦИЯ ПОИСКА НОМЕРА ДЛЯ ПЕРВОЙ НЕДЕЛИ УЧЕБНОГО ГОДА!!!
	$data=array();
	$i=34;
	$week_saturday=date("Y-m-d",get_saturday($i,2013));	
	while($curr_date>=$week_saturday){		
		$week_begin=date("Y-m-d",get_monday($i,2013));
		$week_end=date("Y-m-d",get_sunday($i,2013));
		array_push($data,array("week_number"=>$i,"week_begin"=>$week_begin,"week_end"=>$week_end));
		$i++;
		$week_saturday=date("Y-m-d",get_saturday($i,2013));
	}
	return $data;
}
?>