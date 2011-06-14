<?php
if(trim($_POST['data'])==NULL)
{
	$print = "";
}
else
{
	
	require_once('includes/mysqli_connect.php');
	$q = 'SELECT ZIP_City, ZIP_State FROM zips WHERE ZIP_Code='.$_POST['data'];
	$r = @mysqli_query($dbc, $q);
	$print = "fail";
	if ($r)
	{
		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			$print = $row['ZIP_City'].', '.$row['ZIP_State'];
		}
	}
}
print $print;
?>