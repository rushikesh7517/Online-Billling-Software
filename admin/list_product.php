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
    
    overflow-x:auto;
  }
   </style>  
  </head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <body>
    <?php include 'adminheader.php' ?>
    <div class="table-container">
        <table id="customers">
        <center> <h2 style="font-family:Bookman Old Style;">Products</h2></center>
        
        <form>
                           <div class="row">
              <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <br>
                           <input type="text" name="search" placeholder="Search Product...." class="form-control" style="border-radius:12px;">
                        </div>
              <div class="col-sm-7">
                  <br>
            <input type="submit"name="btn_save" value="Search"class="btn btn-success btn-fill"> &nbsp &nbsp &nbsp;
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
            <a href="addproduct.php" class="btn btn-success">Add Product</a>
              </div>
                </div>
            </form>
  
    <br>
    <thead>
      <tr>
          <th>Product Id</th>
        <th>Category Name</th>
          <th>Product Name</th>
        <th>Image</th>
        <th>Price/unit</th>
        <th>GST(%)</th>
        <th>Total Amount</th>  
        <th>Available Quantity</th>
        <th>Edit</th>    
        </tr>
    </thead>
    <?php
        @$search=$_GET['search'];
      
        if ($search===""){ 
        $query = mysqli_query($connection,"select * from addproduct");
        }
        else{
                 $query = mysqli_query ($connection,"SELECT * FROM addproduct 
                 WHERE p_id LIKE '%$search%' 
                 OR txt_category LIKE '%$search%'
                 OR txt_productname LIKE '%$search%'");
        }
        while($row = mysqli_fetch_array($query)) 
		 { 
      
		?> 
		  <tr>
		   <td><?php echo $row['p_id']; ?></td> 
		   <td><?php echo $row['txt_category']; ?></td> 
		   <td><?php echo $row['txt_productname']; ?></td>
		   <td><?php echo "<img src='images/".$row['txt_image']."' class='img-thumbnail' style='max-width: 80px; max-height: 50px;'>"; ?></td> 
		   <td><?php echo $row['txt_price']; ?></td>
       <td><?php echo $row['txt_gst']; ?></td> 
		   <td><?php echo $row['txt_total']; ?></td>
       <td><?php echo $row['txt_quantity']; ?></td> 
       <td><a href="edit_product.php?p_id=<?php echo $row['p_id'] ?>"><input type="button" value="Edit" class=" btn btn-success btn-fill"></a><b></b></td>
	     </tr> 

      <?php
        }
      ?>
       
     
  </table> 
  <br>
  <br>
  </div>
  <br>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
