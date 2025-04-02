<?php 
include("l_connection.php");

if(isset($_POST['add_product'])){
    $pid=$_POST['id'];
    $qty=$_POST['qty'];

    $query="UPDATE addproduct SET txt_quantity=txt_quantity+$qty WHERE p_id ='$pid'";
    $connection->query($query);
}

if(isset($_POST['remove_product'])){
    $pid=$_POST['id'];
    $qty=$_POST['qty'];

    $query="UPDATE addproduct SET txt_quantity=txt_quantity-$qty WHERE p_id ='$pid'";
    $connection->query($query);
}
?>