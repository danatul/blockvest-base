<?php
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	/*
	'username' => 'u8771280_blockvest',
	'password' => 'ea@z!K**$6ky', 
	'database' => 'u8771280_blockvest',
	*/
	'username' => 'root',	
	'password' => '', 	
	'database' => 'blockvest_base',
	'dbdriver' => 'mysqli',
	'dbprefix' => 'm_',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => true,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);