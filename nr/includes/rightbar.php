        <!-- Right Sidebar -->
<script type="text/javascript">
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

      google.load("visualization", "1", {packages:["imagechart"]});
      google.setOnLoadCallback(onLoadCallback);

    </script>
        <div class="box charts" id="toprightbar">
            <h2><img src="css/glyphs/bar-chart.png" class="glyph large"/>Charts<img src="css/glyphs/line-chart.png" class="glyph large"/></h2>


            <p>Percent of Captured Market</p>
            <img src="http://chart.apis.google.com/chart?chs=200x100&cht=gm&chco=000000,B22B2B|BFFABF&chd=s:p" width="245" height="125" alt="" />
            <p>Percent of Square feet per body</p>
            <img src="http://chart.apis.google.com/chart?chs=300x225&cht=p&chco=ECAC9D|B22B2B|2E8C2E|BFFABF&chd=s:Uf9a&chdl=30%C2%B0|40%C2%B0|50%C2%B0|60%C2%B0" width="245" height="185" alt="" />    
            <p>Population Density by percent of club attendance</p>
            <img src="http://chart.apis.google.com/chart?chxr=0,0,46&chxt=y&chs=245x220&cht=s&chco=B22B2B&chd=s:WNHD_____AELRYglnnjh,ROOSXYaYcddhnnnqplkm&chg=14.3,-1,1,1&chm=B,C5D4B5BB,0,0,0" width="245" height="220" alt="" />
            <p>Comparison to Competitors</p>
            <img src="http://chart.apis.google.com/chart?chs=300x225&cht=v&chco=ECAC9D,B22B2B,2E8C2E&chd=t:100,80,60,30,30,30,10&chdl=A|B|C" width="245" height="225" alt="" />


            <p>Competitors Frequency</p>
            <div class="block" id="chart"></div>

        </div>
