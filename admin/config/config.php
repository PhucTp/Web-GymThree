<?php
    $mysqli = new mysqli("localhost","root","","webgymthree");

    // Check connection
    if ($mysqli->connect_errno) {
      echo "Kết nối lỗi: " . $mysqli -> connect_error;
      exit();
    }
?>