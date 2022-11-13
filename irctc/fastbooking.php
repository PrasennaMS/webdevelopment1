<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    .ms{border-radius: 20px;background:white;}
    .msp{text-decoration: transparent; }
    body{
        
        background-image:linear-gradient(#000,#0000,#000),url("image/train bg.jpg");
        background-repeat:no-repeat;
        background-size:cover;
        height:120vh;
    }
    .details{

        border-radius:10px;
        box-shadow:5px 5px 10px black;
    }
</style>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <div class="bg-light p-4 details ms">
                    <hr><hr>
                    <h1>TRAIN DETAILS</h1>
                    <hr><hr>

                    <?php
                    $con=mysqli_connect("localhost","root","","railway");
                    if(isset($_POST['sup']))
                    {
                    $g=mysqli_query($con,"select * from route where trainno ='$_POST[sup]' ");
                    $row=mysqli_fetch_assoc($g);
                    $_SESSION['tno']=$row['trainno'];
                    $_SESSION['tn']=$row['trainname'];
                    $_SESSION['f']=$row['from'];
                    $_SESSION['t']=$row['to'];
                    $_SESSION['st']=$row['starttime'];
                    $_SESSION['et']=$row['endtime'];
                    $_SESSION['th']=$row['travelhours'];
                    $_SESSION['km']=$row['km'];
                    $_SESSION['rs']=$row['rupees'];
                    }
                    ?>
                    <form class="dorm-group" method="POST" action="fastbooking.php">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                            <h3>TRAIN NUMBER</h3>
                            <input type="text" class="msp" value="<?php echo  $row['trainno']; ?>" name="1" disabled/>
                            <h3>TRAIN NAME</h3>
                            <input type="text" class="msp" value="<?php echo  $row['trainname']; ?>" name="2" disabled/>
                            <h3>FROM</h3>
                            <input type="text" class="msp" value="<?php echo  $row['from']; ?>" name="3" disabled/>
                            <h3>TO</h3>
                            <input type="text" class="msp" value="<?php echo  $row['to']; ?>" name="4" disabled/>
                        </div>
                    <div class="col-6">
                            <h3>START TIME</h3>
                            <input type="text" class="msp" value="<?php echo  $row['starttime']; ?>" name="5" disabled/>
                            <h3>END TIME</h3>
                            <input type="text" class="msp" value="<?php echo  $row['endtime']; ?>" name="6" disabled/>
                            <h3>HOURS</h3>
                            <input type="text" class="msp" value="<?php echo  $row['travelhours']; ?>" name="7" disabled/>
                            <h3>DISTANCE</h3>
                            <input type="text" class="msp" value="<?php echo  $row['km']; ?>" name="8" disabled/>
                            <h3>RUPEES</h3>
                            <input type="text" class="msp" value="<?php echo  $row['rupees']; ?>" name="9" disabled/>    
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-5 col-lg-6 col-md-6 ms">
                    <div class="row ms">
                        <div class="col-lg-6 col-md-6">
                            <span><h3>PASSANGER NAME:</h3></span>
                            <input type="text" class="form-control" placeholder="enter your name" name="passanger_name1"required/>
                            <span><h3>AGE:</h3></span>
                            <input type="number" class="form-control" placeholder="enter your age" name="age1"required/>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <span><h3>JOURNEY DATE:</h3></span>
                            <input type="date" class="form-control"   name="journeydate1" id="demo" required/>
                            <span><h3>BOOKING DATE:</h3></span>
                            <input type="date" class="form-control" id="demo1" name="bookingdate1"required/><br>
                            
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <span><h3>GENDER:</h3></span>
                            <input type="radio" value="MALE" name="gender1"required/><span> MALE</span>
                            <input type="radio" value="FEMALE" name="gender1"required/><span> FEMALE</span><br>
                            <input type="radio" value="OTHERS" name="gender1"required/><span> OTHERS</span><hr>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <span><h3>BERTH PREFERENCE:</h3></span>
                            <input type="radio" value="UPPER" name="class1"required/><span> UPPER</span>
                            <input type="radio" value="CENTER" name="class1"required/><span> CENTER</span>
                            <input type="radio" value="LOWER" name="class1"required/><span> LOWER</span>
                            <input type="radio" value="SIDE UPPER" name="class1"required/><span> SIDE UPPER</span>
                            <input type="radio" value="SIDE LOWER" name="class1"required/><span> SIDE LOWER</span><hr>
                        </div>
                        <div class="col-12">
                            <span><h3>TOTAL MEMBERS:</h3></span>
                            <input type="number" class="form-control" placeholder="enter your value" name="ticketcount1"required/><br>
                        </div>
                            <input type="submit" class="form-control bg-warning btn-lg" value="SUBMIT" name="submit"/>
                        </div></div>
                    </form>
                    <script>
            var date = new Date();
            var tdate = date.getDate() ;
            var hdate = date.getDate();
            var month = date.getMonth() + 1; 
              if(tdate < 10){
                tdate = "0" + tdate;
              }
              if(month < 10){
                month = "0" + month;
              }
              var year = date.getUTCFullYear();
              var minDate = year + "-" + month + "-" + tdate;
              var monDate = year + "-" + month + "-" + hdate;
              document.getElementById("demo").setAttribute("min", minDate);
              document.getElementById("demo1").setAttribute("min", monDate);
              console.log(minDate);
              console.log(monDate);
        </script>
                        </div>

            </div>
        </div>
    </div>
</body>
</html>
<?php
$connect=mysqli_connect('localhost','root','','railway');
if(isset($_POST['submit']))
{
    $_SESSION['name']=$_POST['passanger_name1'];
    $_SESSION['age']=$_POST['age1'];
    $_SESSION['jd1']=$_POST['journeydate1'];
    $_SESSION['bd']=$_POST['bookingdate1'];
    $_SESSION['gen']=$_POST['gender1'];
    $_SESSION['class']=$_POST['class1'];
    $_SESSION['tc']=$_POST['ticketcount1'];
    $total=$_SESSION['rs']*$_POST['ticketcount1'];
    $_SESSION['total']=$total;
    $sql=mysqli_query($connect,"insert into fast_booking values ('$_POST[passanger_name1]','$_POST[age1]','$_POST[journeydate1]','$_POST[bookingdate1]','$_POST[gender1]','$_POST[class1]','$_POST[ticketcount1]','$total')");
    $sql=mysqli_query($connect,"insert into fastbooking values ('$_SESSION[tno]','$_SESSION[tn]','$_SESSION[f]','$_SESSION[t]','$_SESSION[st]','$_SESSION[et]','$_SESSION[th]','$_SESSION[km]','$_SESSION[rs]','$_POST[passanger_name1]','$_POST[age1]','$_POST[journeydate1]','$_POST[bookingdate1]','$_POST[gender1]','$_POST[class1]','$_POST[ticketcount1]','$total')");
    // mail
    $mail=$_SESSION['email']
$to_email = "$mail";
$subject = "Train ticket booked";
$body = "successfully ticket booked";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

    // header
          echo '<meta http-equiv="refresh" content="1;URL=bill.php">'; 
}
?>