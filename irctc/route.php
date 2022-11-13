<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Route</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    table{
        border-radius:10px 10px 10px 10px;
        background-color:gray;
        box-shadow:5px 5px 15px black;
    }
    body{
        background-image:linear-gradient(#000,#0000,#000),url("image/train bg.jpg");
        background-repeat:no-repeat;
        background-size:cover;
        height:680px;
    }
   
</style>
<body>
    <form class="dorm-group" action="" method="POST">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 " >
                <div class="row ">
<div class="col-6 offset-3"><br>
                <label for="exampleFormControlInput1" class="form-label text-light">FROM</label>
                <select class="form-control" name="from">
                    <?php
                    $con=mysqli_connect('localhost','root','','railway');
                    $select = mysqli_query($con,"select * from route");
                    while ($row=mysqli_fetch_assoc($select))
                    {
                    ?>
                    <option value="<?php echo "$row[from]" ?>" > <?php echo "$row[from]" ?></option>
                    <?php } ?>
                </select>
  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label text-light">TO</label>
      <select name="to" class="form-control">
                    <?php
                    $con=mysqli_connect('localhost','root','','railway');
                    $select = mysqli_query($con,"select * from route");
                    while ($row=mysqli_fetch_assoc($select))
                    {
                    ?>
                    <option value="<?php echo "$row[to]" ?>" > <?php echo "$row[to]" ?></option>
                    <?php } ?>
                </select>
    </div>
</div>

<div class="row">
    
    <div class="col-6 offset-5">
        <input type="submit" value="search" class="btn btn-light" name="sub">
    </div>
</form>
</div> 
</div>

</div>
</div>
</div><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
    <?php
        
        if(isset($_POST['sub']))
        {
            
            $f=$_POST['from'];
            $t=$_POST['to'];
       

         $i=mysqli_query($con,"select * from route");
         ?>  
          <thead>
    <tr class="text-light">
      <!-- <th scope="col">#</th> -->
      <th scope="col">train no</th>
      <th scope="col">train name</th>
      <th scope="col">from</th>
      <th scope="col">to</th>
      <th scope="col">start time</th>
      <th scope="col">end time</th>
      <th scope="col">hours</th>
      <th scope="col">distance</th>
      <th scope="col">rupees</th>
      <th scope="col">rating</th>
      <th scope="col">booking</th>
      <th scope="col">speed book</th>
      
    </tr>
  </thead>
   <tbody>
       <?php  
 
 while($fet=mysqli_fetch_assoc($i))
 
 {
     
     ?>

 <?php
 
 if($f==$fet['from']&&$t==$fet['to'])
 {
     ?>


<tr class="text-light">
     <td><?php echo $fet['trainno'];?></td>
     <td><?php echo $fet['trainname'];?></td>
     <td><?php echo $fet['from'];?></td>
     <td><?php echo $fet['to'];?></td>
     <td><?php echo $fet['starttime'];?></td>
     <td><?php echo $fet['endtime'];?></td>
     <td><?php echo $fet['travelhours'];?></td>
     <td><?php echo $fet['km'];?></td>
     <td><?php echo $fet['rupees'];?></td>
     <td><?php echo $fet['rating'];?></td>
     <form action="booking.php" method="POST">
     <td><button type="submit" value="<?php echo $fet['trainno'];?>" name="booking"  >booking</button></td>
     </form>
     <form action="fastbooking.php" method="POST">
     <td><button type="submit" value="<?php echo $fet['trainno'];?>" name="sup">speed book</button></td>
 </form>
     
     </tr >
     <?php
if(isset($_POST['booking']))
{
        
}
if(isset($_POST['sup']))
{
//     echo '<script>alert("gfshdvfxbncvdg");</script>';
}

     }
                    }
                    
                } 
               
                ?>
                </tbody>
                </table>
            </div>
           
        </div>
    </div>
</body>
</html>