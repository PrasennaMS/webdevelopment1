<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link href="bootstrap-5.1.3-dist\css\bootstrap.css" rel="stylesheet">
    <style>
        #ms{text-align:center;}
        body{
        /* color: white; */
        background-image:url("image/chakra 1.jpg");
        background-repeat: no-repeat;
        background-size: unset;
        background-position: center;
    }
    .sm{text-align: center;}
    h5{color: red;}
    </style>
</head>
<body><br>
    <div class="container-fluid"><hr>
        <div class="row">
        <h3 id="ms"><?php echo $_SESSION['tn']; ?> TRAIN - TICKET</h3>
                    <hr>
            <div class="col-6">
                <div class="sm details">
                    <h3>TRAIN NUMBER:</h3>
                    <h5> <?php echo $_SESSION['tno']; ?></h5><br>
                    <h3>FROM:</h3>
                    <h5> <?php echo $_SESSION['f']; ?></h5><br>
                    <h3>TO:</h3>
                    <h5> <?php echo $_SESSION['t']; ?></h5><br>
                    <h3>START TIME:</h3>
                    <h5><?php echo $_SESSION['st']; ?></h5><br>
                    <h3>DISTANCE:</h3>
                    <h5><?php echo $_SESSION['th']; ?></h5><br>
                    <h3>RUPEES:</h3>
                    <h5><?php echo $_SESSION['rs']; ?></h5><br>
                </div>
            </div>
            <div class="col-6 sm">
                    <h3>TRAIN NAME:</h3>
                    <h5> <?php echo $_SESSION['tn']; ?></h5><br>
                    <h3>JOURNEY DATE:</h3>
                    <h5> <?php echo  $_SESSION['jd1']; ?></h5><br>
                    <h3>PASSANGER NAME:</h3>
                    <h5> <?php echo  $_SESSION['name']; ?></h5><br>
                    <h3>BIRTH PREFERENCE:</h3>
                    <h5> <?php echo  $_SESSION['class']; ?></h5><br>
                    <h3>TOTAL NUMBER OF TICKETS:</h3>
                    <h5> <?php echo  $_SESSION['tc']; ?></h5><br>
                    <h3>TOTAL AMOUNT:</h3>
                    <h5>Rs <?php echo  $_SESSION['total']; ?></h5><br>
            </div>
        </div>
    </div>
</body>
</html>