<?php
if(trim($_POST['data'])==NULL)
{
	$print = "fail";
}
else
{
	require_once('includes/mysqli_connect.php');
	$q = 'SELECT TRUE FROM users WHERE UCASE(User_Login)=UCASE("'.$_POST['data'].'")';
	$r = @mysqli_query($dbc, $q);
	$print = "success";
	if ($r)
	{
		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			$print = "fail";
		}
	}
}
print $print;
?>