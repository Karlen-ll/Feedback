<?php
	if($_POST){
		/* Ключи reCaptcha 3.0 */
		define('SITE_KEY', '6LcsMtEUAAAAAL8mexn4RTodAtZkO8rGeXZ3ZU9K');
		define('SECRET_KEY', '6LcsMtEUAAAAANbIzMUSCJ5rjP88Q2KjHkFLKDrX');
		
		/* Делаем запрос в Google */
		function getCaptcha($SecretKey) {
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		/* Производим запрос на Google сервис и записываем ответ */
		$Captcha = getCaptcha($_POST['g-recaptcha-response']);

		/* Если запрос удачно отправлен и значение SCORE больше 0,5 выполняем код */
		if($Captcha->success == true && $Captcha->score > 0.5) {
			// Кому отправляем письмо
			$sendto = $_POST['email'];
			$sendfrom = "karlen-ll@yandex.ru";
			
			// Получаем данные
			$username = $_POST['name'];
			$usermail = $_POST['email'];
			$userphone = $_POST['phone'];
			$message = $_POST['message'];
			$inform = 'GitHub Feedback'; // $_POST['inform'];
			
			// UTM метки
			$source = $_POST['source'];
			$medium = $_POST['medium'];
			$campaign = $_POST['campaign'];
			$content = $_POST['content'];
			$term = $_POST['term'];

			// ID пользователя. Так как я не подключил к данному примеру Матрику и Аналитику, вставим шаблон:
			$google = 'GA1.1.1122302590.1580551030';	 // isset($_COOKIE['_ga']) ? $_COOKIE["_ga"] : 0;
			$yandex	= '1580551030305075055';			 // isset($_COOKIE['_ym_uid']) ? $_COOKIE["_ym_uid"] : 0;

			// Получить e-mail из сообщения
			if(empty($usermail))
			{
				if(!empty($message))
				{
					$pattern = "/[-a-z0-9!#$%&'*_`{|}~]+[-a-z0-9!#$%&'*_`{|}~\.=?]*@[a-zA-Z0-9_-]+[a-zA-Z0-9\._-]+/i";
					preg_match_all($pattern, $message, $result);
					$usermail = implode(',', $result[0]);
				}
				else {$usermail = "";}
			}

			// Инициализация письма
			$subject = "Пример заявки с сайта";
			$headers = "From: " .strip_tags($sendfrom). "\r\n";
			$headers .= "Reply-To: " .strip_tags($sendfrom). "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html;charset=utf-8 \r\n";	
			
			// Основные данные письма
			$msg = "<html><body style='font-family:Arial,sans-serif;'>";
			//$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Пример заявки с сайта</h2>\r\n";	
			$msg .= "<p>Имя: <strong>" .$username. "</strong></p>\r\n";
			//$msg .= "<p>Телефон: <strong>"  .$userphone . "</strong></p>\r\n";
			if(!empty($usermail)) {$msg .= "<p>E-mail: " .$usermail. "</p>\r\n";}
			if(!empty($message) and $usermail <> $message) {$msg .= "<p>Сообщение: " .$message. "</p>\r\n";}
			
			// UTM метки:
			$msg .= "<br />\r\n";
			$msg .= "<p>Форма: " .$inform. "</p>\r\n";
			$msg .= "<p>reCaptcha: " .$Captcha->score. "</p>\r\n";
			if(!empty($source)) {$msg .= "<p>utm_source: " .$source. "</p>\r\n";}
			if(!empty($medium)) {$msg .= "<p>utm_medium: " .$medium. "</p>\r\n";}
			if(!empty($campaign)) {$msg .= "<p>utm_campaign: " .$campaign. "</p>\r\n";}
			if(!empty($content)) {$msg .= "<p>utm_content: " .$content. "</p>\r\n";}
			if(!empty($term)) {$msg .= "<p>utm_term: " .$term. "</p>\r\n";}
			
			// Идентификаторы аналитики:
			$msg .= "<br />\r\n";
			$msg .= "<p>Google Аналитика: " .$google. "</p>\r\n";
			$msg .= "<p>Яндекс Метрика: " .$yandex. "</p>\r\n";
			
			// Завершение письма
			$msg .= "<br />\r\n";
			$msg .= "<p>С уважением, Пиревердиев Карлен.<br />+7 (918) 852-59-36</p>\r\n";
			$msg .= "<p>" .date("m.d.y") ." ". date("H:i"). "</p>\r\n";
			$msg .= "</body></html>";

			// Отправка письма
			@mail($sendto, $subject, $msg, $headers);
			// Перенаправляем
			header("Location: feedback.php?name=".$sendto); //$username
		}
		else {
			header("Location: feedback.php?value=1");	
		}
	}
	else {
		header("Location: feedback.php"); // Ошибка. Страница не работает
	}
?>