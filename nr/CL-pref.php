<?php
include('includes/mysqli_connect.php');
if ( isset( $_COOKIE['User_ISN'] ) )
{
	$loggedin = TRUE;
	$q = 'SELECT * FROM clubbers, users WHERE User_ISN = Clubber_ISN AND Clubber_ISN = '.$_COOKIE['User_ISN'];
	$r = @mysqli_query($dbc, $q);
	$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
	$Init_User_Login = $row['User_Login'];
	$Init_Clubber_Name = $row['Clubber_Name'];
	$Init_Clubber_DOB = $row['Clubber_DOB'];
	$Init_Clubber_ZIP = $row['Clubber_ZIP'];
	$Init_User_Email = $row['User_Email'];
	if ( $row['Clubber_Is_Epileptic']==1 )
	{
		$Init_Clubber_Is_Epileptic = 'TRUE';
	}
	else
	{
		$Init_Clubber_Is_Epileptic = 'FALSE';
	}
	if ( is_null( $row['Clubber_Smoking_Preference'] ) )
	{
		$Init_Clubber_Smoking_Preference = '<option selected>Show All Events</option><option>Must Allow Smoking</option><option>Must Not Allow Smoking</option>';
	}
	else if ( $row['Clubber_Smoking_Preference'] == 1 )
	{
		$Init_Clubber_Smoking_Preference = '<option>Show All Events</option><option selected>Must Allow Smoking</option><option>Must Not Allow Smoking</option>';
	}
	else
	{
		$Init_Clubber_Smoking_Preference = '<option>Show All Events</option><option>Must Allow Smoking</option><option selected>Must Not Allow Smoking</option>';
	}
	if ( is_null( $row['Clubber_Gay_Preference'] ) )
	{
		$Init_Clubber_Gay_Preference = '<option selected>Show All Events</option><option>Show Only Gay Events</option><option>Do Not Show Gay Events</option>';
	}
	else if ( $row['Clubber_Gay_Preference'] == 1 )
	{
		$Init_Clubber_Gay_Preference = '<option>Show All Events</option><option selected>Show Only Gay Events</option><option>Do Not Show Gay Events</option>';
	}
	else
	{
		$Init_Clubber_Gay_Preference = '<option>Show All Events</option><option>Show Only Gay Events</option><option selected>Do Not Show Gay Events</option>';
	}
	$Init_Clubber_Genre_Top40 = $row['Clubber_Genre_Top40'];
	$Init_Clubber_Genre_Pop = $row['Clubber_Genre_Pop'];
	$Init_Clubber_Genre_Dance = $row['Clubber_Genre_Dance'];
	$Init_Clubber_Genre_House = $row['Clubber_Genre_House'];
	$Init_Clubber_Genre_Electro = $row['Clubber_Genre_Electro'];
	$Init_Clubber_Genre_HipHopRap = $row['Clubber_Genre_HipHopRap'];
	$Init_Clubber_Genre_Reggae = $row['Clubber_Genre_Reggae'];
	$Init_Clubber_Genre_Reggaeton = $row['Clubber_Genre_Reggaeton'];
	$Init_Clubber_Genre_RandB = $row['Clubber_Genre_RandB'];
	$Init_Clubber_Genre_OldSchool = $row['Clubber_Genre_OldSchool'];
	$Init_Clubber_Genre_Country = $row['Clubber_Genre_Country'];
	$Init_Clubber_Genre_Motown = $row['Clubber_Genre_Motown'];
	$Init_Clubber_Genre_70s = $row['Clubber_Genre_70s'];
	$Init_Clubber_Genre_80s = $row['Clubber_Genre_80s'];
	$Init_Clubber_Genre_90s = $row['Clubber_Genre_90s'];
	$Init_Clubber_Genre_Rock = $row['Clubber_Genre_Rock'];
	$Init_Clubber_Genre_AlternativeRock = $row['Clubber_Genre_AlternativeRock'];
	$Init_Clubber_Genre_Metal = $row['Clubber_Genre_Metal'];
	$Init_Clubber_Genre_ClassicRock = $row['Clubber_Genre_ClassicRock'];
	$Init_Clubber_Genre_Accoustic = $row['Clubber_Genre_Accoustic'];
	$Init_Clubber_Atmosphere_Lighting = $row['Clubber_Atmosphere_Lighting'];
	$Init_Clubber_Atmosphere_Volume = $row['Clubber_Atmosphere_Volume'];
	$Init_Clubber_Atmosphere_Space = $row['Clubber_Atmosphere_Space'];
	$Init_Clubber_FX_Flairing = $row['Clubber_FX_Flairing'];
	$Init_Clubber_FX_Lasers = $row['Clubber_FX_Lasers'];
	$Init_Clubber_FX_Videoscreens = $row['Clubber_FX_Videoscreens'];
	$Init_Clubber_FX_Smoke = $row['Clubber_FX_Smoke'];
	$Init_Clubber_FX_Cryogenics = $row['Clubber_FX_Cryogenics'];
}
else
{
	$loggedin = FALSE;
	$Init_User_Login = '';
	$Init_Clubber_Name = '';
	$Init_Clubber_DOB = date('Y-m-d');
	$Init_Clubber_ZIP = '';
	$Init_User_Email = '';
	$Init_Clubber_Smoking_Preference = '<option>Show All Events</option><option>Must Allow Smoking</option><option>Must Not Allow Smoking</option>';
	$Init_Clubber_Gay_Preference = '<option>Show All Events</option><option>Show Only Gay Events</option><option>Do Not Show Gay Events</option>';
	$Init_Clubber_Genre_Top40 = 50;
	$Init_Clubber_Genre_Pop = 50;
	$Init_Clubber_Genre_Dance = 50;
	$Init_Clubber_Genre_House = 50;
	$Init_Clubber_Genre_Electro = 50;
	$Init_Clubber_Genre_HipHopRap = 50;
	$Init_Clubber_Genre_Reggae = 50;
	$Init_Clubber_Genre_Reggaeton = 50;
	$Init_Clubber_Genre_RandB = 50;
	$Init_Clubber_Genre_OldSchool = 50;
	$Init_Clubber_Genre_Country = 50;
	$Init_Clubber_Genre_Motown = 50;
	$Init_Clubber_Genre_70s = 50;
	$Init_Clubber_Genre_80s = 50;
	$Init_Clubber_Genre_90s = 50;
	$Init_Clubber_Genre_Rock = 50;
	$Init_Clubber_Genre_AlternativeRock = 50;
	$Init_Clubber_Genre_Metal = 50;
	$Init_Clubber_Genre_ClassicRock = 50;
	$Init_Clubber_Genre_Accoustic = 50;
	$Init_Clubber_Atmosphere_Lighting = 50;
	$Init_Clubber_Atmosphere_Volume = 50;
	$Init_Clubber_Atmosphere_Space = 50;
	$Init_Clubber_FX_Flairing = 50;
	$Init_Clubber_FX_Lasers = 50;
	$Init_Clubber_FX_Videoscreens = 50;
	$Init_Clubber_FX_Smoke = 50;
	$Init_Clubber_FX_Cryogenics = 50;
}
if(isset($_POST['Submitted']))
{
	$errormsg='';
	if ( !$loggedin )
	{
		$q = 'SELECT NULL FROM users WHERE User_Login="'.$_POST['User_Login'].'"';
		$r = @mysqli_query($dbc, $q);
		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			$errormsg = $errormsg.'The login  <b><i>'.$_POST['User_Login'].'</i></b>  is not available.<br>';
		}
	}
	if ( $_POST['User_Password'] != $_POST['User_Password_Confirm'] )
	{
		$errormsg = $errormsg.'Passwords do not match.<br>';
	}
	$q = 'SELECT NULL FROM zips WHERE Zip_Code='.$_POST['Clubber_ZIP'];
	$r = @mysqli_query($dbc, $q);
	$zipfound = false;
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{
		$zipfound = true;
	}
	if ( !$zipfound )
	{
		$errormsg = $errormsg.'<b><i>'.$_POST['Clubber_ZIP'].'</i></b>  is not a valid ZIP Code.<br>';
	}
	if ( $loggedin )
	{
		$q = 'SELECT NULL FROM users WHERE User_Email="'.$_POST['User_Email'].'" AND NOT(User_ISN='.$_COOKIE['User_ISN'].')';
	}
	else
	{
		$q = 'SELECT NULL FROM users WHERE User_Email="'.$_POST['User_Email'].'"';
	}
	$r = @mysqli_query($dbc, $q);
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{
		$errormsg = $errormsg.'The email address  <b><i>'.$_POST['User_Email'].'</i></b>  is registered on another account.<br>';
	}	
	if ( $errormsg == '' )
	{
		$User_Login = $_POST['User_Login'];
		$Clubber_Name = $_POST['Clubber_Name'];
		$User_Password = $_POST['User_Password'];
		$Clubber_DOB = $_POST['Clubber_DOB'];
		$Clubber_ZIP = $_POST['Clubber_ZIP'];
		$User_Email = $_POST['User_Email'];
		if ( $_POST['Clubber_Is_Epileptic']=='TRUE' )
		{
			$Clubber_Is_Epileptic = 1;
		}
		else
		{
			$Clubber_Is_Epileptic = 0;
		}
		$Clubber_Smoking_Preference = $_POST['Clubber_Smoking_Preference'];
		if ( $Clubber_Smoking_Preference == 'Must Allow Smoking' )
		{
			$Clubber_Smoking_Preference = 1;
		}
		else if ( $Clubber_Smoking_Preference == 'Must Not Allow Smoking' )
		{
			$Clubber_Smoking_Preference = 0;
		}
		else
		{
			$Clubber_Smoking_Preference = "null";
		}
		$Clubber_Gay_Preference = $_POST['Clubber_Gay_Preference'];
		if ( $Clubber_Gay_Preference == 'Show Only Gay Events' )
		{
			$Clubber_Gay_Preference = 1;
		}
		else if ( $Clubber_Gay_Preference == 'Do Not Show Gay Events' )
		{
			$Clubber_Gay_Preference = 0;
		}
		else
		{
			$Clubber_Gay_Preference = "null";
		}
		$Clubber_Genre_Top40 = $_POST['Clubber_Genre_Top40'];
		$Clubber_Genre_Pop = $_POST['Clubber_Genre_Pop'];
		$Clubber_Genre_Dance = $_POST['Clubber_Genre_Dance'];
		$Clubber_Genre_House = $_POST['Clubber_Genre_House'];
		$Clubber_Genre_Electro = $_POST['Clubber_Genre_Electro'];
		$Clubber_Genre_HipHopRap = $_POST['Clubber_Genre_HipHopRap'];
		$Clubber_Genre_Reggae = $_POST['Clubber_Genre_Reggae'];
		$Clubber_Genre_Reggaeton = $_POST['Clubber_Genre_Reggaeton'];
		$Clubber_Genre_RandB = $_POST['Clubber_Genre_RandB'];
		$Clubber_Genre_OldSchool = $_POST['Clubber_Genre_OldSchool'];
		$Clubber_Genre_Country = $_POST['Clubber_Genre_Country'];
		$Clubber_Genre_Motown = $_POST['Clubber_Genre_Motown'];
		$Clubber_Genre_70s = $_POST['Clubber_Genre_70s'];
		$Clubber_Genre_80s = $_POST['Clubber_Genre_80s'];
		$Clubber_Genre_90s = $_POST['Clubber_Genre_90s'];
		$Clubber_Genre_Rock = $_POST['Clubber_Genre_Rock'];
		$Clubber_Genre_AlternativeRock = $_POST['Clubber_Genre_AlternativeRock'];
		$Clubber_Genre_Metal = $_POST['Clubber_Genre_Metal'];
		$Clubber_Genre_ClassicRock = $_POST['Clubber_Genre_ClassicRock'];
		$Clubber_Genre_Accoustic = $_POST['Clubber_Genre_Accoustic'];
		$Clubber_Atmosphere_Lighting = $_POST['Clubber_Atmosphere_Lighting'];
		$Clubber_Atmosphere_Volume = $_POST['Clubber_Atmosphere_Volume'];
		$Clubber_Atmosphere_Space = $_POST['Clubber_Atmosphere_Space'];
		$Clubber_FX_Flairing = $_POST['Clubber_FX_Flairing'];
		$Clubber_FX_Lasers = $_POST['Clubber_FX_Lasers'];
		$Clubber_FX_Videoscreens = $_POST['Clubber_FX_Videoscreens'];
		$Clubber_FX_Smoke = $_POST['Clubber_FX_Smoke'];
		$Clubber_FX_Cryogenics = $_POST['Clubber_FX_Cryogenics'];
		
	
		if ( $loggedin )
		{
			if ( $User_Password == '' )
			{
				$q = 'UPDATE users SET
					User_Email="'.$User_Email.'" 
					WHERE User_ISN='.$_COOKIE['User_ISN'];
			}
			else
			{
				$q = 'UPDATE users SET
					User_Email="'.$User_Email.'",
					User_Password="'.$User_Password.'" 
					WHERE User_ISN='.$_COOKIE['User_ISN'];
			}	
			$r = @mysqli_query($dbc, $q);
			$q = 'UPDATE clubbers SET
				Clubber_Name="'.$Clubber_Name.'",
				Clubber_DOB="'.$Clubber_DOB.'",
				Clubber_ZIP='.$Clubber_ZIP.',
				Clubber_Is_Epileptic='.$Clubber_Is_Epileptic.',
				Clubber_Smoking_Preference='.$Clubber_Smoking_Preference.',
				Clubber_Gay_Preference='.$Clubber_Gay_Preference.',
				Clubber_Genre_Top40='.$Clubber_Genre_Top40.',
				Clubber_Genre_Pop='.$Clubber_Genre_Pop.',
				Clubber_Genre_Dance='.$Clubber_Genre_Dance.',
				Clubber_Genre_House='.$Clubber_Genre_House.',
				Clubber_Genre_Electro='.$Clubber_Genre_Electro.',
				Clubber_Genre_HipHopRap='.$Clubber_Genre_HipHopRap.',
				Clubber_Genre_Reggae='.$Clubber_Genre_Reggae.',
				Clubber_Genre_Reggaeton='.$Clubber_Genre_Reggaeton.',
				Clubber_Genre_RandB='.$Clubber_Genre_RandB.',
				Clubber_Genre_OldSchool='.$Clubber_Genre_OldSchool.',
				Clubber_Genre_Country='.$Clubber_Genre_Country.',
				Clubber_Genre_Motown='.$Clubber_Genre_Motown.',
				Clubber_Genre_70s='.$Clubber_Genre_70s.',
				Clubber_Genre_80s='.$Clubber_Genre_80s.',
				Clubber_Genre_90s='.$Clubber_Genre_90s.',
				Clubber_Genre_Rock='.$Clubber_Genre_Rock.',
				Clubber_Genre_AlternativeRock='.$Clubber_Genre_AlternativeRock.',
				Clubber_Genre_Metal='.$Clubber_Genre_Metal.',
				Clubber_Genre_ClassicRock='.$Clubber_Genre_ClassicRock.',
				Clubber_Genre_Accoustic='.$Clubber_Genre_Accoustic.',
				Clubber_Atmosphere_Lighting='.$Clubber_Atmosphere_Lighting.',
				Clubber_Atmosphere_Volume='.$Clubber_Atmosphere_Volume.',
				Clubber_Atmosphere_Space='.$Clubber_Atmosphere_Space.',
				Clubber_FX_Flairing='.$Clubber_FX_Flairing.',
				Clubber_FX_Lasers='.$Clubber_FX_Lasers.',
				Clubber_FX_Videoscreens='.$Clubber_FX_Videoscreens.',
				Clubber_FX_Smoke='.$Clubber_FX_Smoke.',
				Clubber_FX_Cryogenics='.$Clubber_FX_Cryogenics.'
				WHERE Clubber_ISN='.$_COOKIE['User_ISN'];
			$r = @mysqli_query($dbc, $q);
		}
		else
		{
			$q = 'INSERT INTO users ( UserLogin, User_Email, UserPassword, User_Type ) VALUES ( "'.$User_Login.'", "'.$User_Email.'", "'.$User_Password.'", "C"';
			$r = @mysqli_query($dbc, $q);
			$q = 'SELECT * FROM users WHERE User_Login="'.$UserLogin.'"';
			$r = @mysqli_query($dbc, $q);
			while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
			{
				$q = 'INSERT INTO
					clubbers (
					Clubber_ISN,
					Clubber_Name,
					Clubber_DOB,
					Clubber_ZIP,
					Clubber_Is_Epileptic,
					Clubber_Smoking_Preference,
					Clubber_Gay_Preference,
					Clubber_Genre_Top40,
					Clubber_Genre_Pop,
					Clubber_Genre_Dance,
					Clubber_Genre_House,
					Clubber_Genre_Electro,
					Clubber_Genre_HipHopRap,
					Clubber_Genre_Reggae,
					Clubber_Genre_Reggaeton,
					Clubber_Genre_RandB,
					Clubber_Genre_OldSchool,
					Clubber_Genre_Country,
					Clubber_Genre_Motown,
					Clubber_Genre_70s,
					Clubber_Genre_80s,
					Clubber_Genre_90s,
					Clubber_Genre_Rock,
					Clubber_Genre_AlternativeRock,
					Clubber_Genre_Metal,
					Clubber_Genre_ClassicRock,
					Clubber_Genre_Accoustic,
					Clubber_Atmosphere_Lighting,
					Clubber_Atmosphere_Volume,
					Clubber_Atmosphere_Space,
					Clubber_FX_Flairing,
					Clubber_FX_Lasers,
					Clubber_FX_Videoscreens,
					Clubber_FX_Smoke,
					Clubber_FX_Cryogenics)
					VALUES ( '.
					$row['User_ISN'].','.
					'"'.$Clubber_Name.'",'.
					'"'.$Clubber_DOB.'",'.
					$Clubber_ZIP.','.
					$Clubber_Is_Epileptic.','.
					$Clubber_Smoking_Preference.','.
					$Clubber_Gay_Preference.','.
					$Clubber_Genre_Top40.','.
					$Clubber_Genre_Pop.','.
					$Clubber_Genre_Dance.','.
					$Clubber_Genre_House.','.
					$Clubber_Genre_Electro.','.
					$Clubber_Genre_HipHopRap.','.
					$Clubber_Genre_Reggae.','.
					$Clubber_Genre_Reggaeton.','.
					$Clubber_Genre_RandB.','.
					$Clubber_Genre_OldSchool.','.
					$Clubber_Genre_Country.','.
					$Clubber_Genre_Motown.','.
					$Clubber_Genre_70s.','.
					$Clubber_Genre_80s.','.
					$Clubber_Genre_90s.','.
					$Clubber_Genre_Rock.','.
					$Clubber_Genre_AlternativeRock.','.
					$Clubber_Genre_Metal.','.
					$Clubber_Genre_ClassicRock.','.
					$Clubber_Genre_Accoustic.','.
					$Clubber_Atmosphere_Lighting.','.
					$Clubber_Atmosphere_Volume.','.
					$Clubber_Atmosphere_Space.','.
					$Clubber_FX_Flairing.','.
					$Clubber_FX_Lasers.','.
					$Clubber_FX_Videoscreens.','.
					$Clubber_FX_Smoke.','.
					$Clubber_FX_Cryogenics.')';
			}
			$r = @mysqli_query($dbc, $q);
	}
		header('Location:CL-front-results.php');
	}
	else
	{
		header('Location:CL-prefs-error.php?errormsg='.$errormsg);
	}
	@mysqli_close($dbc);
}
else
{
	include ('CL-pref-main.php');
}
?>