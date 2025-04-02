<?php 
include ("l_connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Franchiese Members</title>
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
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
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
    overflow-x:auto;
  }
   </style>  
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <body>
    <?php include 'adminheader.php' ?>
    <div class="table-container">
        <table id="customers">
        <center> <h2 style="font-family:Bookman Old Style">Franchiese Members</h2></center>
        <br>
    <thead>
      <tr>
          <th>Register Id</th>
        <th>Fullname</th>
          <th>Firm name</th>
          <th>Home Address</th>
        <th>Shop Location</th>
        <th>Shop Area</th>
        <th>Country</th>
        <th>State</th>
        <th>District</th>      
        <th>Taluka</th>
        <th>City</th>
        <th>Pincode</th>
        <th>Mobile No</th>
        <th>Whatsapp No</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Image</th>
        <th>Registration Date</th>
        <th>Gender</th>      
        <th>Franchaise Model</th>
        <th>Pan No</th>
        <th>Adhar No </th>      
        <th>Password</th>
        <th>Edit</th>

      </tr>
    </thead>
    <?php
        $query = mysqli_query($connection,"select * from register");
        while($row = mysqli_fetch_array($query)) 
		 { 
		?> 
		  <tr>
		   <td><?php echo $row['r_id']; ?></td> 
		   <td><?php echo $row['fullname']; ?></td> 
		   <td><?php echo $row['firmname']; ?></td>
       <td><?php echo $row['homeaddress']; ?></td> 
		   <td><?php echo $row['location']; ?></td> 
		   <td><?php echo $row['areaname']; ?></td>
       <td><?php echo $row['countryname']; ?></td> 
		   <td><?php echo $row['state']; ?></td> 
		   <td><?php echo $row['district']; ?></td>
       <td><?php echo $row['taluka']; ?></td>
       <td><?php echo $row['city']; ?></td> 
		   <td><?php echo $row['pincode']; ?></td> 
		   <td><?php echo $row['m_number']; ?></td>
       <td><?php echo $row['w_number']; ?></td> 
		   <td><?php echo $row['email']; ?></td> 
		   <td><?php echo $row['date']; ?></td>
       <td><?php echo "<img src='images/".$row['image']."' class='img-thumbnail' style='max-width: 80px; max-height: 50px;'>"; ?></td>		   <td><?php echo $row['r_date']; ?></td> 
		   <td><?php echo $row['gender']; ?></td>
       <td><?php echo $row['f_model']; ?></td>
       <td><?php echo $row['pancard']; ?></td> 
		   <td><?php echo $row['adharno']; ?></td> 
		   <td><?php echo $row['password']; ?></td>
       <td><a href="edit_listregister.php?r_id=<?php echo $row['r_id'] ?>"><input type="button" value="Edit" class=" btn btn-success btn-fill"></a><b></b></td>
  
	     </tr> 

      <?php
        }
      ?>
    
       
     
  </table> 
  <br>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </div>
</html>
