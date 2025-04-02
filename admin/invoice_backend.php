<?php 
include ("l_connection.php");
error_reporting(0);
$o_id = $_GET['o_id'];

$total_qty=$total_amount=0;
$query="SELECT * FROM order_products WHERE o_id='$o_id' ";
    $result=$connection->query($query); 
    while($row=$result->fetch_assoc())
 { 
  $f_id=$row['f_id'];
  $date=$row['date'];
  $o_id=$row['o_id'];
  $p_id=$row['p_id'];
  $c_name=$row['c_name'];
  $p_name=$row['p_name'];
  $price=$row['price'];
  $quantity=$row['quantity'];
  $amount=$row['amount'];

$total_qty+=$row['quantity'];
$total_amount+=$row['amount'];
}

$query="INSERT INTO `invoice`(`bill_date`, `f_id`, `amount`, `qty`) VALUES ('$date','$f_id','$total_amount','$total_qty')";
$connection->query($query);
$query="SELECT id FROM invoice ORDER BY id DESC LIMIT 1 ";
    $result=$connection->query($query); 
    while($row=$result->fetch_assoc())
 { 
  $invoice_no=$row['id'];
 }

 $query="SELECT * FROM order_products WHERE o_id='$o_id' ";
    $result=$connection->query($query); 
    while($row=$result->fetch_assoc())
 { 
  $f_id=$row['f_id'];
  $date=$row['date'];
  $o_id=$row['o_id'];
  $p_id=$row['p_id'];
  $c_name=$row['c_name'];
  $p_name=$row['p_name'];
  $price=$row['price'];
  $quantity=$row['quantity'];
  $amount=$row['amount'];

$query_update="UPDATE addproduct SET txt_quantity=txt_quantity-$quantity WHERE p_id='$p_id'";
$connection->query($query_update);

$query1="INSERT INTO `invoice_details`(`invoice_no`, `f_id`, `bill_date`, `p_id`, `p_name`, `c_name`, `price`, `quantity`, `amount`) VALUES ('$invoice_no','$f_id','$date','$p_id','$p_name','$c_name','$price','$quantity','$amount')";
$connection->query($query1);
}

$query="UPDATE order_products SET status='Completed' WHERE o_id='$o_id'";
$connection->query($query);
?>
<script>
    let url="invoice.php?invoice_id="+<?php echo $invoice_no ?>;
    window.location.replace(url);
</script>