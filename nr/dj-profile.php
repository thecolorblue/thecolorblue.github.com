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
  $('.djtop').tabify();
});
</script><script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.timepicker.js"></script>
</head>
<body>
<div class="box djbox">
  <div class="djprofile">
    <h2>Profile</h2>

    <div class="djtop" style="position:relative;">

              <ul id="tabsui" class="nav">
                <li><a href="#djprof">Profile</a></li>
                <li><a href="#djupcomingevents">Upcoming Shows</a></li>
                <li><a href="#djpastevents">Past Shows</a></li>
              </ul>
          
        <div id="djinnerprofile">
          <div class="tabs" id="djprof">
            <p>{{ DJ_Name }}</p>
            <p>Region</p>
            <pAtmosphere</p>
            <p>{{ DJ_Facebook_ID }}</p>
            <div>
              <p>{{ DJ_Bio }} this whole box is flexible to allow DJ's to write as much as they want about themselves.</p>
            </div>
          </div>

          <div class="tabs" id="djupcomingevents">
      <table style="width:500px;">
        <colgroup>
            <col class="colA" />
            <col class="colB" />
            <col class="colC" />
        </colgroup>
        <thead>
          <tr>
            <th>Title</th>
            <th>Club</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr class="odd">
            <th>Event 6</th>
            <td>Location b</td>
            <td>3/12/2011</td>
          </tr>
          <tr>
            <th>Event 7</th>
            <td>Location d</td>
            <td>3/24/2011</td>
          </tr>
          <tr class="odd">
            <th>Event 8</th>
            <td>Location m</td>
            <td>4/14/2011</td>
		  </tr>
          <tr>
            <th>Event 9</th>
            <td>Location h</td>
            <td>5/30/2011</td>
          </tr>
        </tbody>
      </table>
      </div>
          <div class="tabs" id="djpastevents">
      <table style="width:500px;">
        <colgroup>
            <col class="colA" />
            <col class="colB" />
            <col class="colC" />
        </colgroup>
        <thead>
          <tr>
            <th>Title</th>
            <th>Club</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr class="odd">
            <th>Event 1</th>
            <td>Location a</td>
            <td>1/12/2011</td>
          </tr>
          <tr>
            <th>Event 2</th>
            <td>Location e</td>
            <td>1/24/2011</td>
          </tr>
          <tr class="odd">
            <th>Event 3</th>
            <td>Location f</td>
            <td>1/14/2011</td>
		  </tr>
          <tr>
            <th>Event 4</th>
            <td>Location d</td>
            <td>1/30/2011</td>
          </tr>
          <tr>
            <th>Event 5</th>
            <td>Location h</td>
            <td>2/10/2011</td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
    </div>

  </div>
  <div class="djprofile" style="width:519px;">
    <div id="twitter">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('thecolorblue').start();
</script>    </div>
    <div id="facebook">
      <?php include('includes/facebook.block.php') ?>
    </div>
  </div>
</body>
</html>