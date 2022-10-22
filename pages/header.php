 <!-- HEADER -->
 <?php
  $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
 
 ?> 
 <?php 
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
        
    }
 ?>
        <div id="header"> 
            <!-- Begin nav -->
            <ul id="nav">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?quanly=danhmucsanpham&id">
                            Sản Phẩm
                         <ti class="arrow-down ti-angle-down"></ti>
                    </a>
                <?php 
                include("subnav/subnav.php");
                ?>
                </li>  
               
                <li><a href="index.php?quanly=thuonghieu">Thương hiệu</a></li>
                <li><a href="index.php?quanly=kienthuc">Kiến thức</a></li>
                <li><a href="index.php?quanly=giohang"><i class="ti-shopping-cart"></i></a></li> 
                
                <?php
                        if(isset($_SESSION['dangky'])){
                    ?>
                   <li><a href="index.php?dangxuat=1"><i class="ti-arrow-circle-left"></i></a></li>
                   <li><a href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a></li>

                    <?php
                    }else{
                    ?>
                   <li><a href="index.php?quanly=dangky"><i class="ti-user"></i> </a></li> 
                    <?php
                    } 
                ?> 
                
                 
            </ul> 
            <!-- End nav --> 
            
            <!-- Search icon--> 
                    
            <div class="search-icon">   
                          
                <div class="icon"> 
                <form action="index.php?quanly=timkiem" method="POST">   
                <li>
                    <input style="padding:4px;" type="text" autocomplete="off" name="tukhoa" placeholder="Tìm kiếm sản phẩm.."> 
                    <input style="padding:4px;border: none;color: green;border-radius: 6px;"
                     type="submit" name="timkiem" value="Tìm kiếm">
                </li>
                </form>
                </div>
            </div> 
            
        </div>

        <!-- SLIDER -->
        <div id="slider">
            <div class="text-content"> 
                <h2 class="heading-content">GymThree</h2>
                <p class="desc-content">Shape your perfect body</p> 
                <p class="number-content">CONTACT: 09767.16204 PHUCTP</p>
            </div>
        </div> 