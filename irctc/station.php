<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","railway");
    if($con){
        echo"connected";
    }
    else{
        echo"disconnected";
    }
    $i=mysqli_query($con,"select * from station");?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="bg-primary">
                <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">id</th>
      <th scope="col">station</th>
      <th scope="col">district</th>
      <th scope="col">state</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
       while($fet=mysqli_fetch_assoc($i))
       {
   ?>
   
   <td><?php echo $fet['id'];?></td>
      <td><?php echo $fet['stationname'];?></td>
      <td><?php echo $fet['district'];?></td>
      <td><?php echo $fet['state'];?></td>
    </tr>
   <?php
           // echo $fet['stationname'];
       }
       ?>
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
    
   
    
</body>
</html>