<!DOCTYPE HTML>
<html>
	<head>
		<?php
			require ("head.php");
		
			$HintMsg = '';
			if (!empty($_GET['value'])) {
				if ($_GET['value'] <= '1') {
					$HintMsg = 'reCaptcha';
					$HeaderMsg = 'Заявка не отправлена';
					$TextMsg = '<p>Что-то пошло не так, но это не должно <br class="v_mob" />Вас остановить!<br /><a class="imp_words"><span>Напишите</span> нам<span class="tooltip"><span class="icon"></span>И мы с радостью ответим!</span></a> в WhatsApp, Telegram <br class="v_mob" />или на почту:</p>';

				}
				else {
					$HintMsg = 'ОШИБКА '. $_GET['value'];
					$HeaderMsg = 'Страница не работает';
					$TextMsg = '<p>Но наш маркетинг работает всегда!<br />Убедитесь сами, <a class="imp_words"><span>вступайте</span> в наши группы<span class="tooltip"><span class="icon"></span>Мы там обсуждаем бизнес, делимся инструментами и инсайтами.</span></a> <br class="v_mob" />в социальных сетях:</p>';
				}
			}
			else {
				if (empty($_GET['name'])) {
					$HintMsg = 'ОШИБКА 404';
					$HeaderMsg = 'Страница не работает';
					$TextMsg = '<p>Но наш маркетинг работает всегда!<br />Убедитесь сами, <a class="imp_words"><span>вступайте</span> в наши группы<span class="tooltip"><span class="icon"></span>Мы там обсуждаем бизнес, делимся инструментами и инсайтами.</span></a> в социальных сетях:</p>';
				}
				else {
					$HeaderMsg = isset($_GET['name']) ? $_GET['name'].', спасибо за заявку' : 'Спасибо за заявку';
					$TextMsg = '<p>Наши менеджеры свяжутся с Вами <br class="v_mob" />в ближайшее время!<br /><a class="imp_words"><span>Вступайте</span> в наши группы<span class="tooltip"><span class="icon"></span>Мы там обсуждаем бизнес, делимся инструментами и инсайтами.</span></a> в социальных сетях:</p>';
			
				}
			}
			$web_title = $HeaderMsg .' - '. $web_name;
	
			echo '<title>'.$web_title.'</title>';
			echo '<meta name="title" content="'.$mTitle.'" />';
			echo '<meta name="keywords" content="'.$mKeys.'" />';
			echo '<meta name="description" content="'.$mDesc.'" />';
		?>
		<link rel="stylesheet" href="css/main.css?v=2" />
	</head>
	<body>
		<!-- logo -->
		<header class="clean_header">
			<a class="logo" href="http://karlen-ll.github.io/feedback?utm_source=github&utm_medium=feedback&utm_campaign=get_utm"><img src="images/logo.png" width="329" height="300" alt=""/></a>
			<p>Пиревердиев Карлен</p>
		</header>

		<!-- Main -->
		<div class="box no_line container">
			<div class="with-2line container">
				<?php
					if ($HintMsg != '') {echo '<p class="hint">'. $HintMsg . '</p>';}
					echo '<header><h2>' . $HeaderMsg . '</h2></header>';
					echo '<section>' . $TextMsg . '</section>';
				?>
			</div>
		
			<footer class="box footer-mini container">
				<ul class="icons blue">
						<?php include("links.php");?>
					</ul>
				<ul class="copyright">
					<?php
						echo '<li>&copy; '.$copyright.'</li>';
						echo '<li><a href="'.$policy_url.'">'.$policy.'</a></li>';
						echo '<li><a href="'.$email_href.'">'.$email.'</a></li>';
					?>
				</ul>
			</footer>
		</div>
	</body>
</html>