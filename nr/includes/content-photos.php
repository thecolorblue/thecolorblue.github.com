<script>
$(function() {
    $( "#filter_date" ).datepicker();
    var availableclubs = ["club downtown", "club discotheque", "club rave"];
    $( "#filter_club" ).autocomplete({source:availableclubs});
    var availabledjs = ["DJ Mixes A Lot","DJ Crazy","DJ Pokadots",
			"DJ CrazyHorse","DJ Speakeasy","DJ JD","DJ John",
			"DJ Country"];
    $( "#filter_dj" ).autocomplete({source:availabledjs});
    });
</script>
<div class="box">
        <ul class="controls">
            <li>
                <label>filter by club:</label>
                <input name="filter_club" type="text" 
                    value="" 
                    size="25" id="filter_club" 
                    class="frm_txt"/>
            </li>
            <li>
                <label>filter by DJ:</label>
                <input name="filter_dj" type="text" 
                    value="" 
                    size="25" id="filter_dj" 
                    class="frm_txt"/>
            </li>
            <li>
                <label>filter by date:</label>
                <input name="filter_date" type="text" 
                    value="filter date" 
                    size="25" id="filter_date" 
                    class="frm_txt"/>
            </li>
        </ul>
</div>
<ol>
<li class="pictures">
    <div class="block pic">
        <div class="picholder">
        <a href="#">
            <img src="css/img/IMG_0951.jpg"/><br/>
            a short description
        </a>
        </div>
    </div>
</li>
<li class="pictures">
    <div class="block pic">
        <div class="picholder">
        <a href="#">
            <img src="css/img/IMG_0951.jpg"/><br/>
            a short description
        </a>
        </div>
    </div>
</li>
<li class="pictures">
    <div class="block pic">
        <div class="picholder">
        <a href="#">
            <img src="css/img/IMG_0951.jpg"/><br/>
            a short description
        </a>
        </div>
    </div>
</li>
<li class="pictures">
    <div class="block pic">
        <div class="picholder">
        <a href="#">
            <img src="css/img/IMG_0951.jpg"/><br/>
            a short description
        </a>
        </div>
    </div>
</li>
<li class="pictures">
    <div class="block pic">
        <div class="picholder">
        <a href="#">
            <img src="css/img/IMG_0951.jpg"/><br/>
            a short description
        </a>
        </div>
    </div>
</li>
<li class="pictures">
    <div class="block pic">
        <div class="picholder">
        <a href="#">
            <img src="css/img/IMG_0951.jpg"/><br/>
            a short description
        </a>
        </div>
    </div>
</li>
<li class="pictures">
    <div class="block pic">
        <div class="picholder">
        <a href="#">
            <img src="css/img/IMG_0951.jpg"/><br/>
            a short description
        </a>
        </div>
    </div>
</li>
</ol>