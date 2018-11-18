<?php
session_start();
if(!isset ($_SESSION["user"])){
  header("location:index.html");
}
else{
?>
<?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "tutorial");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

 if(isset($_POST["feedback_submit"]))
{
 $name = $_POST["name"];
 $mobile= $_POST["mobile"];
 $email =$_POST["Email"];
 $feedback =$_POST["feedback"];
 $feed="INSERT INTO feedback(name,mobile_No,Email,feedback) VALUES('$name', '$mobile', '$email','$feedback')";
 $result = $conn->query($feed);

if($result)
      {
   
        
        echo'<script>alert("Success!");</script>';
       }
     
  else
      {
        echo'<script>alert("Failed!");</script>';
      }
    }
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

        <?php include_once("header1.php");
        ?>
            <div class="modal-content register_form">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel1">Feedback form</h5>
                    
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="p-3">
                
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" placeholder=" " name="name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Contact No</label>
                            <input type="text" class="form-control" placeholder=" " name="mobile" id="mobile"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">feedback</label>
                            <input type="text"  style="height:10vh; "class="form-control" placeholder=" " name="feedback" id="recipient-rname"
                                required="">
                        </div>
                        
                        
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="feedback_submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
         <?php include_once("footer.php");
          ?>
    
    </body>
    </html>

<?php
}
?>