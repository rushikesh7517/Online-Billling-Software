<?php
session_start();
$image=$_SESSION['image'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
    <body>
<form>
    <input type="hidden" vlaue="<?php echo $_SESSION['r_id'];?>">
    <div class="container rounded bg-white mt-5 mb-5" >
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img src='<?php echo "../admin/images/$image" ?>' class='img-thumbnail rounded-circle mt-5' style="width:70%;" style="border-radius:50%;">
            <span class="font-weight-bold"><b>Sharad Chavan</b></span><span class="text-black-50">admin@papalgroup.com</span><span> </span></div>
        </div>
        <div class="col-md-4 border-right">
            <div class="p-3 py-5">
                <div >
                    <center><h4><b>My Profile </b></h4></center>
                </div>
                <br>
                
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels"><b>Name</b></label><input type="text" class="form-control" value="<?php echo $_SESSION["fullname"];?>" readonly ></div>
                    <div class="col-md-6"><label class="labels"><b>Firm Name</b></label><input type="text" class="form-control" value="<?php echo $_SESSION["firmname"];?>" readonly ></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels"><b>Mobile Number</b></label><input type="text" class="form-control" value="<?php echo $_SESSION["m_number"];?>" readonly></div>
                    <div class="col-md-12"><label class="labels"><b>Address</b> </label><input type="text" class="form-control" value="<?php echo $_SESSION["homeaddress"];?>" readonly></div>
                    <div class="col-md-12"><label class="labels"><b>Postcode</b></label><input type="text" class="form-control"value="<?php echo $_SESSION["pincode"];?>" readonly></div>
                    <div class="col-md-12"><label class="labels"><b>State</b></label><input type="text" class="form-control"  value="<?php echo $_SESSION["state"];?>" readonly></div>
                    <div class="col-md-12"><label class="labels"><b>Area</b></label><input type="text" class="form-control" value="<?php echo $_SESSION["areaname"];?>" readonly></div>
                    <div class="col-md-12"><label class="labels"><b>Email ID</b></label><input type="text" class="form-control" value="<?php echo $_SESSION["email"];?>" readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels"><b>Country</b></label><input type="text" class="form-control" value="<?php echo $_SESSION["countryname"];?>" readonly></div>
                    <div class="col-md-6"><label class="labels"><b>State/Region</b></label><input type="text" class="form-control" value="<?php echo $_SESSION["location"];?>" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"></div>
            </div>
        </div>
       
    </div>
</div>
</div>
</div>
</form>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <style type="text/css">
           body {
    background: rgb(99, 39, 120)
}
lable{
    font-size:45px;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

     </style>
   </body>
</html>