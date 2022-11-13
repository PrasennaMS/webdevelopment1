<?php
session_start();
?>
<html>
    <head>
        <title>User Login Page</title>
        <link
        rel="stylesheet"
        href="bootstrap-5.1.3-dist\css\bootstrap.css">
          
        <link href="bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
         <link rel="stylesheet" href="fontawesome/css/all.css">
 

        <style>
            body
             {
                 background-image: linear-gradient(-90deg,#d38312,#a83279);
             }
             
             </style>
    </head>
    <body >

<section class="vh-100 gradient-custom">
    <div class="container py-4 h-100">
    <form class="" method="POST" action="">

      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class=" col-12 col-md-8 col-lg-6 col-xl-5">

          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-2 text-center">
  
              <div class="mb-md-2 mt-md-2 pb-5">
              

                <h2 class="fw-bold mb-4 text-uppercase">USER Login</h2>
                <p class="text-light-50 mb-5">Please enter your login and password!</p>
  
                <div class="form-outline form-white mb-3">
                  <input type="email" id="typeEmailX" name="mail"  class="form-control form-control-lg" placeholder="Email" required/>
                 
                  <!-- <label class="form-label" for="typeEmailX">Email</label> -->
                </div>
                
  
                <div class="form-outline form-white mb-3">
                  <input type="password" id="typePasswordX" name="pass"  class="form-control form-control-lg" placeholder="Password" required />
              
                  <!-- <label class="form-label" for="typePasswordX">Password</label> -->
                </div>
                <input class="btn btn-outline-light  btn-lg px-5" name="log" type="submit" value="login">
              </div>
  
              <div class="" >
                <p class=" mb-2">Don't have an account? <a href="register.php" class="text-light-50 fw-bold">Sign Up</a></p>
              </div>

              
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </section>
  </body>
  </html>

  <?php
$connect=mysqli_connect('localhost','root','','railway');
  if(isset($_POST['log']))
  {
  
    $i=mysqli_query($connect,"select * from registers where email='$_POST[mail]' and password ='$_POST[pass]'");
    if(mysqli_num_rows($i)==1)
    {
      $_SESSION['email']=$_POST['mail'];
      // echo '<script>alert("gfshdvfxbncvdg");</script>';
          echo '<meta http-equiv="refresh" content="1;URL=route.php">';  
    }
    else{echo '<script>alert("INVALID USER OR PASSWORD");</script>';}
  }
  
  
  ?>