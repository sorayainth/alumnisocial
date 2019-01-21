###################
# Contributing to CodeIgniter
###################

## Install

Edit Username and Password
File Application > config.php > database.php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'YOU USER',
	'password' => 'YOU PASSWORD',
	'database' => 'alumnisocial'
	....

Edit file config.php > auth_ad.php

// proxy_user: the (distinguished) username of the user that does the querying (AD generally does not allow anonymous binds) 
$config['proxy_user'] = 'YOU USERNAME NU-NET@nu.local';

// proxy pass: the password for the proxy_user
$config['proxy_pass'] = 'YOU PASSWORD NU-NET';