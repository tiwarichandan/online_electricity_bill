<?php session_start(); ?>
<?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "tutorial");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

if(isset($_POST["btn"]))
{
 $user = $_POST["username"];
 $pass = $_POST["password"];

 $sql = "SELECT * FROM tutorial.login where username LIKE '$user' and password LIKE '$pass'";
 $result = $conn->query($sql);
 if($result->num_rows > 0)
 {

   while($row = $result->fetch_assoc()) 
    {
      $u = $row["username"];
      $p = $row["password"];

     }
      
       
      if(($user == $u)&&($pass == $p))
      {

        header("location: viewbill.php");
        $_SESSION['user']=$user;

       }
     }
     if($result->num_rows!=1)

      {
        
        echo'<script>alert("Failed!");</script>';
        echo'<script>window.open("index.html","_SELF");</script>';

      }

    
}
 

?>