<?php

$username = "vilni_user";
$password = "p@$" . "$" . "w0rd";
echo $password;
$servername = "db-mysql-fra1-31502-do-user-10404517-0.c.db.ondigitalocean.com";
$port = 25060;
$database = "vilni";
$sslmode = "REQUIRED";

$con = mysqli_connect($servername, $username, $password, $database, $port);
if (mysqli_connect_errno()) {
    echo "Failed to connect";
    exit();
}
echo "Congratulations";
