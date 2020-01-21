<!DOCTYPE HTML>
<html>
	<head>
		<?php
			require ("head.php");
			echo '<title>'.$web_name.'</title>';
			echo '<meta name="title" content="'.$mTitle.'" />';
			echo '<meta name="keywords" content="'.$mKeys.'" />';
			echo '<meta name="description" content="'.$mDesc.'" />';
		?>
		<script src="https://www.google.com/recaptcha/api.js?render=6LcsMtEUAAAAAL8mexn4RTodAtZkO8rGeXZ3ZU9K"></script>
		<script>
			grecaptcha.ready(function() {
				grecaptcha.execute('6LcsMtEUAAAAAL8mexn4RTodAtZkO8rGeXZ3ZU9K', {action: 'homepage'}).then(function(token) {
					document.getElementById('g-recaptcha-response').value=token;
				});
			});
			// Изменяем Display элемента
			function ShowHide(elm) {
                if (document.getElementsByClassName(elm)) { 
                    var obj = document.getElementsByClassName(elm);
                    if (obj[0].style.display != "block") { 
                        obj[0].style.display = "block"; 
                    }
                    else obj[0].style.display = "none"; 
                }
                else alert("Элемент: " + elm + " не найден!"); 
            }
		</script>
		
		<link rel="stylesheet" href="css/main.css?v=2" />
	</head>

	<body>
		<header class="clean_header">
			<a class="logo" href="http://karlen-ll.github.io/feedback?utm_source=github&utm_medium=feedback&utm_campaign=get_utm"><img src="images/logo.png" width="329" height="300" alt=""/></a>
			<p>Пиревердиев Карлен</p>
		</header>
		<!-- Notification -->
		<div class="notification" style="display: block">
			<div class="row">
				<div class="col-9 col-12-mobilep">
					<p>Форма отправит заявку на указанную Вами почту с данными UTM-меток и идентификаторов Метрики и Аналитики.</p>
				</div>
				<div class="col-2 col-12-mobilep">
					<a href="javascript:void(0);" onClick="ShowHide('notification')" class="notification-close"><?php include ("images/svg/cross.svg"); ?></a>
				</div>
			</div>
		</div>
		<!-- /Notification -->
		<div class="box no_line container">
			<div class="with-2line">
				<div class="row">
					<div class="col-6 col-12-mobilep">
						<ul class="icons detailed blue">
							<?php
								if(!empty($phone)){ // Phone
									echo '<li><a href="'. $phone_href .'">';
									echo '<span class="icon-phone">';
									include ("images/svg/phone.svg");
									echo '</span>'. $phone .'</a></li>';
								}
								if(!empty($whatsapp_url)){ // WhatsApp
									echo '<li><a href="'. $whatsapp_url .'"  target="_blank">';
									echo '<span class="icon-whatsapp">';
									include ("images/svg/whatsapp.svg");
									echo '</span>WhatsApp</a></li>';
								}
								if(!empty($telegram_url)){ // Telegram
									echo '<li><a href="'. $telegram_url .'" target="_blank">';
									echo '<span class="icon-telegram">';
									include ("images/svg/telegram-plane.svg");
									echo '</span>Telegram</a></li>';
								}
							?>
						</ul>
					</div>
					<div class="col-6 col-12-mobilep">
						<!--
							Для отслеживания целей в Яндекс.Метрике и Google.Аналитике
							необходимо в тег <form> добавить следующий код:
 
							onsubmit="yaCounter00000000.reachGoal ('feedback');
							gtag('event', 'feedback--footer', {'event_category': 'feedback', 'event_action': 'footer' }); return true;"
						-->
					  <form method="post" action="mail.php" name="feedback">
							<div class="row">
								<?php // Скрытые поля
									echo isset($_GET['utm_source']) ? '<input type="hidden" name="source" value="'.$_GET['utm_source'].'" />' : '';
									echo isset($_GET['utm_medium']) ? '<input type="hidden" name="medium" value="'.$_GET['utm_medium'].'" />' : '';
									echo isset($_GET['utm_campaign']) ? '<input type="hidden" name="campaign" value="'.$_GET['utm_campaign'].'" />' : '';
									echo isset($_GET['utm_content']) ? '<input type="hidden" name="content" value="'.$_GET['utm_content'].'" />' : '';
									echo isset($_GET['utm_term']) ? '<input type="hidden" name="term" value="'.$_GET['utm_term'].'" />' : '';
									echo '<input type="hidden" name="inform" value="Заявка с формы">';
								?>
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" placeholder="Ваше имя" required />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="text" name="email" placeholder="Ваш e-mail" required />
								</div>
								<div class="col-12 r-12">
									<textarea name="message" placeholder="Сообщение" rows="6"></textarea>
									<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
								</div>
								<div class="col-12 r-12">
									<ul class="actions special">
										<li><input type="submit" value="Получить заявку" /></li>
										<li><a href="<?php echo $policy_url ?>" target="_blank">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с политикой конфиденциальности.</a></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<footer class="box footer-mini container">
				<ul class="icons blue">
					<?php
						if(!empty($instagram_url)){ // Instagram
							echo '<li><a href="'.$instagram_url.'">';
							echo '<span class="icon-instagram">';
							include ("images/svg/instagram.svg");
							echo '</span><span class="label">Instagram</span></a></li>';
						}
						if(!empty($facebook_url)){ // Facebook
							echo '<li><a href="'.$facebook_url.'">';
							echo '<span class="icon-facebook">';
							include ("images/svg/facebook-f.svg");
							echo '</span><span class="label">Facebook</span></a></li>';
						}
						if(!empty($youtube_url)){ // YouTube
							echo '<li><a href="'.$youtube_url.'">';
							echo '<span class="icon-youtube">';
							include ("images/svg/youtube.svg");
							echo '</span><span class="label">YouTube</span></a></li>';
						}
						if(!empty($pinterest_url)){ // Pinterest
							echo '<li><a href="'.$pinterest_url.'">';
							echo '<span class="icon-pinterest">';
							include ("images/svg/pinterest.svg");
							echo '</span><span class="label">Pinterest</span></a></li>';
						}
						if(!empty($vk_url)){ // VK
							echo '<li><a href="'.$vk_url.'">';
							echo '<span class="icon-vk">';
							include ("images/svg/vk.svg");
							echo '</span><span class="label">ВКонтакте</span></a></li>';
						}
						echo "<li></li>";
						if(!empty($map_url)){ // Map
							echo '<li><a href="'.$map_url.'" target="_blank">';
							echo '<span class="icon-map">';
							include ("images/svg/globe-europe.svg");
							echo '</span><span class="label">Google Maps</span></a></li>';
						}
						if(!empty($email_href)){ // Email
							echo '<li><a href="'.$email_href.'" target="_blank">';
							echo '<span class="icon-email">';
							include ("images/svg/envelope.svg");
							echo '</span><span class="label">'.$email.'</span></a></li>';
						}
					?>
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
