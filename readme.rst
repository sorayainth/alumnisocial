###################
# Contributing to CodeIgniter
###################

## Install

1. Edit Username and Password
File Application > config > database.php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'YOU USER',
	'password' => 'YOU PASSWORD',
	'database' => 'alumnisocial'
	....

2. Edit file config.php > auth_ad.php

// proxy_user: the (distinguished) username of the user that does the querying (AD generally does not allow anonymous binds) 
$config['proxy_user'] = 'YOU USERNAME NU-NET@nu.local';

// proxy pass: the password for the proxy_user
$config['proxy_pass'] = 'YOU PASSWORD NU-NET';

3. File Application > config.php > config.php
$config['base_url'] = 'http://localhost:8888/alumnisocial/';

4. Edit Permission 777
folder files, ci_session

---------------------------------------------------
๊Upgrad version 1.1.0
เพิ่ม field ใน Database Table: data_student ชื่อ field "Activity" type "text"