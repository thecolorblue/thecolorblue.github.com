<?php
if(trim($_POST['data'])==NULL)
{
	$print = "fail";
}
else
{
	if(isset($_COOKIE['User_ISN']))
	{
		$User_Check = ' AND NOT(User_ISN='.$_COOKIE['User_ISN'].')';
	}
	else
	{
		$User_Check = '';
	}
 	require_once('includes/mysqli_connect.php');
	$q = 'SELECT TRUE FROM users WHERE UCASE(User_Email)=UCASE("'.$_POST['data'].'")'.$User_Check;
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