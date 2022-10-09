<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_baglan = "127.0.0.1";
$database_baglan = "karefashion";
$username_baglan = "root";
$password_baglan = "";
$baglan = mysql_pconnect($hostname_baglan, $username_baglan, $password_baglan) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db('karefashion', mysql_connect('localhost', 'root', ''));
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
?>