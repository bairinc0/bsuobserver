<?php /* Smarty version Smarty-3.0.6, created on 2013-03-28 03:19:03
         compiled from "template/panelCat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138385153b6a7f0abb6-50475398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '891cdf3f2931e2ef4b70d19f4c0dd6fbeb144a30' => 
    array (
      0 => 'template/panelCat.tpl',
      1 => 1340616123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138385153b6a7f0abb6-50475398',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<td valign="top">
<form name="panelCatParameters" action="panelCat.php" method="get">
Глубина <select size="1" name="depth">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['name'] = 'depth_level';
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('max_depth')->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['depth_level']['total']);
?>
	<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['depth_level']['index']==$_smarty_tpl->getVariable('depth')->value||!isset($_smarty_tpl->getVariable('depth',null,true,false)->value)){?>
	<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['depth_level']['index'];?>
" selected><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['depth_level']['index'];?>
</option>
	<?php }else{ ?>
	<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['depth_level']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['depth_level']['index'];?>
</option>
	<?php }?>
<?php endfor; endif; ?>
</select>

 уровней от корня или конкретный уровень: 


<?php if (isset($_smarty_tpl->getVariable('elemented',null,true,false)->value)&&$_smarty_tpl->getVariable('elemented')->value>0){?>
	<p>Показывать узлы с элементами <input type="checkbox" name="elemented" value="0"></p>
	<?php }elseif(!isset($_smarty_tpl->getVariable('elemented',null,true,false)->value)||$_smarty_tpl->getVariable('elemented')->value==0){?>
	<p>Не показывать узлы с элементами <input type="checkbox" name="elemented" value="1"></p>
	<?php }?>

<input type="submit" value="Применить">
<br><br>
<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('type_array')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
?>
<a href="/..<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/standard/element/panelElem.php?type_id=<?php echo $_smarty_tpl->tpl_vars['type']->value['type_id'];?>
">К таблице элементов (<?php echo $_smarty_tpl->tpl_vars['type']->value['type_name'];?>
)</a><br>
<?php }} ?>
</form>


<?php if (isset($_smarty_tpl->getVariable('depth',null,true,false)->value)&&$_smarty_tpl->getVariable('depth')->value>0){?>
<table>
<form name="weightForm"  action="changeWeights.php" method="POST">
<?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
?>
<?php if ($_smarty_tpl->tpl_vars['elem']->value['catalogue_level']<=$_smarty_tpl->getVariable('depth')->value||!isset($_smarty_tpl->getVariable('depth',null,true,false)->value)){?> 
<?php ob_start();?><?php echo !isset($_smarty_tpl->getVariable('elemented',null,true,false)->value);?>
<?php $_tmp1=ob_get_clean();?><?php if ((isset($_smarty_tpl->getVariable('elemented',null,true,false)->value)&&($_smarty_tpl->getVariable('elemented')->value==1&&$_smarty_tpl->tpl_vars['elem']->value['catalogue_element_id']==0)||($_smarty_tpl->getVariable('elemented')->value==0))||$_tmp1){?>
<tr>
	<td>
	<?php if (isset($_smarty_tpl->tpl_vars['elem']->value['catalogue_level'])){?>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['name'] = 'marker_space';
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['elem']->value['catalogue_level']-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['marker_space']['total']);
?>
		&nbsp;&nbsp;&nbsp;
		<?php endfor; endif; ?>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_level'];?>
&#8594;<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_name'];?>
&nbsp;
	</td>
	<?php if ($_smarty_tpl->tpl_vars['elem']->value['catalogue_level']>0){?>
		<?php if (isset($_smarty_tpl->tpl_vars['elem']->value['catalogue_element_id'])&&$_smarty_tpl->tpl_vars['elem']->value['catalogue_element_id']==0){?>
    	<td>[<a href="catLinkForm.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_id'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/unlinked.gif" alt="link" title="Привязать элемент"></a>]</td>
		<?php }else{ ?>
    	<td>[<a href="catLinkForm.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_id'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/linked.gif" alt="link" title="Отвязать элемент"></a>]</td>
		<?php }?>
		<td>[<a href="catDeleteForm.php?id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_id'];?>
&obj=0"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/del.gif" alt="del" title="Удалить узел с потомками"></a>&nbsp;
		<a href="catDeleteForm.php?id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_id'];?>
&obj=1"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/delchildren.gif"alt="del children" title="Удалить потомков узла"></a>
		]</td>
		<td>[<a href="catEditForm.php?id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_id'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/edit.gif" alt="edit" title="Редактировать узел"></a>]</td>
		<td>[<a href="catAddProcess.php?id=<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_id'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/new.gif" alt="add" title="Добавить потомок узла"></a>]</td>
	<?php }else{ ?>
	<td></td><td></td><td></td>
	<td>[<a href="catAddProcess.php?id=0"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/new.gif" alt="add" title="Добавить потомок узла"></a>]</td>
	<?php }?>
		

	<?php if ($_smarty_tpl->tpl_vars['elem']->value['catalogue_level']>0){?>
	<td><input type="text" name="weight[<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['elem']->value['catalogue_weight'];?>
" size="5"></td>
	<?php }else{ ?>
	<td></td>
	<?php }?>
</tr>
<?php }else{ ?>

<?php }?>
<?php }?>
<?php }} ?>
<tr>
<td></td><td></td><td></td><td></td><td></td>
<td><input type="submit" value="Изменить веса"></td>
</tr>
</form>
</table>
<?php }?>
<?php if ($_smarty_tpl->getVariable('depth')->value==0){?>
	<b>Добавить корневой каталог</b> [<a href="catAddProcess.php?id=0"><img src="<?php echo $_smarty_tpl->getVariable('sitefolder')->value;?>
/images/new.gif" alt="add" title="Добавить верхний узел"></a>]
<?php }?>
</td>