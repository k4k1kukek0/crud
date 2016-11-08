<?php

$host ="localhost";
$username = "root";
$password = "" ;
$database = "crud" ;

$mysqli = mysqli_connect($host,
                        $username,
                        $password,
                        $database) or die ("not connect") ;