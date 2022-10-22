<?php 
   if(isset($_POST['timkiem'])){
      $tukhoa = $_POST['tukhoa'];
   }
   $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND 
   tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'"; 
   $query_pro = mysqli_query($mysqli,$sql_pro); 

?>
<h3 class="spnew">Từ khóa tìm kiếm :<?php echo $_POST['tukhoa']; ?>"</h3>
            <div class="menu-list"> 
                <?php 
                    while($row = mysqli_fetch_array($query_pro)){
                    ?>  
                     <div class="menu-items">     
                        <h2 class="menu-name"> <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"></a></h2> 
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" class="menu-img">
                            <div class="menu-body">
                                <h2 class="menu-heading"> <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?> ">  <?php echo $row['tensanpham'] ?></a></h2>  
                                <p class="menu-price ">Giá: <?php echo number_format($row['giasp'],0,',','.'). 'vnđ' ?></p>
                                <p class="menu-text"> <?php echo $row['tomtat'] ?></p>
                                <p class="menu-size">Size M: Dành cho các bạn có bắp tay dưới 34cm. Nặng từ 50kg – 65 kg</p> 
                                <p class="menu-size-2">Size L: Dành cho các bạn có bắp tay dưới 37cm. Nặng từ 65kg – 78kg</p> 
                            </div>   
                     </div> 
                    <?php
                    }
                    ?>
               </div> 
               <div class="clear"></div>
    