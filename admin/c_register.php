<?php
include("connection.php");

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
    $date = $_POST['date'];
    //$image = $_POST['image'];
    $r_date = $_POST['r_date'];
    $gender = $_POST['gender'];
    $f_model = $_POST['f_model'];
    $pancard = $_POST['pancard'];
    $adharno = $_POST['adharno'];
    $password = $_POST['password'];
//Image Code
$upload_dir = "images/";
    $filename = uniqid() . '_' . basename($_FILES["image"]["name"]);
    $destination = $upload_dir . $filename;
$file_extension = strtolower(pathinfo($destination, PATHINFO_EXTENSION));
move_uploaded_file($_FILES["image"]["tmp_name"], $destination);

    

$query="INSERT INTO `register`(`fullname`, `firmname`, `homeaddress`, `location`, `areaname`, `countryname`, `state`, `district`, `taluka`, `city`, `pincode`, `m_number`, `w_number`, `email`, `date`, `image`, `r_date`, `gender`, `f_model`, `pancard`, `adharno`, `password`) VALUES ('$fullname', '$firmname', '$homeaddress', '$location', '$areaname', '$countryname', '$state', '$district', '$taluka', '$city', '$pincode', '$m_number', '$w_number', '$email', '$date', '$filename', '$r_date', '$gender', '$f_model', '$pancard', '$adharno', '$password')";
$conn->query($query);
$conn->close();
?>

<script>
    alert("Form Submited Successfully");
    window.location.replace('list_register.php');
</script>