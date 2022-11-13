<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link
        rel="stylesheet"
        href="bootstrap-5.1.3-dist\css\bootstrap.css">
    <style>
        #value{font-weight:900;}
        #m1{text-align: center;}
    </style>
</head>
<body>
<form method="POST" action="adminbutton.php">
        <div class="container-fluid">
            <div class="row " id="m1" >
                <div class="col-lg-4 col-md-4 d-grid p-5 ms">
                    <input type="submit" class="btn btn-primary btn-lg" value="TRAIN DETAILS" name="submit1" >
                </div>
                <div class="col-lg-4 col-md-4 d-grid p-5">
                    <input type="submit" class="btn btn-success btn-lg" value="USER DETAILS" name="button1">
                </div>
                <div class="col-lg-4 col-md-4 d-grid p-5">
                    <input type="submit" class="btn btn-warning btn-lg" value="BOOKING DETAILS" name="button2">
                </div>
                <?php
                if(isset($_POST['submit1'])){
                    ?>
                    <div class="col-12">
                    <table class="table table-bordered ">
                        <thead class="bg-primary">
                            <tr>
                                <th><h4>TRAIN NUMBER</h4></th>
                                <th><h4>TRAIN NAME</h4></th>
                                <th><h4>FROM</h4></th>
                                <th><h4>To</h4></th>
                                <th><h4>START TIME</h4></th>
                                <th><h4>END TIME</h4></th>
                                <th><h4>TRAVEL HOURS</h4></th>
                                <th><h4>KILO METER</h4></th>
                                <th><h4>PRICE</h4></th>
                                <th><h4>RATING</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','railway');
                                $sql=mysqli_query($connect,"select * from  route");
                                
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['trainno'];?> </td>
                            <td><?php echo $row['trainname'];?> </td>
                            <td><?php echo $row['from'];?> </td>
                            <td><?php echo $row['to'];?> </td>
                            <td><?php echo $row['starttime'];?> </td> 
                            <td><?php echo $row['endtime'];?> </td>
                            <td><?php echo $row['travelhours'];?> </td>
                            <td><?php echo $row['km'];?> </td>
                            <td><?php echo $row['rupees'];?> </td>
                            <td><?php echo $row['rating'];?> </td>      
                        
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>
                    <?php
                    }

                if(isset($_POST['button1'])){
                ?>
                <div class="col-12">
                    <table class="table table-bordered ">
                        <thead class="bg-success">
                            <tr>
                                <th><h4>NAME</h4></th>
                                <th><h4>EMAIL</h4></th>
                                <th><h4>PASSWORD</h4></th>
                                <th><h4>GENDER</h4></th>
                                <th><h4>PHONE NUMBER</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','railway');
                                $sql=mysqli_query($connect,"select * from  registers");
                                
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['name'];?> </td>
                            <td><?php echo $row['email'];?> </td>
                            <td><?php echo $row['password'];?> </td>
                            <td><?php echo $row['gender'];?> </td>
                            <td><?php echo $row['phonenumber'];?> </td>     
                        
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>
                    <?php
                    }
                    ?>
                <?php
                if(isset($_POST['button2'])){
                ?>
                <div class="col-12">
                    <h1>NORMAL BOOKING</h1>
                    <table class="table table-bordered ">
                        <thead class="bg-warning">
                            <tr>
                                <th><h4>PASSANGER NAME</h4></th>
                                <th><h4>AGE</h4></th>
                                <th><h4>JOURNEY DATE</h4></th>
                                <th><h4>BOOKING DATE</h4></th>
                                <th><h4>GENDER</h4></th>
                                <th><h4>BIRTH PREFERENCE</h4></th>
                                <th><h4>TOTAL TICKETS THEY WANT</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','railway');
                                $sql=mysqli_query($connect,"select * from  train_registeraton");
                                
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['passanger_name'];?> </td>
                            <td><?php echo $row['age'];?> </td>
                            <td><?php echo $row['journey_date'];?> </td>
                            <td><?php echo $row['booking_date'];?> </td>
                            <td><?php echo $row['gender'];?> </td>     
                            <td><?php echo $row['berth_preference'];?> </td>
                            <td><?php echo $row['total_ticket_they_want'];?> </td>
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>
                    <div class="col-12">
                    <h1>SPEED BOOKING</h1>
                    <table class="table table-bordered ">
                        <thead class="bg-warning">
                            <tr>
                                <th><h4>PASSANGER NAME</h4></th>
                                <th><h4>AGE</h4></th>
                                <th><h4>JOURNEY DATE</h4></th>
                                <th><h4>BOOKING DATE</h4></th>
                                <th><h4>GENDER</h4></th>
                                <th><h4>BIRTH PREFERENCE</h4></th>
                                <th><h4>TOTAL TICKETS THEY WANT</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connect=mysqli_connect('localhost','root','','railway');
                                $sql=mysqli_query($connect,"select * from fast_booking ");
                                
                                while($row=mysqli_fetch_assoc($sql))
                                {
                        ?>
                        <tr>
                            <td><?php echo $row['name'];?> </td>
                            <td><?php echo $row['age'];?> </td>
                            <td><?php echo $row['journey_date'];?> </td>
                            <td><?php echo $row['booking_date'];?> </td>
                            <td><?php echo $row['gender'];?> </td>     
                            <td><?php echo $row['class'];?> </td>
                            <td><?php echo $row['total_ticket_they_want'];?> </td>
                        <?php
                                }
                        ?>
                        </tr>
                        </tbody>
                    </table>
                    <?php
                    }
                    ?>
            </div>
            <a href="index.php" id="m1"><h1>-BACK-</h1></a>
        </div>
    </form>
    </body> 
</html>
