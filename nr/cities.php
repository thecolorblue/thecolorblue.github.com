<?php

echo '<option value="">...</option>';

require_once('includes/mysqli_connect.php');

$q = 'SELECT City_Name FROM cities WHERE City_State="'.$_POST['data'].'" ORDER BY City_Name';

$r = @mysqli_query($dbc, $q);
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
{
	echo '<option value="'.$row['City_Name'].'">'.$row['City_Name'].'</option>';
}
?>