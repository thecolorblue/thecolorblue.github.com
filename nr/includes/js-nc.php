<script>
(function($) {
// adds tooltips to form when input is in focus
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
/**
 *  NightClub Datepicker
 *    takes a list of dates and adds a highlight class
 *    to that day.
 *
 */
// highlights dates in datepicker
$().ready(function(){ 
var dates = ['05/26/11', '05/08/2011', '05/14/2011', '05/20/2011'];
    $('#datepicker').datepicker({
        dateFormat: 'dd/mm/yy',
        beforeShowDay: function(date) {
          for (var i = 0; i < dates.length; i++) {
              if (new Date(dates[i]).toString() == date.toString()) {             
                   return [true, 'highlight', date];
              }
          }
          return [true];
       }   
    });
    
    
    
$('#comm_form').formtt(); 
$(":range").rangeinput();
$('#time').timepicker();

/**
 *  Dims input labels when focused
 *  Hides label when something is typed
 *  For time, the label is hidden right away
 *  because of the way js fills in the input
 */
    $("#time").focus(function(){
        $(this).prev("label.inlined").addClass("has-text");
    });
    $("label.inlined + input.input-text").each(function (type){
//        Event.observe(window, 'load', function(){
//            setTimeout(function(){
//                if (!input.value.empty()){
//                    input.previous().addClassName('has-text');
//                }
//            }, 200);
//        });
        $(this).focus(function(){
            $(this).prev("label.inlined").addClass("focus");
            if($(".time")){
                $(this).addClass("has-text").removeClass("focus");
            }
        });
        $(this).keypress(function() {
            $(this).prev("label.inlined").addClass("has-text").removeClass("focus");
        });
        $(this).blur(function(){
            if($(this).val() == "" && !$("#time")){
                $(this).prev("label.inlined").removeClass("has-text").removeClass("focus");
            }
        });
    });
});
</script>