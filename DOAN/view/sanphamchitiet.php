<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>

    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <form action="index.php?action=giohang" method="post">
            <div class="wrapper row">
                    <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->

                    <div class="preview col-md-6">
                        <div class="tab-content">
                           <?php
                            if(isset($_GET['id'])){
                                $id=$_GET['id'];
                                // nhận được id, đem id truyền vào câu truy vấn
                                $hh = new hanghoa();
                                $result = $hh->getHangHoaId($id); // trả về 1 mảng 
                                $mahh = $result['mahh'];
                                $tenhh = $result['tenhh'];
                                $dongia = $result['dongia'];
                                $giamgia = $result['giamgia'];
                                $hinh = $result['hinh'];
                                $mota = $result['mota'];
                                $maloai = $result['maloai'];
                            }
                           ?>

                            <div class="tab-pane active" id=""><img src="./Content/img/<?php echo $hinh;?>" alt="" width="200px" height="350px">
                            </div>
                           
                        </div> <br>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php
                                $result = $hh->getHangHoaNhomColor($maloai);
                                while($set = $result->fetch()):
                            ?>
                            <li class="active"><a href="#<?php echo $hinh; ?>" data-toggle="tab">
                                        <img src="<?php echo 'Content/img/'. $hinh; ?>" alt=""></a>
                                </li>
                            <?php endwhile;?>
                        </ul>
                        <br>
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $mahh;?>" />
                        <h3 class="product-title text-primary"><?php echo $tenhh?> </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota?>
                        </p>
                        <h4 class="price">Giá bán: 
                            <?php 
                                if($giamgia != null){
                                    echo $giamgia;
                                }else{
                                    echo $dongia;
                                }
                            ?> 
                            đ
                        </h4>

                        <h5 class="colors">Màu:
                            <select name="mymausac" class="form-control" style="width:150px;">
                               <?php
                                $result = $hh->getHangHoaNhomColor($maloai);
                                while($set = $result->fetch()):
                               ?>
                               <option value="<?php echo $set["mausac"];?>"><?php echo $set["mausac"]?></option>
                               <?php endwhile;?>
                            </select><br>
                           
                            Kích Thước:
                            <input type="hidden" name="size" id="size" value="0" />
                            <?php
                                $result = $hh->getHangHoaNhomSize($maloai);
                                while($set = $result->fetch()):
                                    ?>
                            <button type="button"
                            onclick="chonsize('<?php echo $set['size'];?>')"                              
                                name="<?php echo $set['size']; ?>"
                                 class="btn btn-default-hong btn-circle" id="size" 
                                 value="<?php echo $set['size']; ?>">
                                <?php echo $set['size']; ?>
                                </button>
                            <?php endwhile;?>
                            
                            <br> <br>
                            Số Lượng: 

                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />

                            
                        </h5>
                        
                        <div class="action">
                            <button class="add-to-cart btn btn-default btn-danger mt-2" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY
                            </button>
                            <a href="index.php?action=like&act=like_act&id=<?php echo $mahh?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-bag-heart-fill mt-1 text-danger" viewBox="0 0 16 16">
                                    <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
        <!-- </div> -->
    </article>

    <?php
    if(isset($_SESSION['makh'])):
?>
<section>
        <div class="col-12">
 
            <div class="row">
                    <?php
                        if(isset($_GET['id']))
                        {
                            $mahh=$_GET['id'];
                            $usr=new user();
                            $tong=$usr->Tongcomment($mahh);
                        }
                    ?>
                <p class="float-left"><b>BÌnh luận<?php echo $tong;?> </b></p>
                <hr>
            </div>
            <div class="container">
            <form action="index.php?action=sanpham&act=comment&id=<?php echo $_GET['id'];?>" method="post">
            <div class="row">
              
                    <div class="col-lg-1">
                    <input type="hidden" name="txtmahh" value="" />
                    <img src="./content/img/people.png" width="50px" height="50px"; />
                    <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                    <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
                    </div>
                                
            </div>
            
            </form>
            </div>
            
            <div class="container-fluid">
            <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <hr>
            </div>
            <div class="row">
            <div class="col-lg-4">
            <?php
                $result = $usr->HienThicomment($mahh);
                
                    while ($set = $result->fetch()) :
                        ?>
                       
                        <div class="col-12">
                            <div class="row">
                            <img src="./content/img/people.png" width="50px" height="50px" style="width: 20%;height: 20%;" />
                            <p><?php echo '<b>'.$set['username'].': </b>'.$set['noidung']; ?></p><br>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        ?>
               <br/>
            </div>
            </div>
            </div>
        </div>
    </section>
    <?php
        endif;
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

