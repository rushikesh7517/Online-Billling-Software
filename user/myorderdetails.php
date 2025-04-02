<?php 
session_start();
include ("l_connection.php");
error_reporting(0);
$o_id = $_GET['o_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Order Details</title>
     <style>
  #customers{
      font-family:"Trebuchet MS" , Arial,Helvetica ,sans-serif;
      border-collapse:collapse;
      width:100%;
  }
  #customers td,#customers th{
      border: 1px solid black;
      padding: 8px;
  }
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover{background-color: lightgray;}
      
      #customers th{
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: yellow;
      color:black;
  }
  .table-container{
    margin:10px;
    widht:100%;
    overflow-x:auto;
  }
   </style>  
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <body>
    <form action="" method="GET" >
    <?php include 'userheader.php' ?>
    <input type="hidden" vlaue="<?php echo $_SESSION['r_id'];?>">
    
    <div class="table-container">

   
        <table id="customers" class="text-center">
        <center> <h2 style="font-family:Bookman Old Style">Order Details</h2></center>
        <a href="myorders.php" class="btn btn-dark" style="margin-left:80%;">  Back  </a>        <br>
        <br>
        <?php
         $r_id=$_SESSION['r_id'];
    $query="SELECT * FROM order_products WHERE o_id='$o_id' LIMIT 1";
    $result=$connection->query($query); 
    while($row=$result->fetch_assoc())
 { 
  $f_id=$row['f_id'];
  $date=$row['date'];
  $o_id=$row['o_id'];
  

  $query="SELECT * FROM register WHERE r_id ='$f_id'";
    $result=$connection->query($query); 
    while($row=$result->fetch_assoc())
 { 
  $firmname=$row['firmname'];
 }
  echo"<b>Order Id: $o_id  &nbsp; &nbsp; &nbsp; Franchise: $firmname &nbsp; &nbsp; &nbsp; Order Date: $date</b>";
 }
    ?>
        
    <thead>
      <tr>
          <th>Id</th>
        
        <th>Product Id</th>
        <th>Category</th>
        <th>Product</th>
        <th>Price/unit</th>
        <th>Quanity</th>      
        <th>Amount</th>

        

      </tr>
    </thead>
    <br>
    <?php
    $total_qty=$total_amount=0;
        $query="SELECT * FROM order_products WHERE o_id='$o_id'";
        $result=$connection->query($query); 
        while($row=$result->fetch_assoc())
		 { 
      $total_qty+=$row['quantity'];
      $total_amount+=$row['amount'];
		?> 
		  <tr>
		   <td><?php echo $row['id']; ?></td> 		   
		   <td><?php echo $row['p_id']; ?></td> 
		   <td><?php echo $row['c_name']; ?></td>
       <td><?php echo $row['p_name']; ?></td> 
		   <td><?php echo $row['price']; ?></td> 
		   <td><?php echo $row['quantity']; ?></td>
       <td><?php echo $row['amount']; ?></td>
		   
	     </tr> 

      <?php
        }
      ?>       
     <tr>
      <th colspan="5">Total</th>
      <th><?php echo $total_qty ?></th>
      <th><?php echo $total_amount ?></th>
     </tr>

  </table> 
  <br>

  <br>
  
    </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </div>
</html>
