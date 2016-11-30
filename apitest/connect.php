<?php

DEFINE ('USER', 'master');
DEFINE ('PASS', 'master');
DEFINE ('HOST', 'localhost');
DEFINE ('DB', 'apitest');

$dbc = mysqli_connect(HOST,USER,PASS,DB)
OR die("couldn't connect".mysqli_connect_error());

?>