<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc
    ORDER BY id_sanpham DESC"; 
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <style type="text/css">
        .content-table2{
            margin-top: 20px;
            text-align:center;
            border: 2px solid #black;
        }
        .content-table2 tr th{
            padding:20px; 
        }
        .content-table2 tr td{
            padding:2px; 
        }
        .btn-xoa{
            background-color: #c0392b;
            padding: 3px;
            text-decoration: none;
            color: #ecf0f1;
            border-radius: 5px;
        }
        .btn-sua{
            background-color: #2ecc71;
            padding: 3px;
            text-decoration: none;
            color: #ecf0f1;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <table class="content-table2" style="width:100%;text-align:center;border-collapse:collapse;color:#3d3d3d;" border="1">
        <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th> 
            <th>Hình ảnh </th>
            <th >Giá Sản Phẩm</th>
            <th>Số Lượng </th> 
            <th>Danh Mục</th>
            <th>Mã Sản Phẩm</th>
            <th>Tóm Tắt</th>
            <th>Tình Trạng</th> 
            <th>Quản Lý</th>
        </tr> 
        
        <?php 
        $i = 0; 
        while($row = mysqli_fetch_array($query_lietke_sp)){ 
            $i ++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensanpham'] ?></td> 
            <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td> 
            <td><?php echo $row['giasp'] ?></td> 
            <td><?php echo $row['soluong'] ?></td>   
            <td><?php echo $row['tendanhmuc'] ?></td>   
            <td><?php echo $row['masp'] ?></td> 
            <td><?php echo $row['tomtat'] ?></td> 
            <td><?php  if($row['tinhtrang'] ==1) {
                echo'Kích hoạt';
            }else{
                echo'Ẩn';
            }  
            ?>
            </td>  
            
    
            <td>
                <a class="btn-xoa" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | 
                <a class="btn-sua" href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    
</body>
</html>

