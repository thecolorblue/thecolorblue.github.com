<script language="javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="js/flowplayer-3.2.4.min.js"></script>
<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["imagechart"]});

      var queryString = '';
      var dataUrl = '';

      function onLoadCallback() {
        if (dataUrl.length > 0) {
          var query = new google.visualization.Query(dataUrl);
          query.setQuery(queryString);
          query.send(handleQueryResponse);
        } else {
          var dataTable = new google.visualization.DataTable();
          dataTable.addRows(7);
          dataTable.addColumn('number');
          dataTable.addColumn('number');
          dataTable.setValue(0, 0, 10);
          dataTable.setValue(0, 1, 50);
          dataTable.setValue(1, 0, 50);
          dataTable.setValue(1, 1, 60);
          dataTable.setValue(2, 0, 60);
          dataTable.setValue(2, 1, 100);
          dataTable.setValue(3, 0, 80);
          dataTable.setValue(3, 1, 40);
          dataTable.setValue(4, 0, 40);
          dataTable.setValue(4, 1, 20);
          dataTable.setValue(5, 0, 60);
          dataTable.setValue(5, 1, 40);
          dataTable.setValue(6, 0, 30);
          dataTable.setValue(6, 1, 30);
          draw(dataTable);
        }
      }

      function draw(dataTable) {
        var vis = new google.visualization.ImageChart(document.getElementById('chart'));
        var options = {
          chxl: '',
          chxp: '',
          chxr: '',
          chxs: '',
          chxtc: '',
          chxt: 'y',
          chbh: 'a',
          chs: '245x225',
          cht: 'bvg',
          chco: '10006E,73C9DE',
          chd: 't:10,50,60,80,40,60,30|50,60,100,40,20,40,30',
          chdl: '|',
          chtt: 'Fans Chart'
        };
        vis.draw(dataTable, options);
      }
      function handleQueryResponse(response) {
        if (response.isError()) {
          alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
          return;
        }
        draw(response.getDataTable());
      }
      google.setOnLoadCallback(onLoadCallback);
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
/**
 *  DJ datepicker
 *    when a date is selected it looks in #listevents 
 *    for all events with that date as the li title
 *
 */
$(document).ready(function () {
  $('#datepicker').datepicker({
    onSelect: function(dateText, inst){
      var edate = "";
      $.each($('#listevents li'), function(index){
        edate = $(this).attr('title');
        if(edate == dateText){
          return true;
        }
        else {
          $(this).hide();
        }
      });
    }
  });
  $('.djtop').tabify();
  $(":range").rangeinput();
});
</script>