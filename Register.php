<?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "tutorial");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

 if(isset($_POST["register"]))
{
 $name = $_POST["name"];
 $username = $_POST["username"];
 $mobile= $_POST["mobile"];
 $pass =$_POST["password"];
 $email =$_POST["Email"];
 $address =$_POST["address"];
 $register="INSERT INTO login(name, username, Mobile_No, password,Email,address) VALUES('$name', '$username', '$mobile', '$pass','$email','$address')";
 $result = $conn->query($register);

if($result)
      {
   
        
        echo'<script>alert("Success!");</script>';
        echo'<script>window.open("index.html","_SELF");</script>';
       }
     
  else
      {
        echo'<script>alert("Failed!");</script>';
        echo'<script>window.open("index.html","_SELF");</script>';
      }
    }
?>