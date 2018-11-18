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
                    <h5 class="modal-title" id="exampleModalLabel1">Calculate elctricity bill</h5>
                    
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Consumer Id</label>
                              <input type="text" class="form-control" name="username" id="recipient-rname"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="search" value="Search" />
                        </div>
                    </form>
                    </div>
                        
                            <?php
                            global $inputname;
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "tutorial");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);

if(isset($_POST["username"])){
    
    $inputname=$_POST['username'];
    
    $myquery="SELECT * FROM tutorial.login WHERE username='$inputname'";
    
    $fetched=mysqli_query($conn,$myquery);
    if($fetched){

        $_SESSION["uname"]=$inputname;
    }

    ?>
    <?php
    while ($row = $fetched->fetch_assoc()) {
   ?>
                          
    
                     
                           <form class="p-3" method="post" action=""><div class='form-group'>
                            <label for='recipient-name' class='col-form-label aa'>Consumer Name</label></div>
                            <input type='text' style="padding:1%; margin-top:-20px;" class='col-form-label aa name='name' value="<?php echo $row['name']?> " id='recipient-rname' >
                        

<?php
    }
    
    
    mysqli_close($conn);
    }                   
?>   
                        <div class="form-group aa">
                            <label for="recipient-email" class="col-form-label ">Bill No</label>
                            <input type="text" class="form-control " placeholder=" " name="Bill_No" id="recipient-email"
                                required="">
                        </div>
                        <div class="form-group aa">
                            <label for="password2" class="col-form-label">Month</label><br>
                            <select name="month"  style="padding:1%; margin-top:-20px; margin-left:0px; width: 100%;">
  <option value="January">January</option>
  <option value="February">February</option>
  <option value="March">March</option>
  <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="August">August</option>
  <option value="September">September</option>
  <option value="October">October</option>
  <option value="November">November</option>
  <option value="December">December</option>
  
</select>
                        </div>
                        <div class="form-group aa">
                            <label for="password2" class="col-form-label">Expiry Date</label>
                            <input type="date" class="form-control" placeholder=" " name="expry_date" 
                                required="">
                        </div>
                        <div class="form-group aa">
                            <label for="text" class="col-form-label">Unit Consumed</label>
                            <input type="number" class="form-control" placeholder=" " name="unit" id="password1"
                                required="">
                        </div>
                        
                        <div class="right-w3l aa">
                            <input type="submit" class="form-control" id="cal" name="Calculate" value="Calculate">
                        </div>
                    </form>
                </div>

         <?php include_once("footer.php");
          ?>
    
    </body>
    </html>
    



<?php

$con=mysqli_connect('localhost','root','','tutorial');
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

 if(isset($_POST["Calculate"]))
{
 
$Bill_No= $_POST["Bill_No"];
 $month =$_POST["month"];
 $expiry_date =$_POST["expiry_date"];
 $unit =$_POST["unit"];
 $uname=$_SESSION["uname"];
$sel = "SELECT cost FROM update_cost";

    $fetched=mysqli_query($con,$sel);

    while ($row = $fetched->fetch_assoc()){
    $cost = $row['cost']; 
 // echo "$kwh";
}
$unit = $unit * $cost;
//echo "$amount";
$sql = "INSERT INTO bill (Username, bill_no,month,expiry_date,unit_consumed)
VALUES ('$uname', '$Bill_No', '$month','$expiry_date','$unit')";

echo "$sql";
 
if (mysqli_query($con, $sql)) {
    echo "<script> alert('Bill GENRATED')
    window.location='calculate_bill.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
?>

<?php
}
?>