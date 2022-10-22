<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC"; 
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<style type="text/css"> 
   .content-table{      
        border-collapse: collapse;
        margin: 20px 0; 
        font-size: 0.9rem ;
        width: 700px;
        border-radius : 5px 5px 0 0; 
        overflow: hidden ; 
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
        border-bottom: 2px solid #009879; 
   }
   .btn-xoa{
        background-color: #c0392b;
        padding: 4px;
        text-decoration: none;
        color: #ecf0f1;
        border-radius: 5px;
   }
   .btn-sua{
        background-color: #2ecc71;
        padding: 4px;
        text-decoration: none;
        color: #ecf0f1;
        border-radius: 5px;
   }
   .themdm{
    color: #ff7675;
    font-weight: bold;
   }
</style>
<div class="lietkedanhmuc">
<p class="themdm">Danh mục<br>Liệt kê</p> 
    <table class="content-table"> 
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
           <th>Quản lý</th>
        </tr> 
        </thead>
        <tbody>
        <?php 
        $i = 0; 
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){ 
            $i ++;
        ?>
       
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td> 
            <td>
                    <a class="btn-xoa" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa SP</a> |
                    <a class="btn-sua" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa SP</a>
            </td>
        </tr>
        
        <?php
        }
        ?>
        </tbody>
        
    </table>
</div>