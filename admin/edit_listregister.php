<?php
session_start();
include("l_connection.php");
error_reporting(0);
$r_id = $_GET['r_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        h2 {
            font-family: Bookman Old Style;
            font-size: 35px;
        }

        label {
            font-family: Arial Black;
            font-size: 15px;
        }

        body {
            background-color: white;

        }
    </style>
</head>
<?php 
    $query="SELECT * FROM register WHERE r_id='$r_id'";
    $result=$connection->query($query);
    $row=$result->fetch_assoc(); 

$fullname=$row['fullname'];
$firmname=$row['firmname'];
$homeaddress=$row['homeaddress'];  
$location=$row['location']; 
$areaname=$row['areaname'];
$countryname=$row['countryname'];  
$state=$row['state'];  
$district=$row['district'];
$taluka=$row['taluka']; 
$city=$row['city'];  
$pincode=$row['pincode'];              
$m_number=$row['m_number'];
$w_number=$row['w_number'];
$email=$row['email']; 
$f_model=$row['f_model'];
$password=$row['password'];
      ?>

<body>
<?php include 'adminheader.php' ?>
    <form action="" method="POST"  >
    <input type="hidden" name="hidden_r_id" value="<?php echo $r_id ?>">
        <br>
        <div class="content">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="container-fluid">

                                    <div class="header">

                                        <div class="content">

                                            
                                           <br> <center><h2 class="title"><b><u>Update Franchise Registration</u></b></h2> </center><br>

                                                <div class="row mt-3">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Owner Fullname<span
                                                                    style="color:red">*</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group"> 
                                                            <label>Firm Name<span style="color:red">*</span></label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row mt-3">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="fullname" id="fullname"
                                                                class="form-control" value="<?php echo $fullname ?>" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="firmname" id="firmname"
                                                                class="form-control"  value="<?php echo $firmname ?>" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row  mt-3">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <h3><b>Address<span style="color:red">*</span></b></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row  mt-3">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Home Address</label>
                                                            <input type="text" name="homeaddress" id="homeaddress" value="<?php echo $homeaddress ?>"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Shop Location</label>
                                                            <input type="text" name="location" id="location" value="<?php echo $location ?>"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label> Shop Area/Landmark</label>
                                                            <input type="text" name="areaname" id="areaname" value="<?php echo $areaname ?>"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Country Name</label>
                                                            <input type="text" name="countryname" id="countryname" value="<?php echo $countryname ?>"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row  mt-3">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>State Name</label>
                                                            <input type="text" name="state" id="state" value="<?php echo $state ?>"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>District Name</label>
                                                            <input type="text" name="district" id="district" value="<?php echo $district ?>"
                                                                class="form-control">                                                        
                                                        </div>
                                                    </div>





                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>Taluka Name</label>
                                                            <input type="text" name="taluka" id="taluka" value="<?php echo $taluka ?>"
                                                                class="form-control"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>City Name</label>
                                                            <input type="text" name="city" id="city" value="<?php echo $city ?>"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>Pin Code</label>
                                                            <input type="text" name="pincode" id="pincode" maxlength="6" value="<?php echo $pincode ?>"
                                                                id="txt_number" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Primary Mobile Number<span
                                                                    style="color:red">*</span></label>
                                                            <input type="number" name="m_number" id="m_number"  value="<?php echo $m_number ?>"
                                                                required pattern="[789][0-9]{9}"
                                                                title="Plz enter start no 7 to 9" maxlength="10"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Whatsapp Mobile Number</label>
                                                            <input type="number" name="w_number" id="w_number" value="<?php echo $w_number ?>"
                                                            required    pattern="[789][0-9]{9}"
                                                                title="Plz enter start no 7 to 9" maxlength="10"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Email<span style="color:red">*</span></label>
                                                            <input type="Email" name="email" id="email" value="<?php echo $email ?>"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                 </div>
                                                





                                                       <div class="row  mt-3">
                                                    <div class="col-sm-3">
                                                        <label>Farnchise Model</label>
                                                        <select name="f_model" id="f_model" class="form-control"
                                                            required="">
                                                            <option value="Premium Store" <?php if($txt_category=='Premium Store'){ echo "selected"; } ?>>Premium Store</option>
                                                            <option value="Kiosk" <?php if($txt_category=='Kiosk'){ echo "selected"; } ?>>Kiosk</option>
                                                            <option value="Kulfi Van" <?php if($txt_category=='Kulfi Van'){ echo "selected"; } ?>>Kulfi Van</option>
                                                            <option value="Stable Food Truck" <?php if($txt_category=='Stable Food Truck'){ echo "selected"; } ?>>Stable Food Truck</option>
                                                            <option value="Startup" <?php if($txt_category=='Startup'){ echo "selected"; } ?>>Startup</option>

                                                        </select>
                                                    </div>
                                                






                                                    
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Password<span style="color:red">*</span></label>
                                                            <input type="password" name="password" id="password" value="<?php echo $password ?>"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3 mb-3">
                                                    <div class="col-sm-4"></div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                            <input type="submit" name="btn_save" value="Update"
                                                                class="btn btn-success btn-fill">&nbsp&nbsp&nbsp&nbsp

                                                                </div>
                                                    </div>
                                                </div>
                                           

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </form>
</script>
<?php
 if(isset($_POST['btn_save']))
{
$fullname = $_POST['fullname'];
$firmname = $_POST['firmname'];
$homeaddress = $_POST['homeaddress'];  
$location = $_POST['location']; 
$areaname = $_POST['areaname'];
$countryname = $_POST['countryname'];  
$state = $_POST['state'];  
$district = $_POST['district'];
$taluka = $_POST['taluka']; 
$city = $_POST['city'];  
$pincode = $_POST['pincode'];              
$m_number = $_POST['m_number'];
$w_number = $_POST['w_number'];
$email = $_POST['email'];  
$f_model = $_POST['f_model'];
$password = $_POST['password'];
$hidden_r_id=$_POST['hidden_r_id'];
$query="UPDATE register SET fullname='$fullname',firmname='$firmname',homeaddress='$homeaddress', location='$location',areaname='$areaname',countryname='$countryname',state='$state',taluka='$taluka',city='$city',pincode='$pincode',m_number='$m_number',w_number='$w_number',email='$email',f_model='$f_model',password='$password' WHERE r_id='$hidden_r_id'";
$connection->query($query);
echo'
<script>
alert("Register Details Updated Successfully");
window.location.replace("list_register.php");
</script>
';
}
?>
</script>
</body>

</html>