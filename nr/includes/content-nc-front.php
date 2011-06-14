    <div class="box cevent">
        <div class="block">
            <form action="models/create-event.php" method="post" name="comm_form" id="comm_form">
              <h2><img src="css/glyphs/martini.png" class="glyph large"/>Create an Event</h2>
                <fieldset>
                    <div class="field">
                        <label for="theName" class="inlined">Event Name</label>
                            <input name="form_name" type="text" id="theName" 
                            class="frm_txt input-text" title="Make sure this is unique. 
                            adding more content here to see how big it can get."/>
                        
                        <p class="field_desc">The name of your event</p>
                    </div>            

                    <div class="field">
                        <label for="form_specials1" class="inlined">Specials</label>
                            <input name="form_specials1" type="text" id="special1" 
                                class="frm_txt input-text"/>
                    </div>
                    <div class="field">
                        <label for="fee" class="inlined">Entry Fees</label>
                          <input name="form_fee" type="text" id="fee"
                            class="frm_txt input-text"/>
                    </div>
                    <div class="field">
                        <label for="theDJ" class="inlined">DJ's</label> 
                            <input name="form_url" type="text" id="theDJ" 
                            class="frm_txt input-text" title="DJ's will drop down when you start typing"/>
                    </div>
                    <div class="field">
                        <label for="band" class="inlined">Band</label>
                          <input name="form_time" type="text" id="band"
                            class="frm_txt input-text"/>
                        <label for="bandurl" class="inlined">Band URL</label>
                          <input name="form_time" type="text" id="bandurl"
                            class="frm_txt input-text" title="Band URL description"/>
                        </label>             
                    </div>
                    <div class="field">
                        <label for="event_desc">Event Description:<br />
                            <textarea name="m" cols="30" rows="6" 
                            id="event_desc" title="description">a nice large box</textarea></label>
                        <br />
                    </div>
                    <div class="grid-6-12">
                        <label for="photo">
                            <img src="css/glyphs/photos.png" class="glyph large"/>
                            Upload Flyer
                        </label>
                        <input type="file" class="form-txt upload" value="Event Image" id="photo"/>
                    </div>
                    <div style="top:40px;right:25px;position:absolute;">
                        <div id="datepicker">
                            <label for="datepicker">Pick a date:</label>
                        </div>                        
                        <label for="time" class="inlined time">Time</label>
                        <input name="form_time" type="text" id="time"
                            class="frm_txt_sml input-text"/>
                    </div>
                                         
                    <hr/>
                        <h2 style="text-align:center"><img src="css/glyphs/note.png" class="glyph large"/>Music</h2>
                    <div class="grid-4-12" style="text-align:left;">                        
                        <label class="form-lbl">
                            <input type="checkbox" name="range1" />Top 40
                        </label>
                        
                        <label class="form-lbl">
                            <input type="checkbox" name="range2"  />Pop
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range3"  />Dance
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range4" />House
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range2" />Electro
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range3" />Hip-Hop / Rap
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range4" />Reggae
                        </label>

                    </div>     
                    <div class="grid-4-12" style="text-align:left;">
                        <label class="form-lbl">
                            <input type="checkbox" name="range1" />Reggaeton
                        </label>
                        
                        <label class="form-lbl">
                            <input type="checkbox" name="range2"  />R&B
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range3"  />Old-School
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range4" />Country
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range2" />Motown
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range3" />Alternative
                        </label>
                    </div>
                    <div class="grid-4-12" style="text-align:left;">
                        <label class="form-lbl">
                            <input type="checkbox" name="range1" />Clasic Rock
                        </label>
                        
                        <label class="form-lbl">
                            <input type="checkbox" name="range2"  />Acoustic
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range3"  />Rock
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range4" />Metal
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range2" />70's
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range3" />80's
                        </label>
                        <label class="form-lbl">
                            <input type="checkbox" name="range4" />90's
                        </label>
                    </div>
                    <button class="buttons" type="submit">Send</button>
                </fieldset>
            </form>
            <hr/>
        </div>
        <div class="box">
            <h2><img src="css/glyphs/user.png" class="glyph large"/>View Profile</h2>
            <div class="user page"style="padding:5px;margin:20px;">
                <div style="position:relative;">
                    <img 
                                style="float:left;margin:10px;height:80px;width:80px;"
                                src="css/img/dj.jpg"/> 
                    <p style="margin:16px;margin-top:12px;font-weight:bold;">{{ Club_Name }}</p>
                    <p style="margin:16px;">{{ Club_Address_Line_1 }}</p>
                    <p style="margin:3px;">{{ Club_Atmosphere }}</p>
                    <p style="margin:3px;">{{ Club_Cryogenics }}</p>
                    <p style="margin:3px;">{{ Club_Smoking_Allowed }}</p>
                    <p style="margin:3px;">{{ Club_Serves_Food }}</p>
                    <p style="margin:3px;">{{ Club_Number_Of_Bars }}</p>
                    <p style="margin:3px;">{{ Club_Minimum_Age }}</p>
                    <p style="margin:3px;">{{ Club_Sexual_Preference }}</p>
                    <p style="margin:3px;">{{ Club_Contact_Email }}</p>
                    <p style="margin:3px;">{{ Club_Contact }}</p>
                    <div style="position:absolute;top:5px;right:10px;">
                        <p style="margin:3px;margin-top:12px;width:305px;height:100px;overflow:auto;text-align:right;">
                            {{ Club_Bio }}
                        </p>
                    </div>
                </div>
                <hr/>
                <div style="width:45%;
                    border: 4px solid;
                    border-color:#ccc;
                    margin:5px;
                    float:left;">
                    <p style="margin:10px;text-align:center;font-weight:bold;">
                        Recent DJ's<br/>
                        {{ Event_DJs }}
                    </p>
                </div>
                <div style="width:45%;
                        border: 4px solid;
                        border-color:#ccc;
                        margin:5px;
                        float:left;">
                    <p style="margin:10px;text-align:center;font-weight:bold;">
                        Recent Events<br/>
                        {{ Event_Club_Event }}
                    </p>
                </div>
                <p style="margin:10px;text-align:center;">Comments - Likes - Share buttons</p>
                <hr/>
                <div style="width:30%;
                        border: 4px solid;
                        border-color:#ccc;
                        margin:5px;
                        float:left;">
                    <p style="margin:10px;text-align:center;font-weight:bold;">
                        Biggest Fans<br/>
                        Fans sorted by points
                    </p>
                </div>
                <div style="width:30%;
                        border: 4px solid;
                        border-color:#ccc;
                        margin:5px;
                        float:left;">
                    <p style="margin:10px;text-align:center;font-weight:bold;">
                        put something here
                    </p>
                </div>
                <div style="width:30%;
                        border: 4px solid;
                        border-color:#ccc;
                        margin:5px;
                        float:left;">
                    <p style="margin:10px;text-align:center;font-weight:bold;">
                        something else here
                    </p>
                </div>
            </div>
        </div>
    </div>