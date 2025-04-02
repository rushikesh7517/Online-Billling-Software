<?php
include("connection.php");

// Set parameters and execute
$txt_category = $_POST['txt_category'];
$txt_productname = $_POST['txt_productname'];
// $txt_image = $_POST['txt_image'];
$txt_price = $_POST['txt_price'];
$txt_quantity = $_POST['txt_quantity'];
$txt_gst = $_POST['txt_gst'];
$txt_total = $_POST['txt_total'];

//Image Code
$upload_dir = "images/";
    $filename = uniqid() . '_' . basename($_FILES["txt_image"]["name"]);
    $destination = $upload_dir . $filename;
$file_extension = strtolower(pathinfo($destination, PATHINFO_EXTENSION));
move_uploaded_file($_FILES["txt_image"]["tmp_name"], $destination);

$query="INSERT INTO `addproduct`(`txt_category`, `txt_productname`, `txt_image`, `txt_price`, `txt_quantity`, `txt_gst`, `txt_total`) VALUES ('$txt_category', '$txt_productname', '$filename', '$txt_price', '$txt_quantity', '$txt_gst', '$txt_total')";
// echo $query;
$conn->query($query);
$conn->close();

?>
<script>
    alert("Form Submited Successfully");
    window.location.replace('list_product.php');
</script>