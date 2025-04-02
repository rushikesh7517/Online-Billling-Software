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

<body>
<?php include 'adminheader.php' ?>
    <form action="c_register.php" method="POST" enctype="multipart/form-data" >
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

                                            <form action="Register" method="POST">
                                           <br> <center><h2 class="title"><b><u> Franchise Registration</u></b></h2> </center><br>

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
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="firmname" id="firmname"
                                                                class="form-control" required="">
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
                                                            <input type="text" name="homeaddress" id="homeaddress"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Shop Location</label>
                                                            <input type="text" name="location" id="location"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label> Shop Area/Landmark</label>
                                                            <input type="text" name="areaname" id="areaname"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Country Name</label>
                                                            <input type="text" name="countryname" id="countryname"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row  mt-3">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>State Name</label>
                                                            <input type="text" name="state" id="state"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>District Name</label>
                                                            <input type="text" name="district" id="district"
                                                                class="form-control">                                                        
                                                        </div>
                                                    </div>





                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>Taluka Name</label>
                                                            <input type="text" name="taluka" id="taluka"
                                                                class="form-control"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>City Name</label>
                                                            <input type="text" name="city" id="city"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>Pin Code</label>
                                                            <input type="text" name="pincode" id="pincode" maxlength="6"
                                                                id="txt_number" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-3">

                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Primary Mobile Number<span
                                                                    style="color:red">*</span></label>
                                                            <input type="number" name="m_number" id="m_number" required
                                                                pattern="[789][0-9]{9}"
                                                                title="Plz enter start no 7 to 9" maxlength="10"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Whatsapp Mobile Number</label>
                                                            <input type="number" name="w_number" id="w_number" required
                                                                pattern="[789][0-9]{9}"
                                                                title="Plz enter start no 7 to 9" maxlength="10"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Email<span style="color:red">*</span></label>
                                                            <input type="Email" name="email" id="email"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Date Of Birth<span style="color:red">*</span></label>
                                                            <input type="date" name="date" id="date"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Photo</label>
                                                            <input type="file" name="image" id="image"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Registration Date<span
                                                                    style="color:red">*</span></label>
                                                            <input type="date" name="r_date" id="r_date"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>





                                                    <div class="col-sm-6">

                                                        <label>Gender<span style="color:red">*</span></label>
                                                        <br>
                                                        <input type="radio" name="gender" id="gender" value="Male" />
                                                        Male &nbsp &nbsp &nbsp
                                                        <input type="radio" name="gender" id="gender" value="Female" />
                                                        Female&nbsp &nbsp &nbsp
                                                        <input type="radio" name="gender" id="gender" value="Others">
                                                        Others

                                                    </div>
                                                </div>
                                                <div class="row  mt-3">
                                                    <div class="col-sm-3">
                                                        <label>Farnchise Model</label>
                                                        <select name="f_model" id="f_model" class="form-control"
                                                            required="">
                                                            <option>Select Model</option>
                                                            <option>Premium Store</option>
                                                            <option>Kiosk</option>
                                                            <option>Kulfi Van</option>
                                                            <option>Stable Food Truck</option>
                                                            <option>Startup</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>Pan/Tan Card Number</label>
                                                        <input type="text" name="pancard" id="pancard" required
                                                            pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"
                                                            title="Plz Enter Correct Format" class="form-control">

                                                    </div>






                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Adharcard No<span style="color:red">*</span></label>
                                                            <input type="number" name="adharno" id="adharno"
                                                                class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Password<span style="color:red">*</span></label>
                                                            <input type="password" name="password" id="password"
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
                                                            <input type="submit" name="btn_save" value="Submit"
                                                                class="btn btn-success btn-fill">&nbsp&nbsp&nbsp&nbsp

                                                            <input type="reset" name="btn_save" value="Reset"
                                                                class="btn btn-danger btn-fill">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

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
</body>

</html>