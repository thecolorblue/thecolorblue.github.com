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

</div>
<!--<form id="edit_pref">
  <div class="box" id="rangebox">
    <div class="field-clear"></div>
      <div class="grid-4-12">
      <h2>Music Settings</h2>
        <label >Range 1</label>
        <input type="range" name="range1" min="0" max="100" 
          step="1" value="100" progress="false"/><br/>
        <label >Range 2</label>
        <input type="range" name="range2" min="0" max="100" 
          step="1" value="100" /><br/>
        <label>Range 3</label>
        <input type="range" name="range3" min="0" max="100" 
          step="1" value="50" /><br/>
        <label>Range 4</label>
        <input type="range" name="range4" min="0" max="100" 
          step="1" value="50" /><br/>
        <label>Range 5</label>
        <input type="range" name="range2" min="0" max="100" 
          step="1" value="100" /><br/>
        <label>Range 6</label>
        <input type="range" name="range3" min="0" max="100" 
          step="1" value="50" /><br/>
        <label>Range 7</label>
        <input type="range" name="range4" min="0" max="100" 
          step="1" value="50" /><br/>
      </div>
      <div class="grid-4-12">
        <h2>&nbsp</h2>
        <label>Range 1</label>
        <input type="range" name="range1" min="0" max="100" step="1" value="100" progress="false"/><br/>
        <label>Range 2</label>
        <input type="range" name="range2" min="0" max="100" step="1" value="100" /><br/>
        <label>Range 3</label>
        <input type="range" name="range3" min="0" max="100" step="1" value="50" /><br/>
        <label>Range 4</label>
        <input type="range" name="range4" min="0" max="100" step="1" value="50" /><br/>
        <label>Range 5</label>
        <input type="range" name="range2" min="0" max="100" step="1" value="100" /><br/>
        <label>Range 6</label>
        <input type="range" name="range3" min="0" max="100" step="1" value="50" /><br/>

      </div>
      <div class="grid-4-12">
        <h2>&nbsp</h2>
        <label>Range 1</label>
        <input type="range" name="range1" min="0" max="100" step="1" value="100" progress="false"/><br/>
        <label>Range 2</label>
        <input type="range" name="range2" min="0" max="100" step="1" value="100" /><br/>
        <label>Range 3</label>
        <input type="range" name="range3" min="0" max="100" step="1" value="50" /><br/>
        <label>Range 4</label>
        <input type="range" name="range4" min="0" max="100" step="1" value="50" /><br/>
        <label>Range 5</label>
        <input type="range" name="range2" min="0" max="100" step="1" value="100" /><br/>
        <label>Range 6</label>
        <input type="range" name="range3" min="0" max="100" step="1" value="50" /><br/>
        <label>Range 7</label>
        <input type="range" name="range4" min="0" max="100" step="1" value="50" /><br/>
      </div>
      <div>
        <input class="buttons" style="width:130px" type="submit" 
          title="save" value="save settings" />
      </div>
   </div>
 </form>-->
