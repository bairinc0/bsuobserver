<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:19:00
         compiled from "template/cabHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245145153b6a40235e5-30692378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd38d122a74e0657b741492cb150976acaca67c7' => 
    array (
      0 => 'template/cabHeader.tpl',
      1 => 1340615712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245145153b6a40235e5-30692378',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('css')->value;?>
">
  <title>Личный кабинет </title>
<!-- TinyMCE -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('MCE')->value;?>
"></script>
<script type="text/javascript">
        tinyMCE.init({
                // General options
				mode : "specific_textareas",
				editor_selector : "mceEditor",
                theme : "advanced",
                plugins : "imagemanager,filemanager,safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

                // Theme options
                theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
                theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
                theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing : true,
               
                // Drop lists for link/image/media/template dialogs
                template_external_list_url : "examples/lists/template_list.js",
                external_link_list_url : "examples/lists/link_list.js",
                external_image_list_url : "examples/lists/image_list.js",
                media_external_list_url : "examples/lists/media_list.js"

               
        });
</script>
</head>
<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="head_left">Личный кабинет</td><td class="head_center">&nbsp;</td><td class="head_right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" class="subhead">Ваш статус: <b><?php echo $_smarty_tpl->getVariable('status')->value;?>
</b> (<a href="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/standard/admin/logOut.php">Выйти)</a></td>
  </tr>
  <tr>
    <td colspan="3" valign="top">
      <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="menu">
            <img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/pil.gif" width="11" height="11">&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/standard/admin/cabinet.php">Личный кабинет</a><br>
            <img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/pil.gif" width="11" height="11">&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/standard/admin/logOut.php">Выйти</a><br>
          </td>