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
    <div class="table-container">
        <table id="customers">
        <center> <h2 style="font-family:Bookman Old Style;color:black;">Update Product Qty</h2></center>
        
            <br>
  
        
    <thead>
      <tr>
          <th>Product Id</th>
        <th>Category Name</th>
          <th>Product Name</th>
        <th>Image</th>
        <th>Available Quantity</th>   
        <th>Add / Remove Qty</th>
        <th>Operations</th>    
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
            $pid=$row['p_id'];
		?>
		  <tr>
		   <td><?php echo $row['p_id']; ?></td> 
		   <td><?php echo $row['txt_category']; ?></td> 
		   <td><?php echo $row['txt_productname']; ?></td>
		   <td><?php echo "<img src='../admin/images/".$row['txt_image']."' class='img-thumbnail' style='max-width: 80px; max-height: 50px;'>"; ?></td> 
       <td><?php echo $row['txt_quantity']; ?></td>
       <td><input class="form-control" type="number" id="input<?php echo $pid ?>"></td>
       <td><button class="btn btn-info" onclick="add_product('<?php echo $pid ?>')">Add</button> <button class="btn btn-success" onclick="remove_product('<?php echo $pid ?>')">Remove</button></td>
	     </tr> 

      <?php
        }
      ?>
       
     
  </table> 
      </div>
  <br>
  <br>

  <script>
    function add_product(id){
      let add_product="add_product";
      let input_id="input"+id;
      let qty=document.getElementById(input_id).value;
      if(qty>0){
      $.ajax({
      url:"product_qty_update_backend.php",
      type:"POST",
      data:{
        add_product:add_product,
        qty:qty,
        id:id,
      },
success: function(data,status){
  alert('Product Qty Added Successfully');
window.location.reload();
}
    });
  }else{
    alert("Please Enter Proper Qty");
  }
    }

    function remove_product(id){
      let remove_product="remove_product";
      let input_id="input"+id;
      let qty=document.getElementById(input_id).value;
      if(qty>0){
      $.ajax({
      url:"product_qty_update_backend.php",
      type:"POST",
      data:{
        remove_product:remove_product,
        qty:qty,
        id:id,
      },
success: function(data,status){
  alert('Product Qty Removed Successfully');
window.location.reload();
}
    });
  }else{
    alert("Please Enter Proper Qty");
  }
    }
  </script>
    </body>
</html>
