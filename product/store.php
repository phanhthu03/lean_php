<?php
    require_once 'pdo.php';
    require_once "../category/pdo.php";
    $productConnection = new ProductConnection();

    $data = [
        'prodId' => '',
        'prodName' => $_POST['name'],
        'prodPrice' => $_POST['price'],
        'cateId' => $_POST['cateId']
    ];
    $productConnection->createNewProdData($data);
    header("Location: http://localhost/lean_php/product/index.php");
?>
