
<?php
  if(isset($_SESSION['dangky'])){
    echo 'xinchao:'.'<span style="color:orange;">'.$_SESSION['dangky'].'</span>';
  }
?>
<?php  
    if(isset($_SESSION['cart'])){ 
       
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title> 
    <style type="text/css">
      h1{
        text-align: center;
        margin-top: 20px;
        color: #ff4d4d;
      }
      .content-table3{
        margin-top:15px; 
        background-color:#ffb8b8;
      }
    </style>

</head>
<body>
<h1>Giỏ hàng</h1> 
  <table class="content-table3" style="width:100%;text-align:center;border-collapse:collapse;color:#3d3d3d;" border="1">
    <tr>
      <th>ID</th> 
      <th>Mã sản phẩm</th>
      <th>Tên sản phẩm</th>
      <th>Hình ảnh</th> 
      <th>Số lượng</th> 
      <th>Giá</th>
      <th>Thành tiền</th>
      <th>Quản lý</th>
    </tr>
    <?php
      if(isset($_SESSION['cart'])){
          $i=0; 
          $tongtien =0;
          foreach($_SESSION['cart'] as $cart_item){
              $thanhtien= $cart_item['soluong'] * $cart_item['giasp'];
              $tongtien +=$thanhtien;
              $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $cart_item['masp']; ?></td>
      <td><?php echo $cart_item['tensanpham'];  ?></td>
      <td><img style="width:200px;" src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"></td>
      <td>
        <a style="text-decoration:none;" href="pages/content/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i style="margin-right:12px;padding:8px;background-color:green;color:#000;" class="ti-plus"></i></a>
        <?php echo $cart_item['soluong']; ?>
        <a style="text-decoration:none;" href="pages/content/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i style="margin-left:12px;padding:8px;background-color:red;color:#fff;"class="ti-minus"></i></a>
      </td>
      <td><?php echo number_format( $cart_item['giasp'],0,',','.').'vnđ'; ?></td>
      <td><?php echo number_format( $thanhtien,0,',','.').'vnđ'; ?></td> 
      <td><a href="pages/content/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
  
    </tr>
    <?php
          }
    ?>
        <tr>
          <td style="padding:10px;" colspan="8">
          <p style="float:left;font-weight:700;font-size:20px;">TỔNG TIỀN:<?php echo number_format( $tongtien,0,',','.').'vnđ'; ?> </p> 
          <p style="float:right;"><a href="pages/content/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
          <div style="clear:both;"></div> 
          <?php
            if(isset($_SESSION['dangky'])){
              ?>
                <p><a style="text-decoration:none;font-size:20px;padding:4px;
                background-color:#3c40c6;color:#1e272e;" href="pages/content/thanhtoan.php"><i class="ti-check"></i></a></p>
  
            <?php
            }else{
              ?>
                <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p> 
            <?php
            }
          ?>
         
      
        </td>
  
        </tr>
    <?php
      }else{
    ?>
      <tr>
      <td colspan="8"><p>Hiện tại giỏi hàng trống</p></td>
    </tr>
    <?php
      }
    ?>
  
  </table>
</body>
</html>

