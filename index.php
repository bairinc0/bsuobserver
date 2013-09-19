<?php 

//-------------------------���������� ���������� � ������� ����� ������-----------------
$Site_Name="";
//--------------------------------------------------------------------------------------
require_once($_SERVER['DOCUMENT_ROOT'].$Site_Name.'/library/db/db.php');
function checkSlash($furl){
	//������� ��������� ��������� �� c���, ���� �� ���������, �� ������ �������� � true
	//����� ����� false
	/* /sitename.ru/cataloguename1/subcataloguename1_1 - 1
	 * /sitename.ru/cataloguename1/ - 3
	 * /sitename.ru/cataloguename1/scriptName.php - 2
	 * /sitename.ru/cataloguename1/?phpsessid= - 2
	 * */
	if ($furl!=''){		
		if (((strpos($furl,'.')===false))&&(((strpos($furl,'?')===false)))){		
			return 1;
		}
		return 2;		
	}
	else{
		return 3;
	}
}
  function utf8_urldecode($str) {
    $str = preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode($str));
    return html_entity_decode($str,null,'UTF-8');;
  }
//--------------------------���������� ���-------------------------------------
 
$adress=explode("/",$_SERVER['REQUEST_URI']);
$num_adr=count($adress);
$pageIsIndex=false;//���������� ��� ����������� �������� SALE ������ �� �������
switch ($adress[1]){
	case ''://����		
		$pageIsIndex=true;
		include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/showIndex.php');//������� ����
		break;
	case 'gallery'://��������
		$gal=0;
		$searchFurl=explode("?",$adress[2]);
		$searchFurl=$searchFurl[0];	
		if (getNumRow('gallery_album',array('furl'=>$searchFurl))>0){
			$gal=getAllRow('gallery_album',array('furl'=>$searchFurl));
			$gal=$gal[0]['id'];
		}
		include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/gallery/showGallery.php');//������� ����
		break;
	
	case 'files'://����
		$files=array('furl'=>$adress[$num_adr-2]);
		if (getNumRow('fileinfo',$files)>0){					
			$files=getAllRow('fileinfo',$files);
			$fileid=$files[0]['sourceid'];					
			$files=array('id'=>$fileid);
			if (getNumRow('files',$files)>0){
						$files=getAllRow('files',$files);
						$source=$files[0]['source'];
						$destination='true';
						include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/file/downloadfile.php');//����� ������ �� ��������
					}
					else{						
						include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/showIndex.php');//����� ������
					}
			}
			else{
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/showIndex.php');//����� ������
			}	
			break;
	case 'fileshow'://���������� ���� � �����
			$files=array('furl'=>$adress[$num_adr-2]);
			if (getNumRow('fileinfo',$files)>0){
				$files=getAllRow('fileinfo',$files);
				$fileid=$files[0]['sourceid'];					
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/file/showFile.php');//����� ������					
			}
			else{
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/showIndex.php');//����� ������
			}	
			break;	
	case 'admin'://����
			header("Location:".$_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
			break;	
	case 'feedback':
			$header_img="/img/headers/feedback.jpg";		
			if($adress[$num_adr-2]=='ask'){
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/feedback/feedBackForm.php');
			}
			elseif($adress[$num_adr-2]=='success'){
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/feedback/feedBackSuccess.php');
			}
			else{
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/feedback/feedBackForm.php');
			}
			break;
	case 'guestbook':	
			$header_img="/img/headers/guestbook.jpg";	
			if($adress[$num_adr-2]=='ask'){
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/guestbook/feedBackForm.php');
			}
			elseif($adress[$num_adr-2]=='success'){
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/guestbook/feedBackSuccess.php');
			}
			else{
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/guestbook/feedBackShow.php');
			}
			break;		
	case 'news'://����� ��������
		if (isset($adress[2])&&!is_numeric($adress[2])&&($adress[2]!='')){
			$furl=$adress[2];
			$list=false;
		}
		else{
			$list=true;
		}
		if ((is_numeric($adress[2]))&&(is_numeric($adress[3]))){
			$year=$adress[2];
			$month=$adress[3];	
		}
		else{
			$year=0;
			$month=0;
		}
		include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/news/ShowNews.php');
		break;
	case 'manager'://����� �����������
			include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/admin/loginForm.php');//��������� �������
		break;
	case 'loginProcess'://����� �����������
			include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/admin/loginProcess.php');//��������� �������
		break;			
	case 'cabinet'://������ � ������ �������
			include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/admin/cabinet.php');//��������� �������
		break;	
	case 'observer'://������������ ���������
		switch ($adress[2]){	
			case 'edit'://�������������� ������
				$group=$_GET['group_id'];
				$week_begin=$_GET['week_begin'];				
				$week_end=$_GET['week_end'];
				//��������� ������ � �������� ��������������
				if($_SESSION['logged_status']==3){//�������� ������	
					if ($_SESSION['logged_login']==$group){//��� ������
						include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/observer/editForm.php');//��������� �������
					}
					else{
						
						include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/admin/cabinet.php');//��������� �������
					}
				}
				else{//�������
					include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/observer/editForm.php');//��������� �������	
				}	
				break;
			case 'show'://�������� ����� ������
				if (isset($adress[3]))
				{
					$group=iconv('utf-8', 'cp1251',urldecode($adress[3])); //����� ��������� �������� ������� ������� �� �������� ������
				}
				else{
					header("Location:/cabinet");
				}
				//echo $group;
				if(getNumRow('observer_groups',array('group_code'=>$group))>0){
									
					include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/observer/showGroupInfo.php');//��������� ������� ������
				}
				else{
					header("Location:/cabinet");
				}
				break;	
			case 'saveForm':
				$redirect="ok";
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/observer/saveGroupInfo.php');//�������� �������������� ������
				break;
			default://������� �����
				
				if($_SESSION['logged_status']==3){//�������� ������	
					//���������� ����� ������
					
					$group=$_SESSION['logged_login']; 
					include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/observer/showGroupInfo.php');//��������� ������� ������
				}
				else{//�������
					include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/observer/showObserver.php');//��������� ������� ��������������	
				}
		}
		
		break;	
	default://�������
		
		//echo $adress[$num_adr-1]."  ";
		//echo checkSlash($adress[$num_adr-1]);
		switch (checkSlash($adress[$num_adr-1])){
			case 1:
				
				$searchFurl=explode("?",$adress[$num_adr-1]);
				$searchFurl=$searchFurl[0];
				break;
			case 2:
				//$searchFurl=$adress[$num_adr-2];
				$searchFurl=explode("?",$adress[$num_adr-1]);
				$searchFurl=$searchFurl[0];
				if ($searchFurl==''){
					$searchFurl=$adress[$num_adr-2];
				}	
				break;
			case 3:
				$searchFurl=$adress[$num_adr-2];
				break;
		}
			
			$cat=array('catalogue_furl'=>$searchFurl);					
			if (getNumRow('catalogue',$cat)>0){							
				$cat=getAllRow('catalogue',$cat);
				$id=$cat['0']['catalogue_id'];
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/standard/cat/catShow.php');//					
			}
			else{				
				include($_SERVER['DOCUMENT_ROOT'].''.$Site_Name.'/showIndex.php');//
			}				
			break;				
	}	

?>