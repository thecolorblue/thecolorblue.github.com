<html>

<head>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/form-structure.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/form-style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquicustom.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/profile.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/range.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/layout-iframe.css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="../../css/ie6.css" media="screen" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="../../css/ie.css" media="screen" />
<![endif]--><script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/facebox.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.8.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
</script><script language="javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="js/flowplayer-3.2.4.min.js"></script>
<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
<script>
(function($){ 
     $.fn.extend({  
         tabify: function() {
            function getHref(content){
                hash = $(content).find('a').attr('href');
                if(hash)
                    return hash.substring(0,hash.length-4);
                else
                    return false;
                }
             function setActive(content){
                $(content).addClass('active');
                if(getHref(content))
                    $(getHref(content)).show();
                else
                    return false;
                $(content).siblings('li').each(function(){
                    $(this).removeClass('active');
                    $(getHref(this)).hide();
                });
            }
            return this.each(function() {
                var self = this;
                
                $(this).find('li>a').each(function(){
                    $(this).attr('href',$(this).attr('href') + '-tab');
                });
                
                function handleHash(){
                    if(location.hash)
                        setActive($(self).find('a[href=' + location.hash + ']').parent());
                }
                if(location.hash)
                    handleHash();
                setInterval(handleHash,100);
                $(this).find('li').each(function(){
                    if($(this).hasClass('active'))
                        $(getHref(this)).show();
                    else
                        $(getHref(this)).hide();
                });
            }); 
        } 
    }); 
})(jQuery);
$(document).ready(function () {
  $('.clprofile').tabify();
});
</script><script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.timepicker.js"></script>
<style>
body {
background-color:#224e7f;
}
.profile{
background-color:#ddd;
padding:10px 10px 30px 10px;margin:10px;
position:relative;
}
.clprofile #special {
position:absolute;
top:20px;
right:30px;
padding:35px 15px;
background-color:#ccc;
}

.profileimg {
float:left;
margin-right:20px;
border:1px #000 solid;
padding:40px 10px;
}
.profiledetails {
float:left;
}
ul.tabs {
list-style:none;
margin-left:21%;padding:0;
margin-bottom:-50px;
}
ul.tabs li a {
background-color:#ccc;
float:left;
padding:10px;margin-top:10px;
margin-left:0;
border-right:1px #fff solid;
}
ul.tabs li a#first {
-webkit-border-top-left-radius: 5px;
-webkit-border-bottom-left-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-bottomleft: 5px;
border-top-left-radius: 5px;
border-bottom-left-radius: 5px;
}
ul.tabs li a#last {
-webkit-border-top-right-radius: 5px;
-webkit-border-bottom-right-radius: 5px;
-moz-border-radius-topright: 5px;
-moz-border-radius-bottomright: 5px;
border-top-right-radius: 5px;
border-bottom-right-radius: 5px;
border-right:0px #fff solid;
}
.tabcontainer {
padding:10px;margin:30px 50px 0 50px;
-webkit-border-radius:5px;
background-color:rgba(200,200,200,.4);
}
.clearfix:before,
.clearfix:after {
	content: '\0020';
	display: block;
	overflow: hidden;
	visibility: hidden;
	width: 0;
	height: 0;
}

.clearfix:after {
	clear: both;
}
</style>
</head>
<body>
  <div class="clprofile">
    <div class="profileimg">Profile Image</div>
    <div class="profiledetails">
        Clubber Info<br/>
        Location<br/>
        website link<br/>
    </div>
    <div id="special">Bartender?</div>
    <div class="clearfix"></div>
    <ul class="tabs" id="tabsui">
        <li><a href="#friends" id="first">Friends</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#messages">Messages</a></li>
        <li><a href="#favoritedj" id="last">Favorite DJ's</a></li>
    </ul>
</div>
<div class="tabcontainer">
    <div id="friends">Friends</div>
    <div id="events">Events</div>
    <div id="messages">Messages</div>
    <div id="favoritedj">Favorite DJ's</div>
</div>
</body>
</html>