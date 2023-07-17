<?php
    require_once 'pdo.php';
    $categoryConnection = new CategoryConnection();

    $id = ['id' => $_GET['id']];
    $name = $_POST['name'];
    $data = [
        'id' => $id['id'],
        'name' => $name
    ];
    $categoryConnection->updateData($data);
    header("Location: http://localhost/lean_php/category/index.php");
?>
