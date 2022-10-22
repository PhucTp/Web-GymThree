            <!-- Sản phẩm Áo -->
<?php
        $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc ='$_GET[id]'
            ORDER BY id_sanpham DESC";
            $query_pro = mysqli_query($mysqli,$sql_pro);
            //get ten danh muc 
            $sql_cate ="SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
            $query_cate = mysqli_query($mysqli,$sql_cate);
            $row_title = mysqli_fetch_array($query_cate);
      

?>   
          <div class="menu-section">
                <div class="menu-list"> 
                <?php 
                    while($row_pro = mysqli_fetch_array($query_pro)){
                    ?>  
                        <div class="menu-items">     
                        <h2 class="menu-name"> <a href=" index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>   "><?php echo $row_title['tendanhmuc'] ?></a></h2> 
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" class="menu-img">
                            <div class="menu-body">
                                <h2 class="menu-heading"> <a href=" index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>     ">sản phẩm  <?php echo $row_pro['tensanpham'] ?></a></h2>  
                                <p class="menu-price ">Giá: <?php echo number_format($row_pro['giasp'],0,',','.'). 'vnđ' ?></p>
                                <p class="menu-text"> <?php echo $row_pro['tomtat'] ?></p>
                                <p class="menu-size"><?php echo $row_pro['noidung'] ?></p> 

                                <p class="menu-size">Size M: Dành cho các bạn có bắp tay dưới 34cm. Nặng từ 50kg – 65 kg</p> 
                                <p class="menu-size-2">Size L: Dành cho các bạn có bắp tay dưới 37cm. Nặng từ 65kg – 78kg</p> 
                            </div>   
                        </div> 
                    <?php
                    }
                    ?>
                   <!--  --> 
                        
                   

                    <!--  --> 
                  
                   <!--  --> 
                 
                   <div class="clear"></div>
                   
                </div>
                
            </div>


            <!-- Whey --> 
           
            </div>