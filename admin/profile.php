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
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img src="images/sc1.png" class="rounded-circle mt-5"style="width:70%;" style="border-radius:50%;">
            <span class="font-weight-bold"><b>Sharad Chavan</b></span><span class="text-black-50">admin@papalgroup.com</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Distrubuter Profile </h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" value="Sharad" readonly ></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="Chavan" readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" value="9022126687"readonly></div>
                    <div class="col-md-12"><label class="labels">Address </label><input type="text" class="form-control" value="Kolhapur"readonly></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" value="416005"readonly></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control"  value="Maharashtra"readonly></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" value="Shahu Market Yard ,Kolhapur"readonly></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control"  value="admin@papalgroup.com"readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control"value="India"readonly></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="Maharashtra" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <br>        
                <br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control"  value="experience in company operation"></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" value="Graduated in MBA Marketing"></div>
                <br>
                <br>
                <center><a href="admindashboard.php">
                 <input type="submit" class="btn btn-dark" value="<-BACK--">                               
                 </a></center>
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