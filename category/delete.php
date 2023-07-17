<?php
    require_once 'pdo.php';
    $categoryConnection = new CategoryConnection();

    $id = ['id' => $_POST['id']];
    $categoryConnection->deleteData($data);

    header("Location: http://localhost/lean_php/category/index.php");
?>
