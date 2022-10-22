<p style="margin-left: 622px;
          margin-top: 20px;
          color:#ff4d4d;
          margin-bottom: 20px;
          font-size: 19px;
          text-transform: uppercase;
          font-weight:700">Thêm sản phẩm </p>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css"> 
   .content-table{      
        border-collapse: collapse;
        margin-left: 300px; 
        font-size: 0.9rem;
        width: 700px;
        border-radius : 5px 5px 0 0; 
        overflow: hidden ; 
        text-align:center;
   }
   .content-table thead tr{
        background-color:#e74c3c; 
        color: #ffff; 
        font-weight:bold;
        font-size:16px;
   }
   .content-table th,
   .content-table td {
        padding: 14px 17px;
   }
   .content-table tbody tr{
        border: 2px solid #b2bec3;
        
   }
   .content-table tbody tr:last-of-type{
        border-bottom: 2px solid #009879; 
   }
  
</style>
</head>

<body>
  <table class="content-table">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data"> 
      <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensanpham"></td>
      </tr>  
      <tr>
        <td>Mã sản phẩm</td> 
        <td><input type="text" name="masp" id=""></td>
      </tr> 
     <tr>
        <td>Giá sản phẩm</td> 
        <td><input type="text" name="giasp" id=""></td>
      </tr>
      <tr>
        <td>Số lượng</td> 
        <td><input type="text" name="soluong" id=""></td>
      </tr>
      <tr>
        <td>Hình ảnh</td> 
        <td><input type="file" name="hinhanh" id=""></td>
      </tr>
      <tr>
        <td>Tóm tắt</td> 
        <td><textarea name="tomtat" id="" ></textarea></td>
      </tr>
      <tr>
        <td>Nội dung</td> 
        <td><textarea name="noidung" id="" ></textarea></td>
      </tr> 
      <tr>
        <td>Tình trạng</td>
        <td>
          <select name ="tinhtrang"> 
              <option value="1">Kích hoạt</option> 
              <option value="0">Ẩn</option>
          </select>
      </td>
    </tr>
    <tr>
      <td>Danh mục</td>
      <td >
          <select name ="danhmuc"> 
            <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            ?>
              <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option> 
            <?php
            }
            ?>
          </select>
      </td> 
    </tr>
    
    <tr>
      <td><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
    </tr>
    </form>
  </table>
  
</body>
</html>

