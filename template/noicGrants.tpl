<div id="content-box">
		<div id="content-box-in">	<br>		
		<h3 class="line"><span>НОИЦ СИА гранты ({$year})</span></h3>
		<br>
		<a href="noicGrants.php?year=2005">2005</a> 
		<a href="noicGrants.php?year=2006">2006</a> 
		<a href="noicGrants.php?year=2007">2007</a> 
		<a href="noicGrants.php?year=2008">2008</a>
		<a href="noicGrants.php?year=2009">2009</a>
		<a href="noicGrants.php?year=2010">2010</a>
		<a href="noicGrants.php?year=2011">2011</a>
		<a href="noicGrants.php?year=2012">2012</a>
			<br>
		{foreach item=grant from=$grants}
			Название: {$grant.title}<br>
			Руководитель: {$grant.rukovoditel}<br>
			Исполнители:{$grant.ispolniteli}<br>
			Вид гранта:{$grant.type}<br>
			
			<hr>
		{/foreach}	
	
		
</div></div>