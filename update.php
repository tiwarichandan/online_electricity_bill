<?php
session_start();
if(!isset ($_SESSION["user"])){
  header("location:index.html");
}
else{
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Directory Business Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Directory Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">

    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    
    <!-- timeline -->
    <link href="css/timeline.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="css/mystyle.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>

        <?php include_once("header.php");
        ?>
            <div class="modal-content register_form">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel1">Update per unit cost</h5>
                    
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="p-3">
                
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">1 Killowatt-hour(kwh) cost</label>
                            <input type="number" class="form-control" placeholder=" " name="cost" id="recipient-rname"
                                required="">
                        </div>
                        
                        
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="update_cost" value="Update">
                        </div>
                    </form>
                </div>
            </div>
         <?php include_once("footer.php");
          ?>
    
    </body>
    </html>
    <?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "tutorial");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

 if(isset($_POST["update_cost"]))
{
 $cost = $_POST["cost"];
 
 $up='UPDATE update_cost
SET `cost` = " '.$cost. '" ';
 
 if (mysqli_query($conn, $up))
      {
   
        
        echo'<script>alert("Success!");</script>';
       }
     
  else
      {
        echo'<script>alert("Failed!");</script>';
      }
    }
?>


<?php
}
?>