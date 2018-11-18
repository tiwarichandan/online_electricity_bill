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

        <?php include_once("header1.php");
        ?>
            <div class="modal-content register_form">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel1">Payment</h5>
                    
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Service No</label>
                            <input type="Number" class="form-control" placeholder=" " name="service_no" id="recipient-rname"
                                required="">
                        </div>
                        
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Full Name</label>
                            <input type="charset" class="form-control" placeholder=" " name="name" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Card Number</label>
                            <input type="Number" class="form-control" placeholder=" " name="card_name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">City</label>
                            <input type="text" class="form-control" placeholder=" " name="city" id="recipient-email"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">CVV</label>
                            <input type="Number" class="form-control" placeholder=" " name="cvv" id="mobile"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Expiration Date</label>
                            <input type="date" class="form-control" placeholder=" " name="exp_date">
                        </div>
                        <input type="radio" name="card" value="Credit Card"> Credit Card<br>
                        <input type="radio" name="card" value="Debit Card"> Debit Card<br><br>
                        
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="pay" value="Pay">
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

 if(isset($_POST["pay"]))
{ 
 
 $Bill_No= $_POST["service_no"];
 $pay = 'SELECT bill.bill_no,bill.status FROM bill WHERE bill.status ="unpaid" AND bill.bill_no = "' . $Bill_No . '"';

 
 $query = mysqli_query($conn, $pay);

if( mysqli_num_rows($query) > 0)
      {
        $pay1="UPDATE bill
SET status='paid'
WHERE bill_no = $Bill_No";

$query1 = mysqli_query($conn, $pay1);
        
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