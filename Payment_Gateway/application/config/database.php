
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $activgite_group = 'default';
$active_group = 'default';
$query_builder = TRUE;
$active_record = TRUE;//ci version 2.x

$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
      'username' => 'wwwstockeai_localtest',
    'password' => 'amorio@2022',
    'database' => 'wwwstockeai_localtest',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'autoinit' => TRUE,//ci version 2.x
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
 

?>