<?php
    $act="hoadon";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case "hoadon":
            include "./View/hoadon.php";
            break;
        case "capnhat":
            include "./View/edithoadon.php";
            break;
        case "capnhat_action":
            if(isset($_GET['id'])){
                // $masohd = $_GET['id'],
                $ngaydat = $_POST['ngaydat'];
                $tongtien = $_POST['tongtien'];
                $hd = new hoadon();
                $hd->updateHoadon($_GET['id'],$ngaydat,$tongtien);
                if($checkInsert !== false){
                    echo "<script>alert('CẬP NHẬT THÀNH CÔNG!!')</script>"; 
                    include "./view/hoadon.php";
                }else{
                    echo "<script>alert('CẬP NHẬT không THÀNH CÔNG!!')</script>"; 
                }
            }
            break;
        case 'xoa':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $hh = new hoadon();
                $hh->deletesp($id);
                echo "<script>alert('XÓA THÀNH CÔNG!!')</script>"; 
                include "./View/hoadon.php"; 
            }
            break;

}

?>