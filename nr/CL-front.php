<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Night Life Island: Dark, Fixed</title>
<?php include('includes/css-cl-dj.php'); ?>
<?php include('includes/js-always.php'); ?>
<?php include('includes/js-cl.php'); ?>
<?php include('includes/js-form.php'); ?>
<?php require_once('includes/mysqli_connect.php'); ?>
<?php include('includes/css-always.php'); ?>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
 
<?php
if ( isset ( $_COOKIE['User_ISN'] ) )
{
	$User_ISN = $_COOKIE['User_ISN'];
}
else
{
	$User_ISN = 0;
}
?>
</head>
<body>
<div class="container_12" >
        <?php include('includes/header.php'); ?>
    </div>
			
	<div class="grid_3">
        <div class="box" style="background:transparent">
            <form id="filterevents" action="filterevents.php" method="post">
                <div name="datepicked" id="datepicker"></div>
                <div id="citypicker">
                    <p>        
                        <select id="states">
							<option value="...">...</option>
							<?php
								$defaultState='...';
								$q = 'SELECT State, IF(EXISTS(SELECT NULL FROM clubbers, zips WHERE Clubber_ISN='.$User_ISN.' AND Clubber_ZIP=ZIP_Code AND ZIP_State=State)," Selected","" ) AS Selected FROM states ORDER BY State';
								$r = @mysqli_query($dbc, $q);
								while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
								{
									echo '<option value="'.$row['State'].'"'.$row['Selected'].'>'.$row['State'].'</option>';
									if ( $row['Selected'] == ' Selected' )
									{
										$defaultState = $row['State'];
									}
								}
							?>
                        </select>
                        <select id="cities">
							<option value="...">...</option>
							<?php
								$q = 'SELECT City_Name, IF(EXISTS(SELECT NULL FROM clubbers, zips WHERE Clubber_ISN='.$User_ISN.' AND Clubber_ZIP=ZIP_Code AND ZIP_City=City_Name)," Selected","" ) AS Selected FROM cities WHERE City_State="'.$defaultState.'" ORDER BY City_Name';
								$r = @mysqli_query($dbc, $q);
								while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
								{
									echo '<option value="'.$row['City_Name'].'"'.$row['Selected'].'>'.$row['City_Name'].'</option>';
								}

							?>
                        </select>
                        <div id="result"></div>
                    </p>
                </div>
            </form>
            
        </div>
		<?php if ( $User_ISN==0 )
		{
			echo '
        <div class="box">
                <h2>
                    Login Forms
                </h2>
                <div class="block" id="login-forms">
				<form method="POST" action="login.php">
					<fieldset class="login">
							<label>Username: </label>
							<!-- form: {{ User_Login }}-->
                            <input type="text" name="username" />
						<p>
							<label>Password: </label>
							<!-- form: {{ User_Password }}-->
							<input type="password" name="password" />
						</p>
						<input class="login button" type="submit" value="Login" /><input type="submit" value="Create Account" />
					</fieldset>
				</form>
			</div>
		</div>';
		}
		else
		{
			include('includes/leftbar.php');
		} ?>
    </div>
    
    <div class="grid_9">
			<iframe src="CL-front-results.php" 
                width="798px" height="750px" 
                allowtransparency="true" 
                style="background-color:transparent" 
				scrolling="no"
                id="iframe" name="iframe">
            </iframe>
	</div>
<div class="grid_12" id="footer">
        <?php include('includes/footer.php'); ?>
</div>
<div class="clear"></div>

</body>
</html>