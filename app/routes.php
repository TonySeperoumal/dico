<?php
	
	$w_routes = array(
		['GET', '/', 'User#home', 'home'],
		['GET', '/admin/termes/', 'Term#showAll', 'show_all_terms'],
		['GET', '/admin/termes/suppression/[i:id]/', 'Term#delete', 'terms_delete'],
		['GET|POST', '/admin/termes/modification/[i:id]/', 'Term#edit', 'edit_term'],
		['GET', '/admin/termes/nouveau-mdj/[i:id]/', 'Term#changeWotd', 'change_wotd'],
		['GET|POST', '/admin/administrateurs/inscription/', 'User#register', 'register_administrator'],
		['GET|POST', '/admin/connection/', 'User#login', 'login'],
		['GET', '/admin/deconnection/', 'User#logout', 'logout'],


	);