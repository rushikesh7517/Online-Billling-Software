<?php 
include ("l_connection.php");
session_start();
if(isset($_POST['confirmorder'])){
$today=date('Y-m-d');
$fid=$_SESSION['r_id'];

$ids=rtrim($_POST['ids'],',');
$qtys=rtrim($_POST['qtys'],',');
$amounts=rtrim($_POST['amounts'],',');
$productnames=$_POST['productnames'];
$categorys=$_POST['categorys'];
$prices=$_POST['prices'];

$total_qty=$_POST['total_qty'];
$total_amount=$_POST['total_amount'];


$id_arr=explode(',',$ids);
$qty_arr=explode(',',$qtys);
$amount_arr=explode(',',$amounts);
$productname_arr=explode(',',$productnames);
$category_arr=explode(',',$categorys);
$price_arr=explode(',',$prices);

$o_id=0;
$query="SELECT o_id FROM order_products ORDER BY id DESC LIMIT 1";
$result=$connection->query($query);
if($result->num_rows>0){
$row=$result->fetch_assoc();
$o_id=$row['o_id'];
}
$o_id++;

foreach($id_arr AS $key=>$id ){
$qty=$qty_arr[$key];
$amount=$amount_arr[$key];
$category=$category_arr[$key];
$productname=$productname_arr[$key];
$price=$price_arr[$key];

$query="INSERT INTO `order_products`(`o_id`, `f_id`, `date`, `p_id`,`c_name`, `p_name`, `price`, `quantity`, `amount`) VALUES ('$o_id','$fid','$today','$id','$category','$productname','$price','$qty','$amount')";
$connection->query($query);

}
}
$conn->close();
?>