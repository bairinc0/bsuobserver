<html>
<head>
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <link rel="stylesheet" type="text/css" href="{$css}">
  <title>Личный кабинет </title>
<!-- TinyMCE -->
<script type="text/javascript" src="{$MCE}"></script>
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
    <td colspan="3" class="subhead">Ваш статус: <b>{$status}</b> (<a href="{$sitefolder}/standard/admin/logOut.php">Выйти</a>)</td>
  </tr>
  <tr>
    <td colspan="3" valign="top">
      <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td class="menu">
            <img src="{$sitefolder}/images/pil.gif" width="11" height="11">&nbsp;<a href="{$sitefolder}/standard/admin/cabinet.php">Личный кабинет</a><br>
            <img src="{$sitefolder}/images/pil.gif" width="11" height="11">&nbsp;<a href="{$sitefolder}/standard/admin/logOut.php">Выйти</a><br>
          </td>