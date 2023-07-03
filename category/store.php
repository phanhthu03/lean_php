<?php
    require_once 'pdo.php';
    $data = ['name' => $_POST['name']];
    createNewData($data);
    header("Location: http://localhost/lean_php/category/index.php");
?>