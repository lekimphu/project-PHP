<meta charset="UTF-8">
        <div class="card mt-3">
          <div class="card-header info">
            THỐNG KÊ
          </div>
          <div class="card-body">
            <div class="list-group">
            <a href="index.php?action=thongke" class="list-group-item list-group-item-action">Tất cả</a>
              <a href="index.php?action=thongkeDay" class="list-group-item list-group-item-action">Tùy chọn</a>
            </div>
            <div class="thongke">

        <div class="pt-5">
          <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
          <span>Thống Kê Từ</span><input type="date" name="day" id=""> đến nay <button type="submit">Submit</button>
        </form>
        </div>
        <div style=" width:100%;"   id="chart_div">Thống Kê</div>
        </div>
        </div>
        </div>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     google.load('visualization', '1.0', {'packages':['corechart']});
    //  google.setOnLoadCallback(drawVisualization);
    google.setOnLoadCallback(function() {
      drawVisualization(<?php if(isset($nam) && isset($thang) && isset($ngay)) echo $nam . ',' . $thang . ',' . $ngay; ?>);
     });
          function drawVisualization(nam = null,thang = null,ngay = null) {
		 				//thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
            // b1: tạo bảng dữ liệu 
            var data=new google.visualization.DataTable();
            var tenhh=new Array();
            var soluongban=new Array();
            var dataten=0;
            var slb=0;
            var rows=new Array();
            // + lấy dòng từ database 
            <?php
            $hh = new hanghoa();
            if(isset($nam) && isset($thang) && isset($ngay)){
              $result = $hh->thongkeDay($nam, $thang, $ngay);
            }else{
              $result = $hh->thongkeDay();
            }            
            while($set=$result->fetch()){
              $tenhh=$set['tenhh'];//Hồng trà chanh 
              $soluong=$set['soluong'];//7
              echo "tenhh.push('".$tenhh."');";
              echo "soluongban.push('".$soluong."');";
            }
            
            ?>
            // + sau đó thực hiện tạo ra dòng 
            for(var i=0;i<tenhh.length;i++){
              dataten=tenhh[i];//Hồng trà chanh
              slb=parseInt(soluongban[i]);//7
              rows.push([dataten,slb]);
            }
            // + tạo ra cột 
            data.addColumn('string','Tên hàng hóa');
            data.addColumn('number','Số lượng bán');
            data.addRows(rows);
            // b2: tạo những option 
            var option={
              title:'Thống kê số lượng bán',
              'width':600,
              'height':400,
              'backgroundColor':'#fffff',
is3D:true //chỉ hỗ trợ 3D cho PieChart
            };
            // b3: tiến hành vẽ khi có đủ data table và option
            //PieChart , ColumnChart,LineChart,BarChart
            var chart=new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data,option);
	 }
                   
    </script>
        <!-- <div class="thongke">
        <div style=" width:50%;  float: left;"   id="chart_div">Thống kê</div>

      </div> -->