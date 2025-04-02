<?php 
include ("l_connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Order_product</title>
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
  #customers tr:nth-child(even){background-color: black;}
  
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
    overflow-x:auto;}
   </style>  
  </head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <?php include 'userheader.php' ?>
    <div class="table-container">
        <table id="customers">
        <center> <h2 style="font-family:Bookman Old Style;color:black;">Products</h2></center>
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
            
              </div>
                </div>
            <br>
           
    <thead>
      <tr>
          <th>Product Id</th>
        <th>Category Name</th>
          <th>Product Name</th>
        <th>Price/unit</th>  
        <th>Available Stock</th>
        <th>Quantity</th>
        <th>Amount</th>
      </tr>
    </thead>
    
    <?php
         $query = mysqli_query($connection,"select * from addproduct");
         
        while($row = mysqli_fetch_array($query)) 
		 { 
      $p_id=$row['p_id'];
      $price=$row['txt_total'];
      $txt_category=$row['txt_category'];
      $txt_productname=$row['txt_productname'];
      echo"<input type='hidden' value='$price' id='price$p_id'>";
		?> 
		  <tr>
		   <td><?php echo $row['p_id']; ?></td> 
		   <td id='<?php echo "category$p_id" ?>'><?php echo $row['txt_category']; ?></td> 
		   <td id='<?php echo "productname$p_id" ?>'><?php echo $row['txt_productname']; ?></td>
       <td><?php echo $row['txt_total']; ?></td>
       <td><?php echo $row['txt_quantity']; ?></td>  
       <td><input type="number" class="form-control" name="qtys" id='<?php echo "qty$p_id" ?>' onkeyup="change_qty('<?php echo $p_id ?>')"></td>
       <td><input type="text" class="form-control" name="amounts" id='<?php echo "amount$p_id" ?>' readonly ></td>
	     </tr> 

      <?php
        }
      ?>
    
      </table>
      <br>
  
  <div class="row">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="col-sm-3">
            <div class="form-group">
                <label><b>Total Quantity:</b></label>
                <input type="text"name="txt_total"id="txt_total_amount"class="form-control" required ="" readonly>
            </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group">
                <label><b>Total Amount:</b></label>
                <input type="text"name="txt_price"id="txt_price_amount"class="form-control" required ="" readonly>
            </div>
      </div>
      
      </div>
      <br>

      <center>
      <div class="col-sm-8">
        
            <div class="form-group">


               <input type="submit"name="btn_save"value="Confirm Order"class="btn btn-success btn-fill" onclick="confirmorder()">&nbsp&nbsp&nbsp
               
               
            </div>
      
        </div>
        </center>
      
     <br>      
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
  <script>
    function change_qty(id){
      let qty_display="qty"+id;
      let price_dispaly="price"+id;
      let amount_display="amount"+id;
      
    let qty=parseFloat(document.getElementById(qty_display).value);
    let price=parseFloat(document.getElementById(price_dispaly).value);
    let amount=parseFloat(qty* price);
    document.getElementById(amount_display).value=amount.toFixed(2);

    let qty_len=parseFloat(document.getElementsByName("qtys").length);
    let amount_len=parseFloat(document.getElementsByName("amounts").length);
    let i=0;
    let qty_total=0;
      while(i<qty_len){
        let a=parseFloat(document.getElementsByName("qtys")[i].value);
        if(a>0){
        qty_total+=a;
      }
        i++;
      }
      i=0;
      let amount_total=0;
      while(i<qty_len){
        let a=(parseFloat(document.getElementsByName("amounts")[i].value));
        if(a>0){
        amount_total+=a;
        }
        i++;
      }
     
      document.getElementById("txt_total_amount").value=qty_total;
      document.getElementById("txt_price_amount").value=amount_total;

  }

  function confirmorder(){
    let confirmorder="confirmorder";
    let len=document.getElementsByName("qtys").length;
    let total_qty=document.getElementById("txt_total_amount").value;
    let total_amount=document.getElementById("txt_price_amount").value;
    let ids="";
    let qtys="";
    let amounts="";
    let categorys="";
    let productnames="";
    let prices="";
    let j=0;
    for(i=1;i<=len;i++){
      let temp="qty"+i;
      let temp_amount="amount"+i;
      let temp_category="category"+i;
      let temp_productname="productname"+i;
      let temp_price="price"+i;
      let qty=document.getElementById(temp).value;
      let amount=document.getElementById(temp_amount).value;
      let category=document.getElementById(temp_category).innerHTML;
      let productname=document.getElementById(temp_productname).innerHTML;
      let price=document.getElementById(temp_price).value;
      if(qty>0){
        ids=ids+i+",";
        qtys=qtys+qty+",";
        amounts=amounts+amount+",";
        categorys=categorys+category+",";
        productnames=productnames+productname+",";
        prices=prices+price+",";
        j++;
      }
    }
    if(j>0){
    $.ajax({
      url:"orderproducts_backend.php",
      type:"POST",
      data:{
        confirmorder:confirmorder,
        ids:ids,
        qtys:qtys,
        amounts:amounts,
        categorys:categorys,
        prices:prices,
        total_qty:total_qty,
        productnames:productnames,
        total_amount:total_amount,
      },
success: function(data,status){
  alert('Order Placed Successfully');
window.location.replace('userheader.php');
}
    });
  }else{

    alert("Blank Order Can not be placed");

  }
  }
  </script>
   
</html>
