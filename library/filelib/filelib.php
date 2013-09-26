<?php
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
function GetFileName($fname,$fnameprefix=''){		
	if ($fnameprefix==''){
		$prefix='';
	}
	else{
		$prefix='_'.$fnameprefix;
	}
	$date_elements = explode('.',$fname);
	$filename=time().$prifex.".".$date_elements[1];
	return $filename;
};
function UploadFile($fdata,$filename,$filedir){
	$fname=$filedir."/".$filename;
	if(move_uploaded_file($fdata['tmp_name'], $fname)){
		chmod($fname,0765);
		return true;
	}
	else{
		return false;
	}
}
function UnlinkFile($fileid,$catid=''){
	if (is_numeric($catid)){
		$data=array('id'=>$fileid,'catid'=>$catid);		
	}
	else{
		$data=array('id'=>$fileid); 		
	}
	if (deleteAllRow('filesconnect',$data)) return true;
	else return false;
};
function LinkFile($fileid,$elemid){	
	$data=array('id'=>$fileid,'catid'=>$elemid);
	insertOneRow('filesconnect',$data);
	
};
function DeleteDescr($fileid){
	UnlinkFile($fileid);
	$data=array('id'=>$fileid);
	deleteAllRow('fileinfo',$data);	
	return true;	
};
function DeleteFile($fileid){	
	$data=array('sourceid'=>$fileid);
	if (getNumRow('fileinfo',$data)>0){
		$data1=getAllRow('fileinfo',$data);
		$infoid=$data1[0]['id'];
		$data1=array('sourceid'=>0);
		updateRow('fileinfo','id',$infoid,$data1);
	}
	$data=array('id'=>$fileid);
	$data1=getAllRow('files',$data);
	$link=$data1[0]['source'];//тут проверить как работать будет	
	$data1=deleteAllRow('files',$data);		
	unlink($link);
};
function getFileIcon($fileName){
	$fileInfo=pathinfo($fileName);
	$ext=$fileInfo['extension'];	
	$data=array('file_type_extension'=>$ext);
	if (getNumRow('file_type',$data)>0){
		$data=getAllRow('file_type',$data);
		return $data[0]['file_type_image'];
	}
	else{
		return "html.jpg";
	}
}
?>