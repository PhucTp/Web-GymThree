<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = $_POST['matkhau'];
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<h5 style="color:green; text-align: right;">Bạn đã đăng ký thành công!</h5>';
			echo '<br>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:index.php?quanly=giohang');
		}
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
        .content-table{      
        border-collapse: collapse;
        margin-left: 300px;
        font-size: 0.9rem ;
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
        border-bottom: 2px solid #b2bec3;
        
   }
   .content-table tbody tr:last-of-type{
        border-bottom: 5px solid #009879; 
   }
   .dangnhaptv{
        background-color: green;
        padding: 6px;
        text-decoration: none;
        color: beige;
        border-radius: 6px;
    }
    input.dangkytv {
        border: none;
        background-color: #EE5A24;
        padding: 10px;
        border-radius: 6px;
        margin-left: 50px;
    }
    p.dangkygym {
        text-align: center;
        margin: 15px;
        font-weight: 700;
        font-size: 20px;
        color:#ff4d4d;
    }
    input{
        border:none;
    }
   
    </style>
</head>
<body>
    <p class="dangkygym">ĐĂNG KÝ THÀNH VIÊN GYM THREE</p>
    <form action=""method="POST">
        <div class="dangky">
            <table class="content-table">
            <thead>
                <tr>
                    <th>Đăng Ký</th>
                    <th>Thành viên</th>
                    <th>GymThree</th>

                   
                </tr> 
            </thead>
                <tr>
                    <td>Email đăng ký</td>
                    <td><input type="text" size="50" name="hovaten"></td>
                </tr>
                <tr>
                    <td>Tên đăng nhập</td>
                    <td><input type="text" size="50" name="email"></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" size="50" name="dienthoai"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" size="50" name="diachi"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="text" size="50" name="matkhau"></td>
                </tr>
                
                
               
                <tr>
                    <td colspan="2"><input class="dangkytv" type="submit" name="dangky" value="Đăng ký"></td>
                    <td><a  class="dangnhaptv" href="index.php?quanly=dangnhap"> Đăng nhập</a></td>
                </tr>
            
            
            </table>
    
    </form>
    
    </div>
    
</body>
</html>