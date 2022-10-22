<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = $_POST['password_cu'];
		$matkhau_moi = $_POST['password_moi'];
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<h5 style="color:green;position:absolute;top:16%;left:72%;font-weight:bold;font-size:18px;">Thay đổi mật khẩu thành công!</h5>';
		}else{
			echo '<h5 style="color:red;position:absolute;top:96%;left:55%;font-weight:bold;font-size:18px;">Tài khoản hoặc mật khẩu không chính xác, vui lòng nhập lại!</h5>';
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
    body{
    

        font-family: Arial, Helvetica, sans-serif;
    }
    .center{
        position: absolute; 
        top: 20%;
        left: 55%; 
        transform: translate(-30%; -30%);
        width: 500px; 
        background: white;
        border-radius: 10px;
    }
    .center h1{
        text-align: center; 
        padding: 20px;
        border-bottom: 1px solid silver;
        color:#ff4d4d;
    }
    .center form{
        padding: 0 40px;
        box-sizing: border-box;
    }
    form .txt_field{
        position: relative; 
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
    }
    .txt_field input{
        width:100%;
        padding: 0 5px;
        height: 40px; 
        font-size: 16px; 
        border:none; 
        outline:none;
    }
    .txt_field label{
        position: absolute;
        top: 50%; 
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
    }
    .txt_field span::before{
        content: '';
        position:absolute;
        top:40px;
        left:0;
        width: 100%;
        height:2px;
        background: #d63031;
        transition: .5s
    }
    .txt_field input:focus ~ label,
    .txt_field input:valid ~ label{
        top: -6px;
        color:#d63031;
    }
    .loginkhach input[type="submit"]{
        width: 100%; 
        height: 50px; 
        boder: 1px solid; 
        background: #e17055;
        border-radius: 25px; 
        font-size: 16px;
        color: #e9f4fb;
        font-weight: 400px;
        cursor: pointer; 
        outline: none;
        margin-bottom: 30px;
    }
    </style>
</head>
<body> 
    <div class="center">
            <h1>ĐỔI MẬT KHẨU KHÁCH HÀNG </h1> 
                <form action="" autocomplete="off" method="POST">
                    <div class="txt_field">
                        <input type="text" name="email" require> 
                        <span></span>
                        <label>Tên tài khoản</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="password_cu" require> 
                        <span></span>
                        <label>Mật khẩu cũ</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" name="password_moi" require> 
                        <span></span>
                        <label>Mật khẩu mới</label>
                    </div>
                    
                    <div class="loginkhach">
                    <input class="loginkhach" type="submit" name="doimatkhau" value="Đổi mật khẩu">
                    </div>
                </form>
    </div>
    
</body>
</html>

