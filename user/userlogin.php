<?php
  include 'connection.php';
  session_start(); 
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $m_number = $_POST['m_number'];
    $password = $_POST['password'];

    // Hash the password before comparing with the database
    $hashed_password = md5($password); // You should use a more secure hashing algorithm like bcrypt
    
    // SQL query to check if the username and password match
    $sql = "SELECT * FROM register WHERE m_number = '$m_number' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        $row=$result->fetch_assoc();
        $_SESSION['r_id']=$row['r_id'];
        $_SESSION['fullname']=$row['fullname'];
        $_SESSION['firmname']=$row['firmname'];
        $_SESSION['homeaddress']=$row['homeaddress'];
        $_SESSION['m_number']=$row['m_number'];
        $_SESSION['pincode']=$row['pincode']; 
        $_SESSION['state']=$row['state'];
        $_SESSION['areaname']=$row['areaname'];
        $_SESSION['email']=$row['email'];
        $_SESSION['countryname']=$row['countryname'];
        $_SESSION['location']=$row['location'];
        $_SESSION['image']=$row['image'];
        echo "<script>
        window.location.replace('userdashboard.php');</script>";
    } else {
        // Login failed
        echo "<script>alert('Invalid Username or Password')</script>";
    }
}

// Close the database connection
$conn->close();
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
        <form method="POST">
        <div class="jumbotron">
            <div class="row ">
                 <div class="col-sm-6">
                 <img src="images/user.jpg" width="100%" height="450px" >
                    </div>
              
            <div class="col-sm-6 ">
                <div class="login">
                  <center><h2><b>LOGIN</b></h2></center>
                  <br>
                 
                  <div><label>Enter your Mobile No:</label>
                     <center><input type="text" name="m_number" id="m_number"  class="from-control"></center>
                    <br>
                 </div>
                 <div?>
                  <label>Enter your password:</label>
                    <center><input type="password" name="password" id="password"  class="from-control"></center>
                   <br><br>
                      <center><input type="submit" name="btn" class="button" value="login"></center>
            
                 </div>
                </div>                    
                </div>
            </div>
          
         </div>
</div>
</form>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <style type="text/css">
            body
            {
                background-color:snow-white;
            }
            .jumbotron 
            {
                 width:55%;
                margin: 100px auto auto auto;
                box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.5);
                background-color:rgba(255,255,255,0.1);
                padding: 0px 0px 0px 0px ;
                border-radius: 15px;
            }
 .from-control{
    border-radius:5px;
    position: relative;
    height: 45px;
    width: 100%;
    color:black;
    font-size: 25px;
    padding: 0 0 0 15px;
    }
 h2{
    font-family: Bookman Old Style;
    font-size: 45px;
    padding: 10px 0 10px 0;
}
.login{
    margin-top:12%;
    margin-right:5%;
}
label{
    font-family: Bookman Old Style;
    font-size:25px;
}
.button{

    font-family: Bookman Old Style;
    display:center;
    border-radius: 20px;
    font-size: 20px;
    height: 45px;
    outline: none;
    width: 25%;
    color: black;
    cursor: pointer;
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
}

     </style>
   </body>
</html>