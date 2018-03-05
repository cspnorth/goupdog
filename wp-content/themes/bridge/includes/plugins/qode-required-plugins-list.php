<?php

function qode_get_required_plugins_links($demo){
	$plugins = array();
	$html = '';

	switch($demo){
		case 'bridge':
			$plugins = qode_plugins_list(array('js_composer','woocommerce','LayerSlider'));
			break;
		case 'bridge2':
			$plugins = qode_plugins_list(array('js_composer','woocommerce','LayerSlider'));
			break;
		case 'bridge3':
			$plugins = qode_plugins_list(array('js_composer','LayerSlider'));
			break;
		case 'bridge4':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge5':
			$plugins = qode_plugins_list(array('js_composer','LayerSlider'));
			break;
		case 'bridge6':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge7':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge8':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge9':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge10':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge11':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge12':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge13':
			$plugins = qode_plugins_list(array('js_composer','woocommerce'));
			break;
		case 'bridge14':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge15':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge16':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge17':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge18':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge19':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge20':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge21':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge22':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge23':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge24':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge25':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge26':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge27':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','LayerSlider'));
			break;
		case 'bridge28':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge29':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge30':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge31':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge32':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge33':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge34':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge35':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge36':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge37':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge38':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','LayerSlider'));
			break;
		case 'bridge39':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge40':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge41':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge42':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge43':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge44':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge45':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge46':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge47':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge48':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge49':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge50':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge51':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge52':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge53':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge54':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge55':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge56':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge57':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge58':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge59':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge60':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge61':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge62':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge63':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge64':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge65':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge66':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge67':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge68':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge69':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge70':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge71':
			$plugins = qode_plugins_list(array('js_composer','woocommerce'));
			break;
		case 'bridge72':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','LayerSlider'));
			break;
		case 'bridge73':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','LayerSlider'));
			break;
		case 'bridge74':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge75':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge76':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge77':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge78':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge79':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','LayerSlider'));
			break;
		case 'bridge80':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge81':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge82':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge83':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge84':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge85':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','LayerSlider'));
			break;
		case 'bridge86':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge87':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge88':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge89':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge90':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge91':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge92':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','LayerSlider'));
			break;
		case 'bridge93':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','LayerSlider'));
			break;
		case 'bridge94':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge95':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','LayerSlider'));
			break;
		case 'bridge96':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','LayerSlider'));
			break;
		case 'bridge97':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge98':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge99':
			$plugins = qode_plugins_list(array('js_composer','woocommerce'));
			break;
		case 'bridge100':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge101':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge102':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge103':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge104':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge105':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge106':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge107':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge108':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge109':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge110':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge111':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge112':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge113':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge114':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge115':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge116':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge117':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge118':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge119':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridge120':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge121':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge122':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridge123':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridge124':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb1':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb2':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb3':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb4':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb5':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb6':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb7':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb8':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb9':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb10':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb11':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb12':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb13':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb14':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb15':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb16':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb17':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb18':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb19':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb20':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb21':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb22':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridgedb23':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb24':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb25':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb26':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb27':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb28':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb29':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb30':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb31':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb32':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb33':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb34':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb35':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb36':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridgedb37':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb38':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb39':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb40':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget','qode-twitter-feed'));
			break;
		case 'bridgedb41':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb42':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridgedb43':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-twitter-feed'));
			break;
		case 'bridgedb44':
			$plugins = qode_plugins_list(array('js_composer','woocommerce'));
			break;
		case 'bridgedb45':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','qode-instagram-widget'));
			break;
		case 'bridgedb46':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb47':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','qode-instagram-widget'));
			break;
		case 'bridgedb48':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','qode-instagram-widget','qode-twitter-feed'));
			break;
		case 'bridgedb49':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb50':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','qode-instagram-widget'));
			break;
		case 'bridgedb51':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb52':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb53':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb54':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','qode-instagram-widget'));
			break;
		case 'bridgedb55':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb56':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb57':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb58':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','qode-instagram-widget'));
			break;
		case 'bridgedb59':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb60':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb61':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb62':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce','qode-instagram-widget'));
			break;
		case 'bridgedb63':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb64':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb65':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb66':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb67':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb68':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb69':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb70':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb71':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb72':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb73':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb74':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb75':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb76':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb77':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','woocommerce'));
			break;
		case 'bridgedb78':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7','qode-instagram-widget','qode-twitter-feed','timetable'));
			break;
		case 'bridgedb79':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'.'revslider','qode-twitter-feed'));
			break;
		case 'bridgedb80':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-twitter-feed','timetable'));
			break;
		case 'bridgedb81':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-twitter-feed','timetable'));
			break;
		case 'bridgedb82':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb83':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb84':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb85':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-twitter-feed','timetable'));
			break;
		case 'bridgedb86':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb87':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb88':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-twitter-feed'));
			break;
		case 'bridgedb89':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb90':
			$plugins = qode_plugins_list(array('js_composer'));
			break;
		case 'bridgedb91':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget','qode-membership','qode-listing','woocommerce','wp-job-manager','wp-job-manager-locations'));
			break;
		case 'bridgedb92':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7','qode-instagram-widget','qode-twitter-feed','qode-news'));
			break;
		case 'bridgedb93':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7','qode-restaurant'));
			break;
		case 'bridgedb94':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb95':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb96':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb97':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb98':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb99':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb100':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb101':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb102':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb103':
			$plugins = qode_plugins_list(array('js_composer','revslider'));
			break;
		case 'bridgedb104':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb105':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb106':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7','qode-instagram-widget','qode-twitter-feed','timetable'));
			break;
		case 'bridgedb107':
			$plugins = qode_plugins_list(array('js_composer','revslider'));
			break;
		case 'bridgedb108':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb109':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7', 'qode-instagram-widget'));
			break;
		case 'bridgedb110':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb111':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb112':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb113':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7', 'qode-instagram-widget', 'qode-twitter-feed'));
			break;
		case 'bridgedb114':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7', 'qode-instagram-widget', 'qode-twitter-feed'));
			break;
		case 'bridgedb115':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb116':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb117':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7', 'woocommerce'));
			break;
		case 'bridgedb118':
			$plugins = qode_plugins_list(array('js_composer','contact-form-7'));
			break;
		case 'bridgedb119':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb120':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7','qode-instagram-widget'));
			break;
		case 'bridgedb121':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb122':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
		case 'bridgedb123':
			$plugins = qode_plugins_list(array('js_composer','revslider','contact-form-7'));
			break;
	}

	$tgmpa = $GLOBALS['tgmpa'];
	$tgmpa->config(array('menu'=>'install-required-plugins'));

	if(!empty($plugins)) {
		$required_demo_plugins = array();

		$html .= "<p>".esc_html__('Following plugins should be installed and activated before demo import:', 'qode')."</p>";
		foreach ($plugins as $key => $value) {

			$tgmpa->register(array('slug'=>$key, 'name'=>$value));

			$is_plugin_active = $tgmpa->is_plugin_active($key);
			$is_plugin_installed = $tgmpa->is_plugin_installed($key);

			if(!$is_plugin_active){
				$status = $is_plugin_installed ? 'activate' : 'install';
				$link_text = $is_plugin_installed ? esc_html__('Activate', 'qode') : esc_html__('Install', 'qode');

				$status = "<a class='qode-demo-plugin-install-link' href='".$tgmpa->get_tgmpa_status_url($status) ."'>".$link_text."</a>";
			}else{
				$status = "<span>".esc_html__('Activated', 'qode')."</span>";
			}

			$html .= "<p>".$value." - ".$status."<span class='spinner'></span></p>";

			array_push($required_demo_plugins, $key);
		}
		$html .= "<span style='visibility:hidden;' data-required-demo-plugins='".json_encode($required_demo_plugins)."' class='qode-required-demo-plugins-list'></span>";
	}

	return $html;
}