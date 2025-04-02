<?php
session_start();
include("l_connection.php");
error_reporting(0);
$p_id = $_GET['p_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        h2 {
            font-family: Bookman Old Style;
            font-size: 35px;
        }

        label {
            font-family: Bookman Old Style;
        }


    </style>


</head>

<body>
    <?php include 'adminheader.php' ?>
    <?php 
    $query="SELECT * FROM addproduct WHERE p_id='$p_id'";
    $result=$connection->query($query);
    $row=$result->fetch_assoc();
    $txt_category=$row['txt_category'];
    $txt_productname=$row['txt_productname'];
    $txt_price=$row['txt_price'];
    $txt_gst=$row['txt_gst'];
    $txt_total=$row['txt_total'];
    $txt_quantity=$row['txt_quantity'];
    ?>
    <form action="" method="POST" >
        <input type="hidden" name="hidden_p_id" value="<?php echo $p_id ?>">
        <div class="content">
            <div class="row">

                <div class="col-sm-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">

                                        <center>
                                            <h2 class="title"><b>Update Product</b></h2>
                                        </center><br>
                                    </div>
                                    <div class="content">
                                        

                                            <div class="row ml-5">

                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <select name="txt_category" class="form-control"
                                                            id="txt_category">
                                                            
                                                            <option value="Kulfi" <?php if($txt_category=='Kulfi'){ echo "selected"; } ?>>Kulfi</option>
                                                            <option value="Cone" <?php if($txt_category=='Cone'){echo "selected"; } ?>>Cone</option>
                                                            <option value="Chakobar" <?php if($txt_category=='Chakobar'){echo "selected"; } ?>>Chakobar</option>
                                                            <option value="Family Pack" <?php if($txt_category=='Family Pack'){echo "selected"; } ?>>Family Pack</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" name="txt_productname"
                                                            placeholder="Enter Product Name" id="txt_productname"
                                                            class="form-control" required="" value="<?php echo $txt_productname ?>" >
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row ml-5">


                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Price/Unit</label>
                                                        <input type="text" name="txt_price" id="txt_price"
                                                           placeholder="Enter Price"
                                                            class="form-control" required="" value="<?php echo $txt_price ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                    <label>GST(%)</label>
                                                        <input type="text" name="txt_gst" class="form-control"
                                                            id="txt_gst" placeholder="Enter GST" onkeyup="calculate_amount()" value="<?php echo $txt_gst ?>">

                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                    <label>Total Amount</label>
                                                        <input type="text" name="txt_total" id="txt_total"
                                                            onkeyup="cal()" placeholder="Enter Total Amount"
                                                            class="form-control" required="" readonly value="<?php echo $txt_total ?>">
                                                    </div>
                                                </div>

                                            </div>





                                            




                                            </div>


                                            <div class="row ml-5">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <input type="submit" name="btn_save" value="Update"
                                                            class="btn btn-success btn-fill">&nbsp&nbsp&nbsp

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </form>
    <script>
    function calculate_amount(){
let txt_gst=parseFloat(document.getElementById("txt_gst").value);
let txt_price=parseFloat(document.getElementById("txt_price").value);

let amount=parseFloat((txt_price*txt_gst)/100);
amount=txt_price+amount;
document.getElementById("txt_total").value=amount;
    }
</script>
    <?php
 if(isset($_POST['btn_save']))
{
$txt_category = $_POST['txt_category'];
$txt_productname = $_POST['txt_productname'];
$txt_price = $_POST['txt_price'];
$txt_gst = $_POST['txt_gst'];
$txt_total = $_POST['txt_total'];
$hidden_p_id=$_POST['hidden_p_id'];
$query="UPDATE addproduct SET txt_category='$txt_category',txt_productname='$txt_productname',txt_price='$txt_price',txt_gst='$txt_gst',txt_total='$txt_total' WHERE p_id='$hidden_p_id'";
$connection->query($query);
echo'
<script>
alert("Product Details Updated Successfully");
window.location.replace("list_product.php");
</script>
';
}
?>
</body>


</html>