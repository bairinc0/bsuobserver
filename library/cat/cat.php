<?php
function certain_node($id){
	//���������� ��������� ������ �� ������� `catalogue` �� `catalogue_id`
	$fields=array('catalogue_id'=>$id);
	$data=getAllRow('catalogue',$fields);
	return $data[0];
}//certain_node($id)
function cmp($a,$b){
	//���������������� ������� ��������� ���� ����� �� ������� `catalogue` �� ���� `catalogue_weight`
	if($a['catalogue_weight']==$b['catalogue_weight']){return 0;}
	return ($a['catalogue_weight'] < $b['catalogue_weight']) ? -1 : 1;
}//cmp($a,$b)
function bfs($id){
	//����� � ������ �� ������� `catalogue`
	$queue=array();
	$data=array();
	$tdata=array(
		"cat_id"=>$id,
		"catalogue_level"=>0,
		"content"=>0
	);
	array_push($queue,$tdata);

	while(count($queue)>0){
		//�������� $v
		$tdata=array_pop($queue);
		//���������� $v
		array_push($data,$tdata);
		//�������� � ������� ���� ����� $v
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

	//������������ ������ $data
	//��� ����� ��� ����� ���������� ���������
	$newdata=array();
	foreach($data as $elem){
		array_push($newdata,$elem['content']);
	}
	//print_array($newdata);
	return $newdata;
}// bfs($id)
function bfs2($id,$ex_id){
	//����� � ������ �� ������� `catalogue`
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
		//�������� $v
		$tdata=array_pop($queue);
		//echoa($tdata);
		//���������� $v
		//if($tdata['catalogue_level']>0){array_push($data,$tdata);}
		array_push($data,$tdata);
		//�������� � ������� ���� ����� $v
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
	}
	foreach($data as $elem){
		array_push($newdata,$elem['content']);
	}
	//print_array($newdata);
	return $newdata;
}// bfs($id)
/*----user's functional----*/
function children_from_id($id){
	//���������� ���� ������ �������� ������� $id
	//�.�. �� ������ �� ������� `catalogue`,
	//� ������� `catalogue_parent_id` = $id
	$data=array("catalogue_parent_id"=>$id);
	return getAllRow('catalogue',$data);
}

	/*
	������� ����������������� ������ ����
	�������� � ���� ���������:
	1. ����������
	$pattern_string = ������ ������� � ������� ���������� ��������� ���� ����������
	{level} - ������� $elem['level']
	{id} - id $elem['catalogue_id']
	{name} - ������� $elem['catalogue_name']

	2. ����������
	� ��� ���� ������ $pattern_data (['key']=>['value'])
	� ������� �� ������ ��� ���� ������� ����� �������, ��������:
	{level} => $elem['level']
	{id}  => $elem['catalogue_id']
	{name}  => $elem['catalogue_name']
	{weight}  => $elem['catalogue_weight']

	$pattern_string = ������ ������� � ������� ���������� ��������� ���� ����������
	�������� ����������� ������� $pattern_data (��� $key ���������� �� $value)
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
	$name='����� �������';
	$data=array(
		'catalogue_name'=>$name,
		'catalogue_parent_id'=>$id,		
	);
	$child_id=insertOneRow('catalogue',$data);
	return $child_id;
}
function getAllLinkedCat($tablename='element'){
	$newdata=array();
	$coldata=array();
	array_push($coldata,'catalogue_id');
?>