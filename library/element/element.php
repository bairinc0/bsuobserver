<?php


function formElement($catid){
	//Функция формирует массив: данные элемента в зависимости от типа каталога
	$data=array('catalogue_id'=>$catid);
	$data=getAllRow('catalogue',$data);
	$data=$data[0];
	$type=array('type_id'=>$data['catalogue_type']);
	$type=getAllRow('catalogue_type',$type);
	$type=$type[0];
	$element=array();
	$element['type_table']=$type['type_table'];
	$element['type_template']=$type['type_template'];
	$element['type_show_template']=$type['type_show_template'];
	$elem=array('element_id'=>$data['catalogue_element_id']);
	$elem=getAllRow($type['type_table'],$elem);
	$elem=$elem[0];
	//обрабатываем специфическую информацию и формируем итоговый массив element
	switch ($type['type_id']){
		case 1://товары
			
			break;
		case 2://информация
			$element['element_name']=$elem['element_name'];
			$element['element_content']=$elem['element_content'];
			$element['element_alt']=$elem['element_alt'];
			break;			
		default:			
			return false;
			break;
	}
	return $element;
}



?>