<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Техподдержка");
?>
<div class="about support">
	<div>
		<h1>Техподдержка</h1>
		<h3>Уважаемые клиенты!</h3>
		<p>Вы хотите задать нам вопрос или высказать мнение о содержании сайта, предложить новый сервис или раздел - воспользуйтесь данной формой.</p>
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "template_support", Array(
	"EMAIL_TO" => "danilovmaster2110@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => "",	// Обязательные поля для заполнения
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?>
	</div>
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>