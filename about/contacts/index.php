<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Задайте вопрос");
?><div class="contacts">
	<div>
		<div>
 <img src="/images/img_cap.jpg" alt="чашка">
		</div>
		<div>
			<h1>Контакты</h1>
			<h2>+7 495 744 00 50</h2>
			<p>
				 По вопросам оптовых поставок и делового сотрудничества
			</p>
			<p>
 <a href="mailto:impact@impact.ru">impact@impact.ru</a>
			</p>
		</div>
		<div>
			<h2>Адрес нашего магазина</h2>
			<p>
				 На карте наглядно представлен наш адрес, куда Вы можете проехать и посмотреть товар
			</p>
		</div>
		<div>
			 <iframe src="https://maps.google.ru/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D0%B3.+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D1%83%D0%BB.+2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F,+%D0%B4.+38%D0%90&amp;aq=&amp;sll=55,103&amp;sspn=90.84699,270.527344&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+38,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127287&amp;ll=55.805478,37.569551&amp;spn=0.023154,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br>
 <small><a href="https://maps.google.ru/maps?f=q&source=embed&hl=ru&geocode=&q=%D0%B3.+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D1%83%D0%BB.+2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F,+%D0%B4.+38%D0%90&aq=&sll=55,103&sspn=90.84699,270.527344&t=m&ie=UTF8&hq=&hnear=2-%D1%8F+%D0%A5%D1%83%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D1%83%D0%BB.,+38,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+127287&ll=55.805478,37.569551&spn=0.023154,0.054932&z=14&iwloc=A" style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>
		</div>
	</div>
</div>
<p>
</p>
<div class="contacts_form">
	<div>
		<h2>Напишите нам</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"template2", 
	array(
		"EMAIL_TO" => "danilovmaster2110@gmail.com",
		"EVENT_MESSAGE_ID" => array(
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "template2"
	),
	false
);?>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>