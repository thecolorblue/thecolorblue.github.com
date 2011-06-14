<script>
/**
 *  Datepicker and state change handler
 *  refreshes the iframe on each change.
 *  on states change it sends the state 
 *  to the server through AJAX.
 */
    var dateText = '';
  $("#datepicker").datepicker({dateFormat: 'dd',onSelect: function(){
        dateText = $("#datepicker").datepicker("getDate");
        var convertedDate = $.datepicker.formatDate('yy-mm-dd', dateText);
		document.cookie="date=" + convertedDate;
        document.getElementById('iframe').src = 'CL-front-results.php';
      }
    });
  $("#states").change( function(){
    $("#cities").hide();
    //$("#result").html("retrieving...");
    $.ajax({
      type: "POST",
      data: "data=" + $(this).val(),
      url: "cities.php",
      success: function(msg){
          $("#cities").html(msg).show();
          $("#result").html('');
      }
    });
  });
  $("#cities").change( function(){
		//dateText = $("#datepicker").datepicker("getDate");
        //var newdate = $.datepicker.formatDate('yy-mm-dd', dateText);
		document.cookie="state=" + document.getElementById('states').value;
		document.cookie="city=" + document.getElementById('cities').value;
        document.getElementById('iframe').src = 'CL-front-results.php';
    });
  $("#states").change( function(){
		//dateText = $("#datepicker").datepicker("getDate");
        //var newdate = $.datepicker.formatDate('yy-mm-dd', dateText);
		document.cookie="state=" + document.getElementById('states').value;
		document.cookie="city=";
        document.getElementById('iframe').src = 'CL-front-results.php';
		
    
    });
});


</script>