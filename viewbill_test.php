<?php
session_start();
if(!isset ($_SESSION["user"])){
  header("location:index.html");
}
else{
?>

<?php include_once("header1.php"); ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responstable 2.0: a responsive table solution</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/view_customer.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

  
</head>

 <body>
  


  <h1>View Bill</h1>

  
<?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "tutorial");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

$sql = 'SELECT login.address, login.mobile_No,login.name, bill.bill_no,bill.month, bill.unit_consumed, bill.status , update_cost.cost FROM login, bill,update_cost WHERE login.username = bill.Username AND bill.Username = "' . $_SESSION['user'] . '"';


    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?>
<table class='responstable' id='example'>
  <thead>
  <tr>
    <th>Service Number</th>
    <th>Name</th>
    <th>Address</th>
    <th>Contact no</th>
    <th>Month</th>
    <th>Amount</th>
    <th>Status</th>
  </tr>
</thead>

  <tbody>
  <?php

    
    if(mysqli_num_rows($query) > 0)
    {
    while ($row = mysqli_fetch_array($query))
    {
      ?>
      
      <tr>
          <td><?php echo $row["bill_no"]?></td>
          <td><?php echo $row["name"]?></td>
          <td><?php echo $row["address"]?></td>
          <td><?php echo $row["mobile_No"]?></td>
           <td><?php echo $row["month"]?></td>
           <td ><?php echo $row["unit_consumed"]?></td>
           <td><?php echo $row["status"]?></td>
        </tr>
      
    <?php
  }
}
      ?>
 
  </tbody>
</table>
  
   <?php include_once("scripts.php");?>
  <?php include_once("footer.php");
          ?>

</body>
</html>
<?php
}
?>