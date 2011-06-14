<?php
require_once('includes/mysqli_connect.php');
$q = 'SELECT * FROM users WHERE User_Login='.$_POST['