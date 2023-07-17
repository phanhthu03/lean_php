<?php 
    require_once "pdo.php";
    $productConnection = new ProductConnection();
    $data = [
        'prodName' => $_POST['name'],
        'prodPrice' => $_POST['price'],
        'cateId' => $_POST['cateId'],
        'id' => $_GET['id']
    ];
    $productConnection->updateProdData($data);
    header("Location: http://localhost/lean_php/product/index.php");
?>
