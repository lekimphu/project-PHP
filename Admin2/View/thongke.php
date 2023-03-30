 
        <meta charset="UTF-8">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     google.load('visualization', '1.0', {'packages':['corechart']});
     google.setOnLoadCallback(drawVisualization);
     function drawVisualization() {
		 				//thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
            var data = new google.visualization.DataTable();
            var tenhh = new Array();
            var soluongban = new Array();
            var dataten = 0;  
            var slb = 0;
            var rows = new Array();
            <?php
              $hh = new hanghoa();
              $result = $hh->getThongKeMatHang();
              while($set=$result->fetch()){
                $tenhh = $set['tenhh'];
                $soluong = $set['soluong'];
                echo "tenhh.push('".$tenhh."');";
                echo "soluongban.push('".$soluong."');";
              }
            ?>
            for(var i = 0; i < tenhh.length;i++){
              dataten = tenhh[i];
              slb = parseInt(soluongban[i]);
              rows.push([dataten,slb]);
            }
            data.addColumn('string','Tên hàng hoá');
            data.addColumn('number','Số lượng bán');
            data.addRows(rows);
            var options = {
              title:'Thống kê số lượng bán',
              'width':600,
              'height':400,
              'backgroundColor':'#fffffff',
              is3D:true
            };
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data,options);
	 }
                   
    </script>
    
        <div class="thongke">
        <div style=" width:50%;  float: left;"   id="chart_div">Thống Kê</div>
 
      </div>
 
 