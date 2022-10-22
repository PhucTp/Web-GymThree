<?php
  $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
 
 ?>
                   <ul class="subnav">
                   <?php
                     while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"> 
                        <?php echo $row_danhmuc['tendanhmuc'] ?> </a></li> 
                        <!-- <li><a href="">Dầu Cá Omega-3</a></li>
                        <li><a href="">Áo Quần Tập Gym  </a></li> -->
                        <?php
                        } 
                        ?>
                    </ul>
                