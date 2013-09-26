<?php
//«агрузка изображени€
//¬озвращает пару урл оригинала, урл превьюшки 
function uploadImage(){
	
		$data=$_FILES['uploadedImage'];
		$tmp=$data['tmp_name'];		
		if(@file_exists($tmp)){							
			$info=@getimagesize($tmp);	
			if(preg_match('(image/(.*))is',$info['mime'],$p)){
				$name="uploads/".time().".".$p[1];
				move_uploaded_file($tmp,$name);
				return $name;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	
}

//‘ункции изменени€ размера изображени€
//уже загруженного на сервер

function image_resize($source_path,$destination_path,$newWidth){	
   	$info = @getimagesize($source_path);
	if (preg_match('{image/(.*)}is', $info['mime'], $p)) {
	}
	switch($p[1]){
		case "gif": $srcImage = ImageCreateFromGIF( $source_path );break;
		case "jpg": $srcImage = ImageCreateFromJPEG( $source_path );break;
		case "jpeg": $srcImage = ImageCreateFromJPEG( $source_path );break;
		case "png": $srcImage = ImageCreateFromPNG( $source_path );break;
		default: $srcImage = ImageCreateFromGIF( $source_path );break;
	}
	// определ€ем изначальную высоту и ширину картинки
	$srcWidth = ImageSX( $srcImage );
	$srcHeight = ImageSY( $srcImage );
	// следующий код провер€ет если ширина больше высоты
	// или высота больше ширины картинки так, чтобы
	// при изменении сохранилась правильна€ пропорци€
	$ratioWidth = $newWidth/$srcWidth;
	$destWidth=$srcWidth*$ratioWidth;
	$destHeight=$srcHeight*$ratioWidth;	
	// создаем новую картинку с конечными данными ширины и высоты
	$destImage = imagecreatetrueColor($destWidth, $destHeight);	
	// копируем srcImage (исходна€) в destImage (конечную)	
	ImageCopyResized($destImage,$srcImage,0,0,0,0,$destWidth,$destHeight,$srcWidth,$srcHeight);
	//создаем gif
	ImageGif($destImage,$destination_path);
	// освобаждаем пам€ть
	ImageDestroy( $srcImage );
	ImageDestroy( $destImage ); 
   
}

//ќтображение загруженных изображений
//¬озвращает массив урлов превьюшек
//из определенной папки 
function selectImage(){

}
?>