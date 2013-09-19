<?php
	//ini_set("display_errors", 0);
	ini_set(Тmagic_quotes_runtimeТ, 0);
	ini_set(Тmagic_quotes_sybaseТ, 0);
	ini_set("session.use_trans_sid",true);
	session_start();
	$conn=dbConnect('localhost','root','','imibsuru_ru');	
	//$conn=dbConnect('127.0.0.3','imi_bsu_ru','UVHrbDXGatxcYPYK','imi_bsu_ru');	
	function dbConnect($dbhost,$dblogin,$dbpassword,$dbname){
   		$result = mysql_connect($dbhost,$dblogin,$dbpassword); 
   		if (!$result){return false;}
   		if (!mysql_select_db($dbname)){return false;}
   		mysql_query("set character_set_client='cp1251'");
   		mysql_query("set character_set_results='cp1251'");
   		mysql_query("set collation_connection='cp1251_general_ci'");
   		return $result;
	}
	function getNumRow($table,$data=false){
		if (!$data){
			$str='SELECT COUNT(*) AS numRow FROM `'.$table.'`';	
		}
		else{			
			$str="SELECT COUNT(*) AS numRow FROM `".$table."` WHERE TRUE ";	
			foreach(array_keys($data) as $keys){
				$str=$str." AND `".$keys."` = '".mysql_real_escape_string($data[$keys])."'";
			}
		}		
		$result=mysql_query($str);
		if ($result){						
			$num_rows=mysql_fetch_assoc($result);	
			return $num_rows['numRow'];
		}
		else{
			return 0;
		}
	}
	function getAllRowSpecCols($table,$coldata,$data=false){
		//echoa($coldata);
		$colstr=implode(',',$coldata);
		//echo $colstr;
		if(!$data){			
			$str='SELECT '.$colstr.' FROM `'.$table.'`';	
			$result=mysql_query($str);
			if($result){
				for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
				if(count($data)>0){return $data;}
				else{return false;}
			}
			else{return false;}		
		}
		else{
			$str="SELECT ".$colstr." FROM `".$table."` WHERE TRUE ";	
			foreach(array_keys($data) as $keys){
				$str=$str." AND `".$keys."` = '".mysql_real_escape_string($data[$keys])."'";
			}
			$result=mysql_query($str);
			if($result){
				for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
				if(count($data)>0){return $data;}
				else{return false;}
			}
			else{return false;}
		}	
	}
	
	function getAllRow($table,$data=false){
		if(!$data){
			$str="SELECT * FROM `".$table."`";	
			$result=mysql_query($str);
			if($result){
				for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
				if(count($data)>0){return $data;}
				else{return false;}
			}
			else{return false;}		
		}
		else{
			$str="SELECT * FROM `".$table."` WHERE TRUE ";	
			foreach(array_keys($data) as $keys){
				$str=$str." AND `".$keys."` = '".mysql_real_escape_string($data[$keys])."'";
			}			
			$result=mysql_query($str);
			if($result){
				for($data=array();$row=mysql_fetch_assoc($result);$data[]=$row);
				if(count($data)>0){return $data;}
				else{return false;}
			}
			else{return false;}
		}
	}

	function echoa($data,$title=''){
		echo '<div style="border:1px solid #000;margin-bottom:5px;">';
		echo '<h2 style="display:inline;margin:0;padding:0;width:200px;">'.$title.'</h2>';
		echo'<pre>';
		print_r($data);
		echo'</pre>';		
		echo '</div>';
	}
	
	function insertOneRow($table,$data){
		$str="INSERT INTO `".$table."` ";
		$keystr="";
		$valuestr="";
		foreach(array_keys($data) as $keys){
			$keystr=$keystr.', `'.$keys.'`';
			if (get_magic_quotes_gpc()){
				$element=stripslashes($data[$keys]);
			}
			else{
				$element=$data[$keys];
			}
			$valuestr=$valuestr.", '".mysql_real_escape_string($element)."'";
		}		
		$keystr=strstr ( $keystr , ' ');
		$valuestr=strstr ( $valuestr , ' ');
		$str="INSERT INTO `".$table."` (".$keystr.") VALUES (".$valuestr.")";
		if($result=mysql_query($str)){return mysql_insert_id();}else{return false;};			
	}

	function deleteAllRow($table,$data){
		$str="DELETE FROM `".$table."` WHERE TRUE ";
		foreach(array_keys($data) as $keys){
			$str=$str." AND `".$keys."` = '".mysql_real_escape_string($data[$keys])."'";
		}		
		$result=mysql_query($str);
		if($result){return mysql_affected_rows();}
		else{return false;}
	}


function updateRow($table,$field,$value,$data){
	$sql_data=array();
	foreach($data as $key=>$elem){
		if (get_magic_quotes_gpc()){
			$element=stripslashes($elem);
		}
		else{
			$element=$elem;
		}
		array_push($sql_data,"`".$key."`='".mysql_real_escape_string($element)."'");
	}
	
	$sql=implode(',',$sql_data);
	$sql="UPDATE `".$table."` SET ".$sql." WHERE `".$field."`=".mysql_real_escape_string($value)." LIMIT 1";
	
	if($result=mysql_query($sql)){
		return true;
	}
	else{
		return false;
	};			
}
//ƒополнительные функции
function getMonthName($month){
	//‘ункци€ выдает русское название по номеру мес€ца
	switch($month){
		case '01':
			$name="январь";
			break;
		case '02':
			$name="‘евраль";
			break;
		case '03':
			$name="ћарт";
			break;
		case '04':
			$name="јпрель";
			break;
		case '05':
			$name="ћай";
			break;			
		case '06':
			$name="»юнь";
			break;
		case '07':
			$name="»юль";
			break;
		case '08':
			$name="јвгуст";
			break;
		case '09':
			$name="—ент€брь";
			break;				
		case '10':
			$name="ќкт€брь";
			break;
		case '11':
			$name="Ќо€брь";
			break;
		case '12':
			$name="ƒекабрь";
			break;
		default:
			$name="ќшибочно задан мес€ц";								
	}
	return $name;	
}
?>