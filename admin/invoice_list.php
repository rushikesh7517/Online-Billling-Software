<?php 
include("l_connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>list_product</title>
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
    <?php include 'adminheader.php' ?>
   
        <center> <h2 style="font-family:Bookman Old Style;color:black;">Report</h2></center>
        
            <br>
            <form action="" method="POST">
  <div class="row">
    <div class="col-lg-4">
        <input type="date" class="form-control" name="from_date" required>
    </div>
    <div class="col-lg-4">
        <input type="date" class="form-control" name="to_date" required>
    </div>
    <div class="col-lg-4">
        <input type="submit" class="btn btn-success" name="search" value="Search" required>
    </div>
  </div>
  </form>  
  <?php
 if(isset($_POST['search'])){
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $i=0;
    $query="SELECT i.bill_date AS bill_date, i.id AS invoice_no, i.f_id AS f_id, i.amount AS amount,r.firmname AS firmname FROM invoice i JOIN (SELECT r_id,firmname FROM register) r ON r.r_id=i.f_id WHERE i.bill_date BETWEEN '$from_date' AND '$to_date'";
    $result=$connection->query($query);
    if($result->num_rows>0){
echo '<br>
<center><h3>From '.$from_date.' To '.$to_date.'</h3></center>
<div class="table-container">
        <table id="customers">
    <thead>
      <tr>
          <th>Sr No.</th>
        <th>Invoice No.</th>
          <th>Franchise</th>
        <th>Bill Amount</th>
        <th>Bill Date</th>   
        <th>Invoice</th>    
      </tr>
    </thead>
    <tbody>
';
while($row=$result->fetch_assoc()){
    $invoice_no=$row['invoice_no'];
    $f_id=$row['f_id'];
    $bill_date=$row['bill_date'];
    $amount=$row['amount'];
    $firmname=$row['firmname'];
    $i++;
    echo"
    <tr>
    <td>$i</td>
    <td>$invoice_no</td>
    <td>$firmname</td>
    <td>$amount</td>
    <td>$bill_date</td>
    <td><a href='invoice_duplicate.php?invoice_id=$invoice_no'>Invoice</a></td>
    </tr>
    ";

}
    }
}
  ?>
  
   
  <br>
  <br>

    </body>
</html>
