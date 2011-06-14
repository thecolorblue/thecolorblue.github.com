<html>

<head>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/layout-iframe.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/range.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/form-structure-guy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/form-style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquicustom.css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="../../css/ie6.css" media="screen" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="../../css/ie.css" media="screen" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/facebox.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/facebox.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.7.custom.min.js"></script>
</head>
<body>
	<div style="width:780px; height:700px; overflow-y:scroll; overflow-x:hidden; background:white">
            <form id="myForm" action="CL-pref.php" method="post">
            <div class="box">
                <legend><h2>Your Account/Preferences</h2></legend>
                <div class="grid-4-12">
                <div class="fieldbox">
                    <label for="username" class="inlined">Login</label>
                    <input id="username" type="text" class="form-txt input-text bin" name="User_Login" <?php echo 'value="'.$Init_User_Login.'"'; if ($User_ISN!=0) { echo ' disabled=TRUE style="background-color:grey"'; } ?> />
                    <ul class="vali">
                        <li class="success"><img src="css/img/greencheck.png"/></li>
                        <li class="fail"><img src="css/img/redx.png"/></li>
                    </ul>
                </div>
                </div>
                <div class="grid-4-12">
                <div class="fieldbox">
                    <label for="password" class="inlined"><?php if( $loggedin ) { echo 'Change ';} ?>Password</label>
                    <input id="password" type="password" name="User_Password" class="form-txt input-text"/>
                    <ul class="vali">
                        <li class="success"><img src="css/img/greencheck.png"/></li>
                        <li class="fail"><img src="css/img/redx.png"/></li>
                    </ul>
                </div>
                </div>
                <div class="grid-4-12">
                <div class="fieldbox">
                    <label for="conpassword" class="inlined">Confirm Password</label>
                    <input id="conpassword" name="User_Password_Confirm" type="password" class="form-txt input-text"/>
                    <ul class="vali">
                        <li class="success"><img src="css/img/greencheck.png"/></li>
                        <li class="fail"><img src="css/img/redx.png"/></li>
                    </ul>
                </div>
                </div>
                <hr/>
                <div class="grid-6-12">
                <div class="fieldbox">
                    <label for="displayname" class="inlined">Display Name</label>
                    <input id="displayname" name="Clubber_Name" type="text" class="form-txt input-text" value="<?php echo $Init_Clubber_Name ?>"/>
                    <ul class="vali">
                        <li class="success"><img src="css/img/greencheck.png"/></li>
                        <li class="fail"><img src="css/img/redx.png"/></li>
                    </ul>

                    <label for="zip" class="inlined" id="ziplabel">Zip Code</label>
                    <input id="zip" name="Clubber_ZIP"  value="<?php echo $Init_Clubber_ZIP ?>" type="text" class="form-txt input-text" maxlength="5" onKeyDown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )"><label id="vali-zip">&nbsp</label>
                    <ul id="valizip">
                        <li class="success"><img src="css/img/greencheck.png"/></li>
                        <li class="fail"><img src="css/img/redx.png"/></li>
                    </ul>                    
                    <label for="email" class="inlined">Email</label>
                    <input id="email" name="User_Email" type="text" class="form-txt input-text bin" value="<?php echo $Init_User_Email ?>"/>
                    <ul class="vali">
                        <li class="success"><img src="css/img/greencheck.png"/></li>
                        <li class="fail"><img src="css/img/redx.png"/></li>
                    </ul>
                    <div class="field-clear"></div>

                <ul class="form-list-chk" style="width:200px;">
                    <li><label class="form-lbl"><input name="Clubber_Is_Epileptic" type="checkbox" checked="<?php echo $Init_Clubber_Is_Epileptic ?>"/>Epilepsy</label></li>
                    <li>Please do not show me events with excessive amounts of flashing lights.</li>
                </ul>
                </div></div>
                <div class="grid-6-12">
                    <label class="form-lbl">Date of Birth</label>
                    <div type="text" class="form-txt" id="dob"></div>
                    <input type="text" id="dob_holder" name="Clubber_DOB"/>
                </div>
                <hr noshade="FALSE">
                <div class="field-clear"></div>

                    <div align="center" style="margin:10px 0 0 0">
                        <div align="center" style="width:600px"><h2>Music</h2></div>
					</div>
					<br>
                    <div class="grid-4-12">
                        <label class="sdr-lbl">Top 40<br></label>
                        <input type="range" name="Clubber_Genre_Top40" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Top40 ?>" progress="false"/><br/>
                        <label class="sdr-lbl">Pop<br></label>
                        <input type="range" name="Clubber_Genre_Pop" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Pop ?>" /><br/>
                        <label class="sdr-lbl">Dance<br></label>
                        <input type="range" name="Clubber_Genre_Dance" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Dance ?>" /><br/>
                        <label class="sdr-lbl">House<br></label>
                        <input type="range" name="Clubber_Genre_House" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_House ?>" /><br/>
                        <label class="sdr-lbl">Electro<br></label>
                        <input type="range" name="Clubber_Genre_Electro" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Electro ?>" /><br/>
                        <label class="sdr-lbl">Hip-Hop / Rap<br></label>
                        <input type="range" name="Clubber_Genre_HipHopRap" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_HipHopRap ?>" /><br/>
                        <label class="sdr-lbl">Reggae<br></label>
                        <input type="range" name="Clubber_Genre_Reggae" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Reggae ?>" /><br/>
                    </div>
                    <div class="grid-4-12">
                        <label class="sdr-lbl long">Reggaeton</label>
                        <input type="range" name="Clubber_Genre_Reggaeton" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Reggaeton ?>" progress="false"/><br/>
                        <label class="sdr-lbl">R&B</label>
                        <input type="range" name="Clubber_Genre_RandB" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_RandB ?>" /><br/>
                        <label class="sdr-lbl">Old-School</label>
                        <input type="range" name="Clubber_Genre_OldSchool" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_OldSchool ?>" /><br/>
                        <label class="sdr-lbl">Country</label>
                        <input type="range" name="Clubber_Genre_Country" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Country ?>" /><br/>
                        <label class="sdr-lbl">Motown</label>
                        <input type="range" name="Clubber_Genre_Motown" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Motown ?>" /><br/>
                        <label class="sdr-lbl">Acoustic</label>
                        <input type="range" name="Clubber_Genre_Accoustic" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Accoustic ?>" /><br/>
                    </div>
                    <div class="grid-4-12">
                        <label class="sdr-lbl long">Classic Rock</label>
                        <input type="range" name="Clubber_Genre_ClassicRock" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_ClassicRock ?>" progress="false"/><br/>
                        <label class="sdr-lbl">Rock</label>
                        <input type="range" name="Clubber_Genre_Rock" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Rock ?>" /><br/>
                        <label class="sdr-lbl long">Alternative Rock</label>
                        <input type="range" name="Clubber_Genre_AlternativeRock" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_AlternativeRock ?>" /><br/>
                        <label class="sdr-lbl">Metal</label>
                        <input type="range" name="Clubber_Genre_Metal" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_Metal ?>" /><br/>
                        <label class="sdr-lbl">'90s</label>
                        <input type="range" name="Clubber_Genre_90s" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_90s ?>" /><br/>
                        <label class="sdr-lbl">'80s</label>
                        <input type="range" name="Clubber_Genre_80s" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_80s ?>" /><br/>
                        <label class="sdr-lbl">'70s</label>
                        <input type="range" name="Clubber_Genre_70s" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Genre_70s ?>" /><br/>
                    </div>
                        <hr noshade="FALSE">
                    <div class="grid-4-12" id="atmos">
                        <h2>Atmosphere</h2>
						<br>
                        <div id="lighting">
                        <label class="sdr-lbl">Lighting</label>
                        <input type="range" name="Clubber_Atmosphere_Lighting" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Atmosphere_Lighting ?>" progress="false"/><br/>
                        </div>
                        <div id="musicvol">
                        <label class="sdr-lbl">Music Volume</label>
                        <input type="range" name="Clubber_Atmosphere_Volume" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Atmosphere_Volume ?>" /><br/>
                        </div>
                        <div id="space">
                        <label class="sdr-lbl">Space</label>
                        <input type="range" name="Clubber_Atmosphere_Space" min="0" max="100" step="1" value="<?php echo $Init_Clubber_Atmosphere_Space ?>" /><br/>
                        </div>
                        <div id="dropdown">
                        <label>Smoking Preference</label>
                        <select name="Clubber_Smoking_Preference">
                        <?php echo $Init_Clubber_Smoking_Preference ?>
                        </select><br/>
                        <label>Sexual Preference</label>
                        <select name="Clubber_Gay_Preference">
                        <?php echo $Init_Clubber_Gay_Preference ?>
                        </select>
                        </div>
                    </div>
                    <div class="grid-4-12" id="fx">
                        <h2>FX</h2>
						<br>
                        <label class="sdr-lbl">Flairing</label>
                        <input type="range" name="Clubber_FX_Flairing" min="0" max="100" step="1" value="<?php echo $Init_Clubber_FX_Flairing ?>" /><br/>
                        <label class="sdr-lbl">Lasers</label>
                        <input type="range" name="Clubber_FX_Lasers" min="0" max="100" step="1" value="<?php echo $Init_Clubber_FX_Lasers ?>" progress="false"/><br/>
                        <label class="sdr-lbl">Cryogenics</label>
                        <input type="range" name="Clubber_FX_Cryogenics" min="0" max="100" step="1" value="<?php echo $Init_Clubber_FX_Cryogenics ?>" /><br/>
                        <label class="sdr-lbl">Smoke</label>
                        <input type="range" name="Clubber_FX_Smoke" min="0" max="100" step="1" value="<?php echo $Init_Clubber_FX_Smoke ?>" /><br/>
                        <label class="sdr-lbl">Videoscreens</label>
                        <input type="range" name="Clubber_FX_Videoscreens" min="0" max="100" step="1" value="<?php echo $Init_Clubber_FX_Videoscreens ?>" /><br/>
                    </div>      
                        <hr noshade="FALSE">
                    <div class="grid-12-12">
                        <label class="form-lbl">Bio</label>
                        <textarea rows="" cols="" class="form-txt"></textarea>
                    </div>
                          <div class="box djsmalllist">
<!--      <label>Clubber's list of favorite DJ's</label>-->
      <ul>
        <li class="djli">
          <label>DJ 1</label>
          <div class="djsmall">
            <img src="css/img/djfreebird1.jpg"/>
          </div>  
          <ul class="options">
            <!--<li><a href="#">share</a></li>-->
            <li><a href="#">view</a></li>
            <li class="last"><a href="#">unlike</a></li>
          </ul>
        </li>
        <li class="djli">
          <label>DJ 2</label>
          <div class="djsmall">
            <img src="css/img/djfreebird4.jpg"/>
          </div>  
          <ul class="options">
            <!--<li><a href="#">share</a></li>-->
            <li><a href="#">view</a></li>
            <li class="last"><a href="#">unlike</a></li>
          </ul>
        </li>
        <li class="djli">
          <label>DJ 3</label>
          <div class="djsmall">
            <img src="css/img/djfreebird3.jpg"/>
          </div>  
          <ul class="options">
            <!--<li><a href="#">share</a></li>-->
            <li><a href="#">view</a></li>
            <li class="last"><a href="#">unlike</a></li>
          </ul>
        </li>
        <li class="djli">
          <label>DJ 4</label>
          <div class="djsmall">
            <img src="css/img/djfreebird1.jpg"/>
          </div>  
          <ul class="options">
            <!--<li><a href="#">share</a></li>-->
            <li><a href="#">view</a></li>
            <li class="last"><a href="#">unlike</a></li>
          </ul>
        </li>
        <li class="djli">
          <label>DJ 5</label>
          <div class="djsmall">
            <img src="css/img/djfreebird4.jpg"/>
          </div>  
          <ul class="options">
            <!--<li><a href="#">share</a></li>-->
            <li><a href="#">view</a></li>
            <li class="last"><a href="#">unlike</a></li>
          </ul>
        </li>
        <li class="djli">
          <label>DJ 6</label>
          <div class="djsmall">
            <img src="css/img/djfreebird3.jpg"/>
          </div>  
          <ul class="options">
            <!--<li><a href="#">share</a></li>-->
            <li><a href="#">view</a></li>
            <li class="last"><a href="#">unlike</a></li>
          </ul>
        </li>
      </ul>
      </div>
		<hr/>
	  <div class="grid-4-12 form-no-lbl">
                        <input class="submit" type="submit" title="send" value="send" />
						<input type="hidden" name="Submitted" value="TRUE" />
                    </div>
                </form>
                </div>
				<hr/>
</div>
                <script>
                 $("#dob_holder").hide();
                $(":range").rangeinput();
		$( "#dob" ).datepicker({
			dateFormat: 'yy-mm-dd',
			defaultDate: '<?php echo $Init_Clubber_DOB ?>',
			changeMonth: true,
			changeYear: true,
			yearRange: '1950:2050',
            onSelect: function(){
                dateText = $("#dob").datepicker("getDate");
                var date = $.datepicker.formatDate('yy-mm-dd', dateText);
                $("#dob_holder").val(date);
            }
        });
/**
 *  On Page Load settings
 *
 *
 *
 */

$(document).ready(function(){
	if($("input#zip").val() != ""){
        var input = $("input#zip");
        $.ajax({
            type: "POST",
            data: "data=" + input.val(),
            url: "validate-zip.php",
            success: function(city){
			if(city == "fail") {
				input.css("border","1px red solid");
				$("#valizip").children("li.fail").show();
				$("#vali-zip").html("Not a valid zip code");
			} else if (city == ""){
				input.css("border","0px #ddd solid");
				$("#valizip").children("li").hide();
				$("#vali-zip").html("&nbsp");
			} else {
                $("#vali-zip").html(city);
				input.css("border","1px #48b955 solid");
				$("#valizip").children("li.success").show();
            	}
			}
        });
    } else {
		$("#vali-zip").html("&nbsp");
	}
});
/**
 *  Dims input labels 
 *  Hides the label when something is typed
 *
 */
$("label.inlined + input.input-text").each(function (type){
        var input = $(this);
        if(input.val() !== ""){
            input.prev("label.inlined").addClass("has-text");
        }
        $(this).focus(function(){
            $(this).prev("label.inlined").addClass("focus");
            if($(".time")){
                $(this).addClass("has-text").removeClass("focus");
            }
        });
        $(this).keypress(function() {
            $(this).prev("label.inlined").addClass("has-text").removeClass("focus");
        });

    });
$("input.input-text").blur(function(){
            if($(this).val() == ""){
                $(this).prev("label.inlined").addClass("focus").removeClass("has-text");
            }
        });
/**
 *  true/false Validation handler
 *  when focus leaves a input 
 *  the value is sent to the server.
 *  handles email and login validation.
 */
$("input.bin").blur(function(){
    $(this).next("ul").children("li").hide();
	//$(this).css("border","0px #ddd solid");
    if($(this).val() !== ""){
        var input = $(this);
        if($(this).attr("id") === "email"){
            $.ajax({
                type: "POST",
                data: "data=" + input.val(),
                url: "validate-email.php",
                success: function(msg){
                    if(msg == "success"){
                        input.css("border", "1px #48b955 solid");
                        input.next("ul").children("li.success").show();
                    } 
					if(msg == "fail") {
                        input.css("border", "1px red solid");
                        input.next("ul").children("li.fail").show();
                    }
                }
            });
        }
        else {
            $.ajax({
                type: "POST",
                data: "data=" + input.val(),
                url: "validate-login.php",
                success: function(msg){
                    if(msg == "success"){
                        input.next("ul").children("li.success").show();
                        input.css("border", "1px #48b955 solid");
                    }
                    if(msg == "fail") {
                        input.next("ul").children("li.fail").show();
                        input.css("border", "1px #fd442b solid");
                    }
                }
            });
        }
    }
	else
	{
        $(this).css("border", "1px #ddd solid");
	}
});
/**
 * Password Handling
 * check if there is a password
 * checks if confirm password is the same value
 */
/* $("input#password").blur(function(){
    $(this).next("ul").children("li").hide();
    if($(this).val() != ""){
        $(this).css("border","1px #48b955 solid");
        $(this).next("ul").children("li.success").show();
    } else {
        $(this).css("border","1px red solid");
        $(this).next("ul").children("li.fail").show();
    }
});*/ 
$("input#conpassword, input#password").blur(function(){
	var password = $("input#password");
	var confirm = $("input#conpassword");
    confirm.next("ul").children("li").hide();
	password.next("ul").children("li").hide();
    if(password.val() != ""){
		if(confirm.val() == ""){
    	  confirm.css("border","1px red solid");
  	      confirm.next("ul").children("li.fail").show();
		  password.css("border","1px red solid");
		  password.next("ul").children("li.fail").show();
   		 } else {
   	 	if(confirm.val() == password.val()){
   		     confirm.css("border","1px #48b955 solid");
   		     confirm.next("ul").children("li.success").show();
			 password.css("border","1px #48b955 solid");
			 password.next("ul").children("li.success").show();
  		  } else {
  	 	     confirm.css("border","1px red solid").removeClass("grey");
   		     confirm.next("ul").children("li.fail").show();
			 password.css("border","1px red solid").removeClass("grey");
			 password.next("ul").children("li.fail").show();
  		  }
      }
	}
	if(confirm.val() != "" && password.val() == ""){
  	 	     confirm.css("border","1px red solid");
   		     confirm.next("ul").children("li.fail").show();
			 password.css("border","1px red solid");
			 password.next("ul").children("li.fail").show();
	}
	if(confirm.val() == "" && password.val() == ""){
		confirm.css("border","0px #ddd solid");
		password.css("border","0px #ddd solid");
        confirm.next("ul").children("li").hide();
	    password.next("ul").children("li").hide();
	}
});
/**
 *  Zip Code Validation
 *  Check validity of zip code entered into input
 *  input value is sent to validate-zip.php
 *
 */
$("input#zip").blur(function(){
	$("#valizip").children("li").hide();
    if($(this).val() !== ""){
        var input = $(this);
        $.ajax({
            type: "POST",
            data: "data=" + input.val(),
            url: "validate-zip.php",
            success: function(city){
			if(city == "fail") {
				input.css("border","1px red solid");
				$("#valizip").children("li.fail").show();
				$("#vali-zip").html("Not a valid zip code");
			} else if (city == ""){
				input.css("border","0px #ddd solid");
				$("#valizip").children("li").hide();
				$("#vali-zip").html("&nbsp");
			} else {
                $("#vali-zip").html(city);
				input.css("border","1px #48b955 solid");
				$("#valizip").children("li.success").show();
            	}
			}
        });
    } else {
		$("#vali-zip").html("&nbsp");
	}
	
});
/**
 *  True/False Validation without ajax
 *  display name and email
 *  
 *
 */
/* $("input#displayname").blur(function(){
	$(this).next("ul").children("li").hide();
    var input = $(this);
    if($(this).val() !== ""){
		input.css("border","1px #48b955 solid");
		input.next('ul').children("li.success").show();	
    } else {
		$(this).css("border","1px red solid");
		$(this).next("ul").children("li.fail").show();
	}
}); */ 

</script>
</body>
</html>