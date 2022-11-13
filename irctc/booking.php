<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normal Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    .ms{border-radius: 20px;background:white;}
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
                    if(isset($_POST['booking']))
                    {
                    $g=mysqli_query($con,"select * from route where trainno ='$_POST[booking]' ");
                    $row=mysqli_fetch_assoc($g);
                    $_SESSION['tno1']=$row['trainno'];
                    $_SESSION['tn1']=$row['trainname'];
                    $_SESSION['f1']=$row['from'];
                    $_SESSION['t1']=$row['to'];
                    $_SESSION['st1']=$row['starttime'];
                    $_SESSION['et1']=$row['endtime'];
                    $_SESSION['th1']=$row['travelhours'];
                    $_SESSION['km1']=$row['km'];
                    $_SESSION['rs1']=$row['rupees'];
                    }
                    ?>
                <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                            <h3>TRAIN NUMBER</h3>
                            <h5> <?php echo  $row['trainno']; ?></h5>
                            <h3>TRAIN NAME</h3>
                            <h5> <?php echo  $row['trainname']; ?></h5>
                            <h3>FROM</h3>
                            <h5> <?php echo  $row['from']; ?></h5>
                            <h3>TO</h3>
                            <h5> <?php echo  $row['to']; ?></h5>
                        </div>
                    <div class="col-6">
                            <h3>START TIME</h3>
                            <h5><?php echo  $row['starttime']; ?></h5>
                            <h3>END TIME</h3>
                            <h5> <?php echo  $row['endtime']; ?></h5>
                            <h3>HOURS</h3>
                            <h5><?php echo  $row['travelhours']; ?></h5>
                            <h3>DISTANCE</h3>
                            <h5><?php echo  $row['km']; ?></h5>
                            <h3>RUPEES</h3>
                            <h5><?php echo  $row['rupees']; ?></h5>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="p-5 col-lg-6 col-md-6 ms">
                    <form class="dorm-group" method="POST" action="booking.php">
                    <div class="row ms">
                        <div class="col-lg-6 col-md-6">
                            <span><h3>PASSANGER NAME:</h3></span>
                            <input type="text" class="form-control" placeholder="enter your name" name="passanger_name"required/>
                            <span><h3>AGE:</h3></span>
                            <input type="number" class="form-control" placeholder="enter your age" name="age"required/>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <span><h3>JOURNEY DATE:</h3></span>
                            <input type="date" class="form-control"   name="journeydate" id="demo" required/>
                            <span><h3>BOOKING DATE:</h3></span>
                            <input type="date" class="form-control" id="demo1" name="bookingdate"required/><br>
                            
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <span><h3>GENDER:</h3></span>
                            <input type="radio" value="MALE" name="gender"required/><span> MALE</span>
                            <input type="radio" value="FEMALE" name="gender"required/><span> FEMALE</span><br>
                            <input type="radio" value="OTHERS" name="gender"required/><span> OTHERS</span><hr>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <span><h3>BERTH PREFERENCE:</h3></span>
                            <input type="radio" value="UPPER" name="class"required/><span> UPPER</span>
                            <input type="radio" value="CENTER" name="class"required/><span> CENTER</span>
                            <input type="radio" value="LOWER" name="class"required/><span> LOWER</span>
                            <input type="radio" value="SIDE UPPER" name="class"required/><span> SIDE UPPER</span>
                            <input type="radio" value="SIDE LOWER" name="class"required/><span> SIDE LOWER</span><hr>
                        </div>
                        <div class="col-12">
                            <span><h3>TOTAL MEMBERS:</h3></span>
                            <input type="number" class="form-control" placeholder="enter your value" name="ticketcount"required/><br>
                        </div>
                            <input type="submit" class="form-control bg-warning btn-lg" value="SUBMIT" name="submit"/>
                        </div></div>
                    </form>
                    <script>
            var date = new Date();
            var tdate = date.getDate()+5;
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
    $_SESSION['name1']=$_POST['passanger_name'];
    $_SESSION['age1']=$_POST['age'];
    $_SESSION['jd11']=$_POST['journeydate'];
    $_SESSION['bd1']=$_POST['bookingdate'];
    $_SESSION['gen1']=$_POST['gender'];
    $_SESSION['class1']=$_POST['class'];
    $_SESSION['tc1']=$_POST['ticketcount'];
    $total=$_SESSION['rs']*$_POST['ticketcount'];
    $_SESSION['total1']=$total;
    $sql=mysqli_query($connect,"insert into train_registeraton values ('$_POST[passanger_name]','$_POST[age]','$_POST[journeydate]','$_POST[bookingdate]','$_POST[gender]','$_POST[class]','$_POST[ticketcount]')");
    $sql=mysqli_query($connect,"insert into normalbooking values ('$_SESSION[tno1]','$_SESSION[tn1]','$_SESSION[f1]','$_SESSION[t1]','$_SESSION[st1]','$_SESSION[et1]','$_SESSION[th1]','$_SESSION[km1]','$_SESSION[rs1]','$_POST[passanger_name1]','$_POST[age1]','$_POST[journeydate1]','$_POST[bookingdate1]','$_POST[gender1]','$_POST[class1]','$_POST[ticketcount1]','$total')");
    // header
          echo '<meta http-equiv="refresh" content="1;URL=bill1.php">'; 
}
?>