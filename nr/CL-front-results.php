<html>
<head>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/layout-iframe.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/tipsy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/form-structure.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/form-style.css" media="screen" />
<?php include('includes/css-cl-dj.php'); ?>
<?php require_once('includes/mysqli_connect.php'); ?>
</head>
<body>
	<div style="height:700px; overflow-y:scroll; overflow-x:hidden; background:rgba(255,255,255,0)">
		<div class="box">
			<ul>
				<?php
				if ( isset( $_COOKIE['User_ISN'] ) )
				{
					$q = 'SELECT * FROM sql_cl_front WHERE Clubber_ISN = '.$_COOKIE['User_ISN'].' AND Event_Date="'.$_COOKIE['date'].'" AND City_Name="'.$_COOKIE['city'].'" AND City_State="'.$_COOKIE['state'].'"';
					$r = @mysqli_query($dbc, $q);
					while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
					{
						echo '
						<li class="block">
							<div class="'.$row['Event_Type'].'">
								<ul>
									<li class="clubimg" style="height:115px">
										<a href="club.html">
											<img class="clubimg" src="'.$row['Event_Image_Final'].'"/>
										</a>
									</li>
									<li class="djimg">
										<a href="dj.html">
											<img class ="djimg" src="'.$row['DJ_Image_Final'].'"/>
										</a>
									</li>';
						if ( $row['Event_Type']=='event featured' )
						{
							echo '
									<li class="clubimg" style="height:115px">
										<img class="clubimg" src="featured.jpg"/>
									</li>';
						}
						else
						{
							echo '
									<li class="accuracy" style="width:115px; height:153px; background:rgb('.ROUND(255*sqrt((100-$row['Event_Score'])/100)).','.ROUND(255*sqrt($row['Event_Score']/100)).',0)">
									  <p style="font-variant:small-caps"><b><br><br>
										matches your<br>preferences<br>
										<label style="font-size:32px">
											<b>&nbsp'.$row['Event_Score'].'%</b>
										</label>
									  </p>
									</li>';
						}
						echo '
									<li class="last">
										<p class="desc" style="font-size:14px; text-align:center"><b>'.
										$row['Event_Name'].'<br>'.
										$row['Club_Name'].' ('.$row['Club_City'].', '.$row['Club_State'].', '.ROUND($row['Event_Distance']).'km)<br>'.
										'<font color="red">'.$row['Event_Friends'].'</font><i>'.
										$row['DJ_Names_Final'].
										$row['Band_Names_Final'].
										$row['Event_Genres_Final'].
										$row['Entry_Fees_Final'].
										$row['Event_Specials_Final'].'</i></b>
									</li>
								</ul>
							</div>
						</li>
						';
					}
				}
				?>



<!--                <li class="block">
                    <div class="event featured">
                      <ul>
                        <li style="width:115px">
                          <a href="club.html" rel="facebox">
                            <img class="clubimg" src="css/img/club.jpg"/>
                          </a>
                        </li>
                        <li class="accuracy">
                          <b><br>MATCHES YOUR<br>PREFERENCES<br><p style="font-size:30px">&nbsp100%</p></b>
                        </li>
                        <li style="width:170px">
                          <p class="title"></p>
                          <p class="desc">{{ Event_Name }}<br/>
                          {{ Event_Description }}<br/>
                          {{ Event_Description }}<br/>
                          {{ Event_Description }}<br/>
                          {{ Event_Description }}
                        </li>
                        <li class="last">
                          <a href="dj.html" rel="facebox">
                            <img class ="djimg" src="css/img/dj.jpg"/>
                          </a>
                        </li>
                    </div>
                </li>-->
                <!-- End of Main content-->
            </ul>
		</div>
		</div>
	</body>
</html>