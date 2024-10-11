<?php
session_start();
require('conn.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM products_cart WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if($result){
        header('Location: product_cart.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
