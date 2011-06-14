<script>
(function($) {
	$.fn.formtt = function(){
		$(":input", this).each(function(){
		  var base_title = $(this).attr('title');
		  if(undefined!=base_title && ''!= base_title){
		    var title = base_title.replace(/\|/g, "<br />");
		    var new_elem = $(this).attr('name')+'tip';
		    $(this).focus(function(){
              $(this).attr('title', '');
              $(this).after('<span class="tt" id="'+new_elem+'">'+title+'<\/span>');
		      $('#'+new_elem).show();
		    }).blur(function() { 
		      $('#'+new_elem).remove();
		      $(this).attr('title', base_title);
		    });
		  }     
		});
	}
})(jQuery);
$().ready(function(){ $('.form').formtt(); }); 
</script>
<div class="box" id="message">
    <div class="block">
    </div>
</div>
<div class="grid_8">
    <div class="box">
        <form action="#" method="post" class="pref form">
            <div class="grid-6-12">
            <h2>Atmosphere</h2>
                <ul class="form-list-chk">
                    <li>
                        <label class="form-lbl">Atmosphere 1
                            <input name="atmosphere" type="checkbox" value="1"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">Atmosphere 2
                            <input name="atmosphere" type="checkbox" value="2"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">Atmosphere 3
                            <input name="atmosphere" type="checkbox" value="3"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">Atmosphere 4
                            <input name="atmosphere" type="checkbox" value="4"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">Atmosphere 5
                            <input name="atmosphere" type="checkbox" value="5"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">Square Footage
                            <input name="atmosphere" type="checkbox" value="6"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">Hooka
                            <input name="atmosphere" type="checkbox" value="hooka"/>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="grid-6-12">
                <h2>FX</h2>
                <ul class="form-list-chk">
                    <li>
                        <label class="form-lbl">FX 1
                            <input name="atmosphere" type="checkbox" value="1"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">FX 2
                            <input name="atmosphere" type="checkbox" value="2"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">FX 3
                            <input name="atmosphere" type="checkbox" value="3"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">FX 4
                            <input name="atmosphere" type="checkbox" value="4"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">FX 5
                            <input name="atmosphere" type="checkbox" value="5"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">FX 6
                            <input name="atmosphere" type="checkbox" value="6"/>
                        </label>
                    </li>
                    <li>
                        <label class="form-lbl">FX 7
                            <input name="atmosphere" type="checkbox" value="7"/>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="field-clear"></div>
            <div class="grid-12-12">
                <label class="form-lbl">Bio</label>
                <textarea rows="" cols="" class="form-txt"></textarea>
            </div>
                <div class="grid-6-12">
                    <label for="street1"class="form-lbl">Address:
                    <input type="text" value="line 1"id="street1" name="street1"/>
                    <br/>
                    <input type="text" value="line 2"id="street2" name="street2"/>
                    </label>
                    <label for="city" class="form-lbl">City
                    <input type="text" id="city" name="city"/>
                    </label>
                </div>
                <div class="grid-6-12">
                    <label for="state" class="form-lbl">State</label>
                    <p><input type="text" class="form-txt form-medium" 
                    value="State" id="state" name="state"/></p>
                    <hr/>
                    <label for="zip" class="form-lbl">Zip Code</label>
                    <input type="text" class="form-txt form-medium" 
                    value="Zip" id="zip" name="zip"/>
                </div>
                <div class="grid-6-12">
                    <label class="form-lbl">Upload Image</label>
                    <input type="file" class="form-txt" value="Default User Image"/>
                </div>
                <div class="grid-6-12">
                    <label class="form-lbl">Your Website</label>
                    <input type="text" class="form-txt form-medium"
                        value="website" id="website" name="website"/>
                </div>
                <div class="form-clear"></div>
                <div class="grid-4-12">
                    <label class="form-lbl">Phone#</label>
                    <input type="text" class="form-txt form-medium"
                        value="" id="phone" name="phone"/>
                </div>
                <div class="grid-4-12">
                    <label class="form-lbl">Smoking?</label>
                    <label class="error">This is required</label>
                    <ul class="form-list-rdo">
                        <li>
                            <label for="ysmoke" class="form-lbl">Yes</label>
                                <input name="smoking" id="ysmoke" 
                                    type="radio" value="yes"/>
                                
                            
                        </li>
                        <li>
                            <label for="nsmoke" class="form-lbl">
                                <input name="smoking" id="nsmoke" 
                                    type="radio" value="no"/>
                                No
                            </label>
                        </li>
                        <li><input name="smoking" type="radio" value="restricted"/>
                            <label class="form-lbl">Restricted</label>
                        </li>
                    </ul>
                </div>
                <div class="grid-4-12">
                    <label class="form-lbl">Food</label>
                    <ul class="form-list-rdo">
                        <li>
                            <input name="food" type="radio" value="yes" />
                            <label class="form-lbl">Yes</label>
                        </li>
                        <li>
                            <input name="food" type="radio" value="no" />
                            <label class="form-lbl">No</label>
                        </li>
                    </ul>
                </div>
                <div class="field-clear"></div>
            <hr/>
            <legend><h2>Edit Your Account</h2></legend>
            <div class="grid-6-12">
                <label class="form-lbl">Username</label>
                <input type="text" class="form-txt form-medium" />
            </div>
            <hr/>
            <div class="grid-6-12">
                <label class="form-lbl">Change Password</label>
                <input type="password" class="form-txt"/>
            </div>
            <div class="grid-6-12">
                <label class="form-lbl">Confirm Password</label>
                <input type="password" class="form-txt"/>
            </div>
            <hr/>
            <div class="grid-6-12">
                <label class="form-lbl">Change Email Address</label>
                <input type="text" class="form-txt"/>
            </div>
        <hr/>
        <div>
            <input id="buttons" type="submit" title="update" value="update" />
        </div>
    </form>
</div>
</div>
<hr/>