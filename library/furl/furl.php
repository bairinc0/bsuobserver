<?php
function page_url($url){	
	$adress=explode("/",$url);
	if ($adress[1]=='standard'){
		$id=explode("=",$adress[4]);
		if ((is_numeric($id))&&($id>0)){
			if ($adress[3]=='cat'){
				$data=array('catalogue_id'=>$id);
				if (getNumRow('catalogue',$data)){
					$data=getAllRow('catalogue',$data);
					$furl="/".$data[0]['furl']."/";
				}
				else{
					$furl="/";
				}
			}
			else{
				$data=array('id'=>$id);
				if (getNumRow('statpage',$data)){
					$data=getAllRow('statpage',$data);
					$furl="/".$data[0]['furl']."/";
				}
				else{
					$furl="/";
				}
			}
		}
		else{
			$furl="/";
		}
	}
	else{
		$furl="/".$adress[3]."/";
	}
	return $furl;
}
function content_mod($content){
	$str=str_replace('"../../','"/',$content);
	return $str;	 
}
function translite($st){
    // ������� �������� "��������������" ������.
    $st=strtr($st,"������������������������_",
    "abvgdeeziyklmnoprstufhyiei");
    $st=strtr($st,"�����Ũ������������������_",
    "ABVGDEEZIYKLMNOPRSTUFHYIEI");
    // ����� - "���������������".
    $st=strtr($st,array("�"=>"zh", "�"=>"ts", "�"=>"ch", "�"=>"sh", 
                        "�"=>"shch","�"=>"", "�"=>"yu", "�"=>"ya",
                        "�"=>"ZH", "�"=>"TS", "�"=>"CH", "�"=>"SH", 
                        "�"=>"SHCH","�"=>"", "�"=>"YU", "�"=>"YA",
                        "�"=>"i", "�"=>"Yi", "�"=>"ie", "�"=>"Ye", " "=>"_","/"=>"-")
             );
 
    // ���������� ���������.
    return $st;
  }
?>