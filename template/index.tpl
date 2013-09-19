
	
	<!-- Content box -->
	<div id="content-box">
		<div id="content-box-in">
		
			<!-- Content left -->
			<div id="content-box-in-left">
				<div id="content-box-in-left-in">
					<h3 class="line"><span>Важная информация</span></h3>
						
						<!-- My latest work -->
						<div class="galerie">
						
							<div class="foto">
								<a href="/how_examine" title=""><img src="/img/main/assign.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="/how_examine/" title="">Как поступить в ИМИ</a></p>
							</div>
			
							<div class="foto">
								<a href="/science/" title=""><img src="/img/main/science.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="/science/" title="">Студенческая наука</a></p>
							</div>
			
							<div class="foto">
								<a href="/sport/" title=""><img src="/img/main/sports.jpg" alt="" width="120" height="90" /></a> 
								<p><a href="/sport/" title="">Спорт</a></p>
							</div>
							<div class="cleaner">&nbsp;</div>
						</div>
						<!-- My latest work end -->
			
							<div class="perex">
								{if $special}
								{$special.content}
								{else}
								Нет важных сообщений деканата
								{/if}
							</div>
			
					<h3 class="line"><span>Галерея</span></h3>
					
						<!-- My other work -->
						<div class="galerie">
						
							
						{foreach item=gallery from=$galleries}
							<div class="foto">
								<a href="/gallery/{$gallery.furl}" title="">
								{if $gallery.url==NULL}
								<img src="/img/image.jpg" alt="" width="120" height="90" />
								{else}
								<img src="/img/gallery/{$gallery.url}" alt="" height="90" />
								{/if}
								</a> 
								<p><a href="/gallery/{$gallery.furl}/" title="">{$gallery.title}</a></p>
							</div>
						{/foreach}
							<div class="cleaner">&nbsp;</div>
						</div>
						<!-- My other work end -->
				</div>
			</div>
			<!-- Content left end -->
				
			<!-- Content right -->
			<div id="content-box-in-right">
				<div id="content-box-in-right-in">
					<h3>Новости</h3>
					{if $news}
						<dl>	
							{foreach item=new from=$news}						
							<dt>{$new.uploaddate}</dt>
								<dd>{$new.alt}
								&hellip; <span>(<a href="/news/{$new.furl}/">Подробнее&hellip;</a>)</span></dd>
							{/foreach}								
						</dl>
					{else}
						Нет новостей
					{/if}	
					<!-- 
					<h3>Связь с деканатом</h3>
						<form action="">
							<fieldset>
								<label>Name</label>
								<input type="text" /><br />
								<label>E-mail</label>
								<input type="text" value="@" /><br />
								<label>Message</label>
								<textarea cols="25" rows="7"></textarea><br />
								<input class="send-button" type="submit" value="SEND" />
							</fieldset>
						</form>
						 -->
					<h3>Сообщения деканата</h3>
					{if $newsdek}
						<dl>	
							{foreach item=new from=$newsdek}						
							<dt>{$new.uploaddate}</dt>
								<dd>{$new.alt}
								&hellip; <span>(<a href="/news/{$new.furl}/">Подробнее&hellip;</a>)</span></dd>
							{/foreach}								
						</dl>
					{else}
						Нет новостей деканата
					{/if}	 
				</div>
			</div>
			<!-- Content right end -->
			<div class="cleaner">&nbsp;</div>
		</div>
	</div>
	<!-- Content box end -->


