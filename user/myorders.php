<?php 
include("l_connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>list_orders</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <body>
    <?php include 'userheader.php' ?>
    <input type="hidden" vlaue="<?php echo $_SESSION['r_id'];?>">
    <div class="table-container">
        <table id="customers">
        <center> <h2 style="font-family:Bookman Old Style">My Orders</h2></center>
        <br>
        
    <thead>
      <tr>
          <th>Order Id</th>
        <th>Franchise</th>
          <th>Date</th>  
        <th>Detail</th>    
        </tr>
    </thead>
    <?php
    $r_id=$_SESSION['r_id'];
        $query = mysqli_query($connection,"select o.o_id AS o_id,r.firmname AS firmname,o.f_id AS f_id,o.date AS date from order_products o JOIN (SELECT  r_id ,firmname FROM register) r ON r.r_id=o.f_id WHERE  o.status='placed' AND r.r_id='$r_id' GROUP BY o.o_id");
        while($row = mysqli_fetch_array($query)) 
		 { 
      $o_id=$row['o_id'];
      $firmname=$row['firmname'];
      $date=$row['date'];
echo"
<tr>
<td>$o_id</td>
<td>$firmname</td>
<td>$date</td>
<td><a href='myorderdetails.php?o_id=$o_id'><button class='btn btn-success'>Details</button></td>
</tr>
";
		
        }
      ?>
       
     
  </table> 
      </div>
  <br>
  <br>
    </body>
</html>
