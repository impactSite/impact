<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");
?>
<div class="blue">
	<div>
		<div>
			<h1>Доставка</h1>
			<p>Быстро и бесплатно* доставим любой ваш заказ по всей России</p>
			<p>* Бесплатная доставка товара осуществляется в большинство населенных пунктов России. Стоимость доставки составит 500 руб. в следующих случаях:</p>
			<ul>
				<li>- доставка курьером или в пункт самовывоза в Чукотский АО при сумме выкупа менее 30 000 руб. и проценте выкупа менее 50%; </li>
				<li>- доставка Почтой России на сумму менее 3 000 руб. </li>
				<li>Стоимость доставки составит 300 руб. при доставке заказа Почтой России в Чукотский АО, Республику Саха/Якутия и Магаданскую область.</li>
				<li>Для Клиентов с процентом выкупа менее 8% стоимость доставки составит 200 рублей.</li>
			</ul>
		</div>	
		<div>
			<img src="/images/icon_for_tracing_1.png" alt="доставка заказов из Импакта по России" />
			<img src="/images/icon_for_tracing_2.png" alt="доставка заказов из Импакта по России" />
			<img src="/images/icon_for_tracing_3.png" alt="доставка заказов из Импакта по России" />
		</div>
	</div>
</div>	
<div class="tracing">
	<h2>Отслеживание доставки</h2>
	<form action="">
		<input type="text" value="номер заказа"/>
		<input type="submit" value="отследить" />		
	</form>
</div>
<div class="tracing_img"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>