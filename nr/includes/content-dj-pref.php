    	<div class="box" id="message">
            <div class="block">
            </div>
        </div>
        <div class="grid_8">
            <div class="box">
                <form style="float:left;" 
                        action="create-event.php" 
                        method="post" name="pref_form" class="pref_form">
                    <div class="grid-4-12">
                        <h2>Music</h2>
                        
                        <label class="sdr-lbl">Range 1</label>
                        <input type="range" name="range1" 
                            min="0" max="100" step="1" value="100" 
                            progress="false"/>
                        <br/>
                        
                        <label class="sdr-lbl">Range 2</label>
                        <input type="range" name="range2" 
                            min="0" max="100" step="1" value="100" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 3</label>
                        <input type="range" name="range3" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 4</label>
                        <input type="range" name="range4" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 5</label>
                        <input type="range" name="range5" 
                        min="0" max="100" step="1" value="100" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 6</label>
                        <input type="range" name="range6" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                            
                        <label class="sdr-lbl">Range 7</label>
                        <input type="range" name="range7" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <hr/>
                    </div>
    
                    <div class="grid-4-12">
                        <h2>&nbsp</h2>
                        <label class="sdr-lbl">Range 1</label>
                        <input type="range" name="range1" 
                        min="0" max="100" step="1" value="100" 
                        progress="false"/>
                        <br/>
                        
                        <label class="sdr-lbl">Range 2</label>
                        <input type="range" name="range2" 
                        min="0" max="100" step="1" value="100" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 3</label>
                        <input type="range" name="range3" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 4</label>
                        <input type="range" name="range4" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 5</label>
                        <input type="range" name="range5" 
                        min="0" max="100" step="1" value="100" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 6</label>
                        <input type="range" name="range6" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 7</label>
                        <input type="range" name="range7" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <hr/>
                    </div>
                    <div class="grid-4-12">
                        <h2>&nbsp</h2>
                        <label class="sdr-lbl">Range 1</label>
                        <input type="range" name="range1" 
                        min="0" max="100" step="1" value="100" 
                        progress="false"/>
                        <br/>
                        
                        <label class="sdr-lbl">Range 2</label>
                        <input type="range" name="range2" 
                        min="0" max="100" step="1" value="100" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 3</label>
                        <input type="range" name="range3" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 4</label>
                        <input type="range" name="range4" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 5</label>
                        <input type="range" name="range5" 
                        min="0" max="100" step="1" value="100" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 6</label>
                        <input type="range" name="range6" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        
                        <label class="sdr-lbl">Range 7</label>
                        <input type="range" name="range7" 
                        min="0" max="100" step="1" value="50" />
                        <br/>
                        <hr/>
                    </div>
                <fieldset>
                <div class="grid-6-12">
                    <label for="zipcode" class="form-lbl form-small">Zip Code: </label>
                    <input type="text" class="form-txt form-medium" 
                        id="zipcode" value="So we know where you are" />
                </div>
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
                </fieldset>
                <hr/>
<script>
$(":range").rangeinput();
</script>
                    <div>
                        <input id="buttons" type="submit" title="update" value="update" />
                    </div>
                </form>
            </div>
        </div>
        <hr/>