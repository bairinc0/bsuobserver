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
    // Сначала заменяем "односимвольные" фонемы.
    $st=strtr($st,"абвгдеёзийклмнопрстуфхъыэ_",
    "abvgdeeziyklmnoprstufhyiei");
    $st=strtr($st,"АБВГДЕЁЗИЙКЛМНОПРСТУФХЪЫЭ_",
    "ABVGDEEZIYKLMNOPRSTUFHYIEI");
    // Затем - "многосимвольные".
    $st=strtr($st,array("ж"=>"zh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh", 
                        "щ"=>"shch","ь"=>"", "ю"=>"yu", "я"=>"ya",
                        "Ж"=>"ZH", "Ц"=>"TS", "Ч"=>"CH", "Ш"=>"SH", 
                        "Щ"=>"SHCH","Ь"=>"", "Ю"=>"YU", "Я"=>"YA",
                        "ї"=>"i", "Ї"=>"Yi", "є"=>"ie", "Є"=>"Ye", " "=>"_","/"=>"-")
             );
 
    // Возвращаем результат.
    return $st;
  }
?>