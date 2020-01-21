<?php
	if(!empty($whatsapp_url)){ // WhatsApp
		echo '<li><a href="'.$whatsapp_url.'"  target="_blank">';
		echo '<span class="icon-whatsapp">';
		include ("images/svg/whatsapp.svg");
		echo '</span><span class="label">WhatsApp</span></a></li>';
	}
	if(!empty($telegram_url)){ // Telegram
		echo '<li><a href="'.$telegram_url.'" target="_blank">';
		echo '<span class="icon-telegram">';
		include ("images/svg/telegram-plane.svg");
		echo '</span><span class="label">Telegram</span></a></li>';
	}
	if(!empty($email_href)){ // Email
		echo '<li><a href="'.$email_href.'" target="_blank">';
		echo '<span class="icon-email">';
		include ("images/svg/envelope.svg");
		echo '</span><span class="label">'.$email.'</span></a></li>';
	}
	
	echo '<li class="v_des"></li>';
	echo '<br class="v_mob" />';

	if(!empty($instagram_url)){ // Instagram
		echo '<li class="mob_first"><a href="'.$instagram_url.'">';
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
	if(!empty($map_url)){ // Map
		echo '<li><a href="'.$map_url.'" target="_blank">';
		echo '<span class="icon-map">';
		include ("images/svg/globe-europe.svg");
		echo '</span><span class="label">Google Maps</span></a></li>';
	}
?>
