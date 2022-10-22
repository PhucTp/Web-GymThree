<?php
    session_start();
    include('config/config.php'); 
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username']; 
        $matkhau = md5($_POST['password']); 
        $sql="SELECT *FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1 ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan; 
            header("Location:index.php");
        }else{ 
            echo '<script>  ("Tài khoản hoặc mật khẩu không đúng.")</script>';
            header("Location:login.php");

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <style type="text/css"> 
    body{
        padding:0; 
        margin:0; 
        background: #fab1a0;
        height:100vh;
        overflow: hidden; 
        font-family: Arial, Helvetica, sans-serif;
    }
    .center{
        position: absolute; 
        top: 20%;
        left: 36%; 
        transform: translate(-30%; -30%);
        width: 400px; 
        background: white;
        border-radius: 10px;
    }
    .center h1{
        text-align: center; 
        padding: 0 0 20px 0;
        border-bottom: 1px solid silver;
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
    input[type="submit"]{
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
        <h1>ADMIN GYMTHREE</h1> 
        <form action="" autocomplete="off" method="POST">
         <div class="txt_field">
            <input type="text" name="username" require> 
            <span></span>
            <label>Tên đăng nhập</label>
         </div>
         <div class="txt_field">
            <input type="password" name="password" require> 
            <span></span>
            <label>Mật khẩu</label>
         </div>
         <input type="submit" name="dangnhap" value="Đăng nhập">

        </form>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
