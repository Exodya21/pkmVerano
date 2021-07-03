<?php 
/* ************************
 *   BASE DE DATOS
 * ************************ */
define('DB_HOST', 'btlwej7n9qzgpznlelft-mysql.services.clever-cloud.com');
define('DB_USER', 'uqlcvryv6stphcyj');
define('DB_PASS', 'e1BH4bcErpNyG1Y1yotb');
define('DB_NAME', 'btlwej7n9qzgpznlelft');


global $mysqli;
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$mysqli->set_charset("utf8");

?>