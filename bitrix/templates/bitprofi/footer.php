<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<div class="clear"></div> 
<? if ($APPLICATION->GetCurPage(false) !== '/' && !CSite::InDir('/about/') ): ?> 
</div>
<? endif; ?> 
<footer>
  <div class="impact">
		<ul class="footer-menu">
			<li>
				<a href="/">Главная</a><br>
				<a href="/catalog/">Каталог продукции </a><br>
				<a href="/about/">О компании</a><br>
				<a href="/about/contacts/">Контакты</a><br>
				<a href="/about/documentation">Документы</a><br>
				<a href="/about/brands/">Бренды</a><br>
				<span class="callback_footer">Обратная связь</span><br>
			</li>	
			<li>
				<a href="/about/help/">Помощь</a><br>
				<a href="/about/support/">Сервис</a><br>
				<a href="/about/faq/">FAQ</a><br>
				<a href="/about/delivery/">Отслеживание заказа</a><br>
				<a href="/about/purchase_returns/">Возврат товара</a><br>
				<a href="#">Места</a><br>
				<a href="/about/politics/">Политика компании</a><br>
			</li>
		</ul>
		<div class="social">
			E-mail: info@impact.ru<br>
			<span>+7 495 744 00 50</span>		
			<div class="href">
				<a href="#"><img src="/images/fb.png" alt="facebook" /></a>
				<a href="#"><img src="/images/vk.png" alt="vk" /></a>
				<a href="#"><img src="/images/insta.png" alt="instagram" /></a>
			</div> 
		</div>
		<div class="call-with-us">
			<div class="sub-form">
				<span>Подписка на рассылку</span>
				<form action="<?=POST_FORM_ACTION_URI?>" method="post"><input type="email" name="email" required placeholder="Еnter Your E-mail Adress" /><input type="submit" /></form>
			</div>
			<a class="consult" href="#">Онлайн консультант</a>
		</div>  
	</div>
	<div class="right grey">Москва, Семеновская площадь, д.1а, бизнес-центр Соколиная гора. Copyright © IMPACT 2016 Designed by BitProfi</div>
</footer>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.js"></script>
<? if ($APPLICATION->GetCurPage(false) == '/'): ?>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jcarousel.responsive.js"></script>
<? elseif ($APPLICATION->GetCurPage(false) !== '/' && !CSite::InDir('/about/') ): ?>
<script type="text/javascript">
	$(document).ready(function (){
		if ($(window).width() > 1100) {		
			function smartMargin() {
				var winWidth = $(window).width();
				var margProm = Math.floor((winWidth - 1050)/2);				
				var margProm_2 = Math.floor((winWidth - 800)/2);				
				$('.main_content').css({'margin-left': +margProm}); 
				$('.main_content').css({'margin-right': +margProm});
			}   
			smartMargin(); 
			$(window).resize(function () { 
				smartMargin();
			});
		};
	});			
</script>
<? elseif ($APPLICATION->GetCurPage(false) === '/about/support/' ): ?>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/ReloadCaptcha.js"></script>
<? elseif ($APPLICATION->GetCurPage(false) === '/about/faq/' ): ?>
<script type="text/javascript">
	$(document).ready(function (){
		$('.about.faq ul li span').click(function (){
			$(this).addClass('active');
			$(this).parent().find("div").toggleClass('show');
			$(this).parents().siblings().find('div').removeClass('show');			
			$(this).parents().siblings().find('span').removeClass('active');			
		});	
		$('.about.faq ul li div').click(function (){		
			$(this).removeClass('show');
		});
	});	
</script>
<? endif; ?> 
<script type="text/javascript">
$("document").ready(function(){
  	$(".favorite_check").click(function(e){
  		e.preventDefault();
  		var $this = $(this);
  			$.get("/personal/favoriteajax.php", {
  				elid: $this.data('id')
  			}, function(data){
  				switch(data){
  					case 'done' : var response = 'Товар успешно добавлен в избранное';$this.addClass("checked");break;
  					case 'deleted' : var response = 'Товар успешно удален из избранного';$this.removeClass("checked");break;
  					case 'fail' : var response = 'Вы не авторизованы, либо Ваш запрос некорректен';$this.removeClass("checked");break;
  				}
  					$("#favorit_label").html(response).fadeIn().delay(5000).fadeOut();
  			});
  		});
  });
</script>
<script type="text/javascript">
$("document").ready(function(){
  	$(".favorite_check").click(function(e){
  		e.preventDefault();
  		var $this = $(this);
  			$.get("/personal/favoriteajax.php", {
  				elid: $this.data('id')
  			}, function(data){
  				switch(data){
  					case 'done' : var response = 'Товар успешно добавлен в избранное';$this.addClass("checked");break;
  					case 'deleted' : var response = 'Товар успешно удален из избранного';$this.removeClass("checked");break;
  					case 'fail' : var response = 'Вы не авторизованы, либо Ваш запрос некорректен';$this.removeClass("checked");break;
  				}
  					$("#favorit_label").html(response).fadeIn().delay(5000).fadeOut();
  			});
  		});
  });
</script>
<script type="text/javascript">
$(document).ready(function (){
	$('span.callback, span.callback_footer').click (function (){
		$('div#callback').fadeIn(1200);
	});
	$('div#callback a.close').click (function (){
		$('div#callback').fadeOut(200);
	});	
	if ($(window).width() < 800) {
		$('img.mobile-search-img').click (function (){
			$('div.search-form,.top-line .ino div:eq(2)').toggle(500);
			});
		$('.mobile_menu').click (function (){
			$('.menu').toggle('slow').delay(1000);
			});
		$(window).scroll(function () {
				if ($(this).scrollTop() > 190) {
					$('.mobile_menu').delay(200).removeClass('mobile_menu').delay(200).addClass('mobile_menu_float');
					$('img.impact_back_to_top').remove();
					$('.mobile_menu_float').prepend('<div class="impact_back_to_top_mobile" ><img src="/bitrix/templates/bitprofi/images/logo_picture.png" alt="logo"title="наверх" /></div>');
					$('.menu').addClass('float');
					$('.impact_back_to_top_mobile img').click(function () {
						$('body,html').stop(false, false).animate({
							scrollTop: 0
						}, 800);
						return false;
					});						
				} else {
					$('.mobile_menu_float').delay(200).removeClass('mobile_menu_float').delay(200).addClass('mobile_menu');	
					$('.impact_back_to_top_mobile').remove();
					$('.menu').removeClass('float');
				};		
			});			
		};	
	if ($(window).width() > 800) {
				$(window).scroll(function () {
				if ($(this).scrollTop() > 190) {
					$('div.menu').delay(200).removeClass('menu').delay(200).addClass('menu_toggle');
					$('.menu_toggle').fadeIn(100);			
				} else {
					$('div.menu_toggle').removeClass('menu_toggle').addClass('menu');
					$('.menu_toggle').fadeOut(500);					
				};		
	
			});
		};		
		$('.impact_back_to_top').click(function () {
			$('body,html').stop(false, false).animate({
				scrollTop: 0
			}, 800);
			return false;
		});			
});	
</script>
</body>
</html>