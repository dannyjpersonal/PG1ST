<?php
ob_start();
session_start();

//database credentials
define('DBHOST','91.121.163.211');
define('DBUSER','root');
define('DBPASS','aK994x334Z');
define('DBNAME','boomselection_admin');

$db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone
date_default_timezone_set('Europe/London');


?>
