<?php
//�������� �����������
//���������� ���� ��� ���������, ��� ��������� 
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

//������� ��������� ������� �����������
//��� ������������ �� ������

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
	// ���������� ����������� ������ � ������ ��������
	$srcWidth = ImageSX( $srcImage );
	$srcHeight = ImageSY( $srcImage );
	// ��������� ��� ��������� ���� ������ ������ ������
	// ��� ������ ������ ������ �������� ���, �����
	// ��� ��������� ����������� ���������� ���������
	$ratioWidth = $newWidth/$srcWidth;
	$destWidth=$srcWidth*$ratioWidth;
	$destHeight=$srcHeight*$ratioWidth;	
	// ������� ����� �������� � ��������� ������� ������ � ������
	$destImage = imagecreatetrueColor($destWidth, $destHeight);	
	// �������� srcImage (��������) � destImage (��������)	
	ImageCopyResized($destImage,$srcImage,0,0,0,0,$destWidth,$destHeight,$srcWidth,$srcHeight);
	//������� gif
	ImageGif($destImage,$destination_path);
	// ����������� ������
	ImageDestroy( $srcImage );
	ImageDestroy( $destImage ); 
   
}

//����������� ����������� �����������
//���������� ������ ����� ���������
//�� ������������ ����� 
function selectImage(){

}
?>