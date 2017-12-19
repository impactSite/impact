(function ($) {
 $(function () {
 $('#refresh_captcha').click(function() {
 $.get(
 '/ajax/refresh_captcha.php',
 {},
 function(data) {
 $('#captcha_sid').attr('value', data);
 $('#captcha_container')
  .empty()
  .append('<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>');
 }
 );
 return false;
 });
});
})(jQuery);