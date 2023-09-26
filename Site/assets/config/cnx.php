<?php
 $host = "localhost";
 $user_mysql = "root"; // nom d'utilisateur de l'utilisateur de MySQL 
 $password_mysql = ""; // mot de passe de l'utilisateur de MySQL
 $database = "matable";
 $db = mysqli_connect($host, $user_mysql, $password_mysql, $database);
 mysqli_set_charset($db, "utf8");
if(mysqli_errno($db))
{
echo "Can't Connect to mySQL:".mysqli_connect_error();
}
?>