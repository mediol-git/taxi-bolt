<?php 
    
    if($_GET['contact-form-city']){
   
$to      = 'Nikolay@tkborder.ru';
$subject = 'Заявка с сайта driver-bolt.ru';
$city = $_GET['contact-form-city'];
$name = $_GET['contact-form-name'];
$marka = $_GET['contact-form-marka'];
$phone = $_GET['contact-form-tel'];
$text = $_GET['text'];
$message = "
Город:".$city."
Имя:".$name."
Марка:".$marka."
Телефон:".$phone."
";
$headers = 'From: support@driver-bolt.ru' . "\r\n" .
    'Reply-To: support@driver-bolt.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


if($curl = curl_init())
{
	$param['token'] = 'JrgQVId0B3LSJs0oKIzHqxx79pqUfHxb';
	$param['action'] = 'sendNewDriverRequest';
	$param['contact-form-name'] = $name;
	$param['contact-form-tel'] = $phone;
	$param['tags'] = 'driver-bolt.ru';
	$param['contact-form-marka'] = $marka;
	$param['contact-form-city'] = $city;
	$param['contact-form-taxi'] = true;
	$param['taxi-bolt'] = true;
	$param['contact-form-roistat'] = array_key_exists('roistat_visit', $_COOKIE) ? $_COOKIE['roistat_visit'] : "неизвестно";
 

   curl_setopt($curl, CURLOPT_URL, 'http://tkborder.skdigital.ru');
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_POST, true);
   curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($param));

   $out = curl_exec($curl);
   curl_close($curl);

}


        if($sended){
            echo "Письмо успешно отправленно!";
        }else{
           $text = "Заявка отправлена!";
        }
    }
 ?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" dir="ltr" lang="ru-ru">
<head>
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="expires" content="0">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Подключайтесь к Bolt и работайте на себя</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="Images/favicon.ico" rel="icon" type="image/x-icon">
  <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TQRFVSF');</script>
<!-- End Google Tag Manager -->

</head>
<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQRFVSF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="main" id="main">
	<div class="container-fluid">
		<div class="moduletable">
			<h1 class="main-header">
				Зарабатывай деньги со своим автомобилем
			</h1>
			<div class="advantages">
				<div class="row">
					<div class="col-sm-4">
						<div class="adv-elem">
							<div class="adv-pic">
								<img src="images/money.png">
							</div>
							<div class="adv-title">Зарабатывайте больше денег</div>
							<div class="adv-text">Зарабатывайте больше с Bolt.</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="adv-elem">
							<div class="adv-pic">
								<img src="images/time.png">
							</div>
							<div class="adv-title">Зарабатывайте, когда вам удобно</div>
							<div class="adv-text">Зарабатывайте, когда вам удобно, без графика и начальника. Получайте выплаты еженедельно.</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="adv-elem">
							<div class="adv-pic">
								<img src="images/credit-card.png">
							</div>
							<div class="adv-title">Отсутствие обязательных платежей</div>
							<div class="adv-text">Наша команда всегда готова вам помочь. Нужен только смартфон и приложение Bolt Driver.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main process" id="main">
	<div class="container-fluid">
		<div class="moduletable">
			<h2 class="main-header">Как это работает?</h2>
			<div class="advantages">
				<div class="row">
					<div class="col-sm-4">
						<div class="adv-elem">
							<div class="adv-title">1. Примите заказ</div>
							<div class="adv-img">
								<img src="images/step1.jpg" class="img-circle">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="adv-elem">
							<div class="adv-title">2. Заберите клиента</div>
							<div class="adv-img">
								<img src="images/step2.jpg" class="img-circle">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="adv-elem">
							<div class="adv-title">3. Отвезите его</div>
							<div class="adv-img">
								<img src="images/step3.jpg" class="img-circle">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
  <div class="contact-form-wrapper" id="contact-form-wrapper">
	<div class="container-fluid">
		<div class="contact-form-title">Подключение к партнёрам Bolt</div>
		<div class="contact-form-desc">Заполните форму, и с вами свяжутся в ближайшее время</div>
		<form id="contact-form" class="form-horizontal" role="form" data-toggle="validator" data-focus="false">
			<div class="form-group">
				<label for="contact-form-city" class="col-sm-4 control-label">Город</label>
				<div class="col-sm-4">
					<div class="form-group-select">
						<select name="contact-form-city" class="form-control contol-select" id="contact-form-city" required>
							<option>Санкт-Петербург</option>
							<option>Москва</option>
							<option>Волгоград</option>
							<option>Воронеж</option>
							<option>Волгоград</option>
							<option>Екатеринбург</option>
							<option>Казань</option>
							<option>Краснодар</option>
							<option>Красноярск</option>
							<option>Нижний Новгород</option>
							<option>Новокуйбышевск</option>
							<option>Новосибирск</option>
							<option>Омск</option>
							<option>Орел</option>
							<option>Оренбург</option>
							<option>Пермь</option>
							<option>Ростов-на-дону</option>
							<option>Самара</option>
							<option>Сочи</option>
							<option>Сызрань</option>
							<option>Тольятти</option>
							<option>Ульяновск</option>
							<option>Уфа</option>
							<option>Чебоксары</option>
							<option>Челябинск</option>
							<option>Другой город</option>
						</select>
					</div>
					<div class="help-block with-errors">&nbsp;</div>
				</div>
				<div id="moscow-message" class="col-sm-4">Для работы в г. Москва и М.О. требуется обязательное наличие лицензии на осуществление таксомоторной деятельности</div> 
			</div>
			<div class="form-group">
				<label for="contact-form-name" class="col-sm-4 control-label">Фамилия и имя</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="contact-form-name" name="contact-form-name" placeholder="Иванов Иван" required data-error="Введите имя">
					<div class="help-block with-errors">&nbsp;</div>
				</div>
			</div>
			<div class="form-group" id="company-car-container">
				<label for="contact-form-marka" class="col-sm-4 control-label">Модель, марка, год автомобиля</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="contact-form-marka" name="contact-form-marka" placeholder="Lexus RX300, 2007" required data-error="Введите модель, марку и год выпуска">
					<div class="help-block with-errors">&nbsp;</div>
				</div>
				<!--<div class="col-sm-4">
					<div id="company-car-check-container">
						<div class="checkbox">
							<label>
								<input id="company-car-check" type="checkbox"> <span style="font-size: 12px;">Хочу работать на автомобиле компании</span>
							</label>
						</div>
					</div>
				</div>-->
			</div>
			<div class="form-group">
				<label for="contact-form-tel" class="col-sm-4">Телефон</label>
				<div class="col-sm-4">
					<input type="tel" class="form-control" id="contact-form-tel" name="contact-form-tel" data-minlength="11" placeholder="87000000000" required aria-invalid="false" data-error="Введите телефон">
						<input type="hidden" class="form-control" id="contact-form-tp" name="contact-form-tp" data-minlength="11" placeholder="87000000000" required aria-invalid="false" data-error="Введите телефон">
					<div style="display:none" class="help-block with-errors">&nbsp;</div>
				</div>
			</div>
			<div class="form-wrapper-bordered form-group">
				<div class="checkbox">
					<label>
						<input id="terms" type="checkbox" data-error="Вам нужно принять условия оферты" checked> Даю согласие на обработку персональных данных
					</label>
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-wrapper-bordered">
				<div class="form-group text-center">
					<button type="submit" class="yellow-button" id="Calling" onsubmit="roistat.event.send('driverbuttonclick4');">Отправить заявку</button><br><br><div id="goodtext1"></div><?=$text;?>
				</div>
			</div>
		</form>
		<div class="under-form">
			<div>* Результаты индивидуальны и зависят от каждого конкретного случая, для получения подробной информации про комиссию и другие условия отправьте заявку на подключение.</div>
			<div>* При оплате наличными</div>
		</div>
	</div>
</div>
<style type="text/css">
	.has-danger span {
		color: #000;
	}
</style>
<div class="main" id="faq">
	<div class="container-fluid">
		<div class="moduletable">
			<h2 class="faq-header">Часто задаваемые вопросы (FAQ)</h2>
			<div class="advantages">
				<p><strong>Я не могу быть водителем в основное рабочее время. Могу ли я использовать Bolt несколько часов в неделю?</strong></p>
				<p>Конечно, некоторые из наших водителей активны только несколько часов в выходные дни, и этим обеспечивают себе дополнительный заработок.</p>
				<p><strong>Kак я получу оплату?</strong></p>
				<p>Клиенты будут платить наличными или через приложение Bolt. Безнальные средства мы переводим на Вашу личную банковскую карту.</p>
				<p><strong>Сколько я буду платить Bolt?</strong></p>
				<p>У нас нет ежемесячных платежей, вы платите только за совершенные поездки. Комиссия варьируется от 10% до 20%, на бонусы комиссии нет. Свяжитесь с нами, чтобы узнать подробности.</p>
				<p><strong>Как быстро можно зарегистрироваться?</strong></p>
				<p>Заполнение заявки займет всего 5 минут. После этого мы свяжемся с вами и расскажем, где пройти быстрый тренинг, который длится около 30 минут.</p>
				<p><strong>Что делать, если у меня нет автомобиля?</strong></p>
				<p>Мы предоставляем возможность работать на автомобиле компании.</p>
			</div>
		</div>
	</div>
</div>
<div class="footer">
  <div class="container-fluid text-center">
  </div>
</div>
<div id="form-response-popup" class="white-popup">
	<div id="form-response">
	</div>
</div>

<!-- js block -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/jquery.popupoverlay.js"></script>
<script src="js/template.js"></script>
<script >
$('#Calling').click(function () {
			if ($('#contact-form-tel').val() != '') {
				var sendData = {
					"contact-form-city": $('#contact-form-city').val(),
					"contact-form-name": $('#contact-form-name').val(),
					"contact-form-marka": $('#contact-form-marka').val(),
					"contact-form-tel": $('#contact-form-tel').val()
					
									};
				$.ajax({
					type: "GET",
					dataType: "json",
					data: sendData,
					//url: "http://bolt.mediol.in.ua/",
					url: "http://driver-bolt.ru/",
					success: function (data) {
						$('#goodtext').html('Заявка отправлена!');
					},
					error: function (jqxhr, status, errorMsg) {
						$('#goodtext').html(errorMsg);
					}
				});
			$('#goodtext1').html('Заявка отправлена!');	
			}
		});






</script>
<!-- debug -->

<a class="mgo-number-10105" href="tel:+78005004926">8 (800) 500-49-26</a>
</body>
</html>