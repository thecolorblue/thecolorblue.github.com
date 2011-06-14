<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'gtti');
DEFINE ('DB_HOST', '192.168.1.100');
DEFINE ('DB_NAME', 'niterise');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die (mysqli_connect_error());

?>