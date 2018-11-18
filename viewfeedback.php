<?php
session_start();
if(!isset ($_SESSION["user"])){
  header("location:index.html");
}
else{
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Responstable 2.0: a responsive table solution</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/view_customer.css">

  
</head>

<body>

<?php include_once("header.php");
          ?>
  <h1>View Customers</h1>

  
<?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "tutorial");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);
$sql = "SELECT name, mobile_No,Email,feedback FROM tutorial.feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='responstable'>
  
  <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Contact No</th>
    <th>Email id</th>
    <th>feedback</th>
  </tr>";
    // output data of each row
  $a=1;
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $a. "</td><td>" . $row["name"]. " </td><td>" . $row["mobile_No"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["feedback"]. "</td></tr>";
        $a++;
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
 
  
</table>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

  <?php include_once("footer.php");
          ?>

</body>

</html>

<?php
}
?>