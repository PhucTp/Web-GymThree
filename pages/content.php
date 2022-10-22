        <div id="content">   
            <?php 
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly']; 
                }else{
                    $tam = '';
                }
                if($tam=='danhmucsanpham'){
                    include("content/danhmuc.php");
                }elseif($tam=='thuonghieu'){ 
                    include("content/thuonghieu.php");
                }elseif($tam=='kienthuc'){
                    include("content/kienthuc.php");
                }elseif($tam=='sanpham'){
                    include("content/sanpham.php");
                }elseif($tam=='giohang'){
                    include("content/giohang.php");
                }elseif($tam=='dangky'){
                    include("content/dangky.php");
                }elseif($tam=='thanhtoan'){
                    include("content/thanhtoan.php"); 
                }elseif($tam=='dangnhap'){
                    include("content/dangnhap.php");   
                }elseif($tam=='timkiem'){
                    include("content/timkiem.php");    
                }elseif($tam=='camon'){
                    include("content/camon.php");  
                }elseif($tam=='thaydoimatkhau'){
                    include("content/thaydoimatkhau.php");     
               
                }else{
                    include('content/index.php');
                }
            ?>

        </div>