<?php
define("server","localhost");
define("username","root");
define("password","");
define("dbname","a1");

$con = mysql_connect(server,username,password)or die(mysql_error());

mysql_select_db(dbname,$con)or die(mysql_error());
?>