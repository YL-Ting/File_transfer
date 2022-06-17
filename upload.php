<?php
    $file = $_FILES['Upfile'];
    move_uploaded_file($file['tmp_name'],$file['name']);
    echo "upload success"
?>