<?php 
include ("l_connection.php");
error_reporting(0);
$invoice_id = $_GET['invoice_id'];
$query="SELECT * FROM invoice WHERE id='$invoice_id'";
    $result=$connection->query($query); 
    while($row=$result->fetch_assoc())
 { 
  $bill_date=$row['bill_date'];
  $f_id=$row['f_id'];
  $invoice_amount=$row['amount'];
  $invoice_qty=$row['qty'];
  $invoice_gst=$row['gst'];
 }

 $query="SELECT * FROM register WHERE r_id ='$f_id'";
 $result=$connection->query($query); 
 while($row=$result->fetch_assoc())
{ 
$firmname=$row['firmname'];
$location=$row['location'];
$m_number=$row['m_number'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
 
  <title>Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th,
    td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    .total {
      margin-top: 20px;
      text-align: right;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="header">
      <th>
        <h1>Ladachi Kulfi</h1>
        <h3>PLOT NO 252A/B,SHAHU MARKET YARD,KOLHAPUR</h3>
        <h3>phone no:9022126687</h3>
        <h3>email- admin@papalgroup.com</h3>
      </th>
    </div>
    <hr>
    <th>
      <h4>To:
        <?php echo $firmname ?>
      </h4>
      <h4>Add:
        <?php echo $location ?>
      </h4>
      <h4>Phone no:
        <?php echo $m_number ?>
      </h4>
    </th>
    <p><strong>Invoice Number:</strong>
      <?php echo $invoice_id ?>
    </p>
    <p><strong>Date:</strong>
      <?php echo $bill_date ?>
    </p>

    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>
        <?php
       $query="SELECT * FROM invoice_details WHERE invoice_no='$invoice_id' ";
       $result=$connection->query($query); 
       while($row=$result->fetch_assoc())
    { 
     $f_id=$row['f_id'];
     $date=$row['bill_date'];
     $p_id=$row['p_id'];
     $c_name=$row['c_name'];
     $p_name=$row['p_name'];
     $price=$row['price'];
     $quantity=$row['quantity'];
     $amount=$row['amount'];
     echo"
     <tr>
     <td>$p_name</td>
     <td>$c_name</td>
     <td>$quantity</td>
     <td>$price</td>
     <td>$amount</td>
     </tr>
     ";
    }
    echo"
    <tr>
    <th colspan='2'>Total</th>
    <th> $invoice_qty </th>
    <th></th>
    <th> $invoice_amount </th>
    </tr>
    ";
      ?>

      </tbody>
    </table>

<center>
  <div id="print_div">
    <a href="orders.php"> <button class="btn btn-danger">Other Orders</button></a> <button class="btn btn-success" onclick="print_document()">Print</button>
  </div>
</center>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function print_document(){
     document.getElementById("print_div").style.display="none";
    window.print();
     document.getElementById("print_div").style.display="block";
  }
</script>
</body>

</html>