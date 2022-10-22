 <p style="color:#ff4757; font-size:26px; margin:24px; font-weight:700;text-align:center; ">CHI TIẾT SẢN PHẨM </p> 
 <?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham
    = '$_GET[id]' LIMIT 1"; 
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet); 
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
 ?>
    

    <div class="wrapper_chitiet">
        <div class="hinhanh_sp">
            <img src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
        </div>  
        <form method="POST" action="pages/content/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
        <div class="chitiet_sp ">
            <h3>TÊN SẢN PHẨM: <?php echo $row_chitiet['tensanpham'] ?></h3>  
            <p style="margin-top:15px;font-weight:700;font-size:18px;">Mã sản phẩm <?php echo $row_chitiet['masp'] ?></p>
            <p style="margin-top:15px;font-weight:700;font-size:18px;">Giá sản phẩm: <?php echo number_format ($row_chitiet['giasp'],0,',','.').'vnđ' ?></p> 
            <p style="margin-top:15px;font-weight:700;font-size:18px;">Số lượng sản phẩm: <?php echo $row_chitiet['soluong'] ?></p> 
            <p style="margin-top:15px;font-weight:700;font-size:18px;">Danh mục sản phẩm:<?php echo $row_chitiet['tendanhmuc'] ?></p>
            <p style="margin-top:15px;font-weight:700;font-size:18px;"> <?php echo $row_chitiet['tomtat'] ?> </p> 
            <p style="margin-top:15px;font-weight:700;font-size:18px;"><?php echo $row_chitiet['noidung'] ?></p> 
            <p style="margin-top:15px;font-weight:700;font-size:18px;"><input class="addtocart"  name="themgiohang" type="submit" value="THÊM GIỎ HÀNG"></p>
        </div>
        </form>
        <div class="clear"></div>
    </div> 
    
<?php
    }
?>