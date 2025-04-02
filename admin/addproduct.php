<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form action="c_addproduct.php" method="POST" enctype="multipart/form-data">
        <div class="content">
            <div class="row">

                <div class="col-sm-12">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">

                                        <center>
                                            <h2 class="title"><b>Add Product</b></h2>
                                        </center><br>
                                    </div>
                                    <div class="content">
                                        

                                            <div class="row ml-5">

                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <select name="txt_category" class="form-control"
                                                            id="txt_category">
                                                            
                                                            <option value="Kulfi">Kulfi</option>
                                                            <option value="Cone">Cone</option>
                                                            <option value="Chakobar">Chakobar</option>
                                                            <option value="Family Pack">Family Pack</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" name="txt_productname"
                                                            placeholder="Enter Product Name" id="txt_productname"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row ml-5">


                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input type="file" name="txt_image" id="txt_image"
                                                            class="form-control" required="">

                                                    </div>

                                                </div>





                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Price/Unit</label>
                                                        <input type="text" name="txt_price" id="txt_price"
                                                           placeholder="Enter Price"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Add Quantity</label>
                                                        <input type="number" name="txt_quantity" id="txt_quantity"
                                                            placeholder="Enter Quantity" class="form-control"
                                                            required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>GST(%)</label>
                                                        <input type="text" name="txt_gst" class="form-control"
                                                            id="txt_gst" placeholder="Enter GST" onkeyup="calculate_amount()">

                                                    </div>
                                                </div>

                                            </div>





                                            <div class="row ml-5">

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Total Amount</label>
                                                        <input type="text" name="txt_total" id="txt_total"
                                                            onkeyup="cal()" placeholder="Enter Total Amount"
                                                            class="form-control" required="" readonly>
                                                    </div>
                                                </div>

                                                
                                                </div>




                                            </div>


                                            <div class="row ml-5">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <input type="submit" name="btn_save" value="Save"
                                                            class="btn btn-success btn-fill">&nbsp&nbsp&nbsp

                                                        <a href="add_product.jsp"
                                                            class="btn btn-danger btn-fill">Cancel</a>
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
</body>
<script>
    function calculate_amount(){
let txt_gst=parseFloat(document.getElementById("txt_gst").value);
let txt_price=parseFloat(document.getElementById("txt_price").value);

let amount=parseFloat((txt_price*txt_gst)/100);
amount=txt_price+amount;
document.getElementById("txt_total").value=amount;
    }
</script>
</html>