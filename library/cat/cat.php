<?php/*----utilities----*/
function certain_node($id){
	//¬озвращает полностью строку из таблицы `catalogue` по `catalogue_id`
	$fields=array('catalogue_id'=>$id);
	$data=getAllRow('catalogue',$fields);
	return $data[0];
}//certain_node($id)
function cmp($a,$b){
	//ѕользовательска€ функци€ сравнени€ двух строк из таблицы `catalogue` по полю `catalogue_weight`
	if($a['catalogue_weight']==$b['catalogue_weight']){return 0;}
	return ($a['catalogue_weight'] < $b['catalogue_weight']) ? -1 : 1;
}//cmp($a,$b)
function bfs($id){
	//ѕоиск в ширину по таблице `catalogue`
	$queue=array();
	$data=array();
	$tdata=array(
		"cat_id"=>$id,
		"catalogue_level"=>0,
		"content"=>0
	);
	array_push($queue,$tdata);

	while(count($queue)>0){
		//вытащить $v
		$tdata=array_pop($queue);
		//обработать $v
		array_push($data,$tdata);
		//положить в очередь всех детей $v
		$children_data=children_from_id($tdata['cat_id']);
		$k=$tdata['catalogue_level'];
		if(!empty($children_data)){
			usort($children_data,"cmp");
			foreach($children_data as $elem){
				$tdata=array(
					"cat_id"=>$elem['catalogue_id'],
					"catalogue_level"=>$k+1,
					$elem['catalogue_level']=$k+1,
					"content"=>$elem
				);
				array_push($queue,$tdata);
			}
		}
	}

	//переделываем массив $data
	//ибо нахер нам така€ запутанна€ структура
	$newdata=array();
	foreach($data as $elem){
		array_push($newdata,$elem['content']);
	}
	//print_array($newdata);
	return $newdata;
}// bfs($id)
function bfs2($id,$ex_id){
	//ѕоиск в ширину по таблице `catalogue`
	$queue=array();
	$data=array();
	$tdata=array(
		"cat_id"=>$id,
		"catalogue_level"=>0,
		"content"=>0
	);
	if(($tdata['catalogue_id']!=$ex_id)){array_push($queue,$tdata);}
	while(count($queue)>0){
		//echoa($queue);
		//вытащить $v
		$tdata=array_pop($queue);
		//echoa($tdata);
		//обработать $v
		//if($tdata['catalogue_level']>0){array_push($data,$tdata);}
		array_push($data,$tdata);
		//положить в очередь всех детей $v
		$children_data=children_from_id($tdata['cat_id']);
		$k=$tdata['catalogue_level'];
		if(!empty($children_data)){
			usort($children_data,"cmp");
			foreach($children_data as $elem){
				if($elem['catalogue_id']!=$ex_id){
					$tdata=array(
						"cat_id"=>$elem['catalogue_id'],
						"catalogue_level"=>$k+1,
						$elem['catalogue_level']=$k+1,
						"content"=>$elem
					);
					array_push($queue,$tdata);
				}
			}
		}
	}	$newdata=array();
	foreach($data as $elem){
		array_push($newdata,$elem['content']);
	}
	//print_array($newdata);
	return $newdata;
}// bfs($id)
/*----user's functional----*/
function children_from_id($id){
	//возвращает всех пр€мых потомков вершины $id
	//т.е. те строки из таблицы `catalogue`,
	//у которых `catalogue_parent_id` = $id
	$data=array("catalogue_parent_id"=>$id);
	return getAllRow('catalogue',$data);
}function get_parent_id($id){	$data=array('catalogue_id'=>$id);$cdata=getAllRow('catalogue',$data);	$parent_id=$cdata[0]['catalogue_parent_id'];	return $parent_id;}function parent_path($id){	$pathdata=array();	$current_id=$id;	$parent_id=get_parent_id($current_id);	array_push($pathdata,$current_id);		while($parent_id!=0){		$current_id=$parent_id;		$parent_id=get_parent_id($current_id);		array_push($pathdata,$current_id);	}	return $pathdata;}function parent_path_string($id,$divider='&nbsp;>>&nbsp;'){	//»зменено под фурл 2011.03.01	$strdata=array();	$pathdata=array_reverse(parent_path($id));	$path="/";	foreach($pathdata as $pathelem){		//echoa($pathelem);		$data=array("catalogue_id"=>$pathelem);		$catdata=getAllRow('catalogue',$data);		$path=$path.$catdata[0]['furl']."/";		$t="<a href=".$path.">".$catdata[0]['catalogue_name']."</a>";		array_push($strdata,$t);	}	$str=implode ($divider , $strdata);	return $str;}
function show_tree_user_string($pattern_string,$pattern_data,$limit_marker=false){
	/*
	‘ункци€ пользовательского вывода меню
	–аботает в двух вариантах:
	1. ”прощенный
	$pattern_string = строка паттерн в которой замен€ютс€ вхождени€ трех параметров
	{level} - уровень $elem['level']
	{id} - id $elem['catalogue_id']
	{name} - уровень $elem['catalogue_name']

	2. ”сложенный
	у нас есть массив $pattern_data (['key']=>['value'])
	в который мы пихаем все пол€ которые нужно вывести, например:
	{level} => $elem['level']
	{id}  => $elem['catalogue_id']
	{name}  => $elem['catalogue_name']
	{weight}  => $elem['catalogue_weight']

	$pattern_string = строка паттерн в которой замен€ютс€ вхождени€ всех параметров
	согласно содержимому массива $pattern_data (все $key замен€ютс€ на $value)
	*/
	$data=bfs(0);
	//echoa($data);
	foreach($data as $elem){
		if($elem!=0){
		$limit_marker_string='';
		for($i=0;$i<$elem['level'];$i++){
			$limit_marker_string=$limit_marker_string.$limit_marker;
		}
		$temp_string=$pattern_string;
		foreach($pattern_data as $pattern_key=>$pattern_elem){
			$temp_string=str_replace($pattern_key,$elem[$pattern_elem],$temp_string);
		}
		$temp_string=str_replace('{limit_marker}',$limit_marker_string,$temp_string);
		$result_string=$result_string.$temp_string;
		}
	}
	return $result_string;
}
function delete_childen($id){
	$data=bfs($id);
	foreach($data as $elem){
		$deletedata=array(
			'catalogue_id'=>$elem['catalogue_id']
		);
		deleteAllRow('catalogue',$deletedata);
	}
}
function delete_node($id){
	delete_childen($id);
	$deletedata=array(
		'catalogue_id'=>$id
	);
	deleteAllRow('catalogue',$deletedata);
}
function insert_child($id){
	$name='Ќовый каталог';
	$data=array(
		'catalogue_name'=>$name,
		'catalogue_parent_id'=>$id,				'catalogue_visibility'=>1
	);
	$child_id=insertOneRow('catalogue',$data);
	return $child_id;
}
function getAllLinkedCat($tablename='element'){	$elemdata=getAllRow($tablename);	$elemtype=getAllRow('catalogue_type',array('type_table'=>$tablename));
	$newdata=array();
	$coldata=array();
	array_push($coldata,'catalogue_id');	array_push($coldata,'catalogue_name');	if($elemdata){		foreach($elemdata as $elem){			$data=array(				'catalogue_element_id'=>$elem['element_id'],				'catalogue_type'=>$elemtype[0]['type_id']			);			$linkeddata=getAllRowSpecCols('catalogue',$coldata,$data);			$newelem=array(				'element_id'=>$elem['element_id'],				'element_name'=>$elem['element_name'],								'element_linked'=>$linkeddata			);			array_push($newdata,$newelem);		}	}	return $newdata;}function elem_isset($catid){	$data2=array('catalogue_id'=>$elemid);	$data2=getAllRow('catalogue',$data2);		if (($data2[0]['catalogue_element_id'])!=0){		return true;	}	else{		return false;	}} //2011.05.14function type_exist($type_id){//провер€ет есть ли тип с id = type_id	$type_array=array('type_id'=>$type_id);	if ((is_numeric($type_id))&&(getNumRow('catalogue_type',$type_array)>0)){		return true;	}	else{		return false;	}	}function cat_exist($cat_id){//провер€ет есть ли каталог с id = type_id	if ($cat_id!=0){		$cat_array=array('catalogue_id'=>$cat_id);		if ((is_numeric($cat_id))&&(getNumRow('catalogue',$cat_array)>0)){			return true;		}		else{			return false;		}		}	else{		return true;//корневой каталог	}}//-------------------------------------------------------------------------------------------------------------function formFURL($catid){	$path=array_reverse(parent_path($catid));		$furlelem="/";	for ($i=0;$i<count($path);$i++){		$curr_cat_id=$path[$i];		$curr_cat=array('catalogue_id'=>$curr_cat_id);		$curr_cat=getAllRow('catalogue',$curr_cat);				$furlelem=$furlelem.$curr_cat[0]['catalogue_furl']."/";	}		return $furlelem;		}
?>