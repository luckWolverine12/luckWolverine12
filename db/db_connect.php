<?php

define('db_host','127.0.0.1:3306');
define('db_name','u927112872_sTJuD');
define('db_user','u927112872_agb77');
define('db_password','');
 $connect= mysql_connect(db_host,db_name,db_user,db_password);
 
 if(mysql_connect_errno()){
     echo'falha ao connectar ao banco de dados:'. mysql_connect_error();
 }
?>