

<br>
<?php
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE
   tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<style type="text/css"> 
   .content-table{
        border-collapse: collapse;
        margin-left:200px;
        font-size: 0.9rem ;
        min-width: 400px;
        border-radius : 5px 5px 0 0; 
        overflow: hidden ;  
        text-align:center; 
        margin-bottom: 40px;
        margin-top: 15px;
   }
   .content-table thead tr{
        background-color:#e74c3c; 
        color: #ffff; 
        font-weight:bold;
        font-size:16px;
   }
   .content-table th,
   .content-table td {
        padding: 12px 15px;
   }
   .content-table tbody tr{
        border-bottom: 1px solid #dddddd;
   }
   .content-table tbody tr:last-of-type{
        border-bottom: 2px solid #009879; 
   } 
   h2{
     text-align:center; 
     color:#ff4d4d;
   }
</style>

<table class="content-table">
  <h2>Liệt Kê Đơn Hàng</h2>
  <thead>
  <tr>
  	<th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa Chỉ</th>
    <th>Email</th>
    <th>Số Phone</th>
    <th>Tình Trạng</th>
  	<th>Quản Lý</th>
  </tr>
  </thead>

    <?php
    $i = 0;
      while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
    ?>
  <tbody>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td style="color:red;">
    	<?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
    	}else{
    		echo 'Đã xem';
    	}
    	?>
    </td>
   	<td>
   		<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
   	</td>
  </tr>
  </tbody>

  <?php
  } 
  ?>
 
</table>