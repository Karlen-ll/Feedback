<?php
 /*	Функции для Получения/Обновления/Добавления/Удаления записей из базы данных,
 	но для этого примера в них нет необходимости...
	
 	// Подключение базы
	$SQ1 = new mysqli("localhost", "login", "password", "database_name");
	if ($SQ1->connect_errno) {printf("Connect failed: %s\n", $SQ1->connect_error); exit();}
	$SQ1->query("SET NAMES 'utf8';");

	// Получение данных
	function sql_get($sq1, $sq1_table, $sq1_name, $sq1_value) {
		$sq1_result = $sq1->query("SELECT `$sq1_value` FROM `$sq1_table` WHERE `name`='$sq1_name'");
		if ($sq1_result->num_rows > 0) {
			$sq1_row = $sq1_result->fetch_row();
			return $sq1_row[0];
		} else {return '';}
		$sq1_result->close();
	}
	// Обновление данных
	function sql_up($sq1, $sq1_table, $sq1_name, $sq1_value) {
		if ($sq1_result = $sq1->query("UPDATE `$sq1_table` SET `value`='$sq1_value' WHERE `name`='$sq1_name'")) {
			return true;	
		} else {return false;}
		$sq1_result->close();
	}
	// Добавление данных
	function sql_add($sq1, $sq1_table, $sq1_name, $sq1_value) {
		if ($sq1_result = $sq1->query("INSERT INTO `$sq1_table`(`name`, `value`) VALUES ('$sq1_name','$sq1_value')")) {
			return true;
		} else {return false;}
		$sq1_result->close();
	}
	// Удаление данных
	function sql_del($sq1, $sq1_table, $sq1_name) {
		if ($sq1_result = $sq1->query("DELETE FROM `$sq1_table` WHERE `name`='$sq1_name'")) {
			return true;
		} else {return false;}
		$sq1_result->close();
	}

	// Получаем данные
	$web = sql_get($SQ1, "main", "web", "value");
	$web_url = sql_get($SQ1, "main", "web url", "value");
	$web_name = sql_get($SQ1, "main", "web name", "value"); */
	
	$web = 'karlen-ll.github.io/feedback';
	$web_url = 'https://karlen-ll.github.io/feedback/';
	$web_name = 'Feedback form';

	// Meta
	$mTitle = 'Feedback form - Pireverdiev Karlen';
	$mKeys = 'Programmer Pireverdiev Karlen';
	$mDesc = 'GitHub. My feedback form on PHP';

	// Контактная информация
	$email = 'karlen-ll@yandex.ru';
	$email_href = 'mailto:karlen-ll@yandex.ru';

	$phone = '+7 (918) 852-59-36';
	$phone_href = 'tel:+79188525936';

	// Политика
	$policy = 'Конфиденциальность';
	$policy_url = 'thanks.pdf';

	// Подпись
	$copyright = "2020 - Pireverdiev Karlen";

	// Соц.сети
	$whatsapp_url = 'https://wa.me/79188525936?text=Добрый%20день,%20мне%20нужна%20консультация';
	$telegram_url = 'https://t.me/karlen2';
	$instagram_url = 'https://www.instagram.com/karlen.ll/';
	$facebook_url = 'https://www.facebook.com/ll.karlen';
	$vk_url = 'https://vk.com/p.karlen';
	$youtube_url = '';
	$pinterest_url = '';

	// Другое
	$map_url = '';
?>

<!-- Google Analytics (gtag.js) -->
<!-- ... -->
<!-- /Google Analytics -->

<!-- Meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="author" content="Pireverdiev Karlen"/>
<meta name="format-detection" content="telephone=no">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

<!-- Windows -->
<meta name="msapplication-TileColor" content="#1268B3"> 
<meta name="application-name" content="FeedBack">
<meta name="msapplication-tooltip" content="GitHub. FeedBack form (PHP)">

<meta name="theme-color" content="#1268B3"> 
