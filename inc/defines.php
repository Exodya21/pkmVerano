<?php 
/* ************************
 *   BASE DE DATOS
 * ************************ */
define('DB_HOST', 'localhost');
define('DB_USER', 'contabilidad');
define('DB_PASS', 'Wzq6GiVJ9rPTcJrb6o6TMVV');
define('DB_NAME', 'contabilidad');

global $mysqli;
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$mysqli->set_charset("utf8");
require('inc/functions.php');