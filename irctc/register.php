<?php
session_start();
?>
<html>
    <head>
        <title> Registration page</title>
        <link
        rel="stylesheet"
        href="bootstrap-5.1.3-dist\css\bootstrap.css">
          
        <link href="bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
         <link rel="stylesheet" href="fontawesome/css/all.css">

        <style>
          /* body
          {
            background-color: #eee;
            /* background-size: cover; */
          /* } */
          body
             {
                 /* background:linear-gradient(-90deg,white,black); */
                 background-image: linear-gradient(-90deg,#d38312,#a83279);
                 
             }
              

        </style>
    </head>
    <body>

<section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-2">Sign up</p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="">
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-2 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="name" class="form-control" placeholder="Your Name" required/>
                        <!-- <label class="form-label" for="form3Example1c">Your Name</label> -->
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-2 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" name="mail" class="form-control" placeholder="Your Email" required/>
                        <!-- <label class="form-label" for="form3Example3c">Your Email</label> -->
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-2 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" name="pass" class="form-control" placeholder="Your Password" required/>
                        <!-- <label class="form-label" for="form3Example4c">Password</label> -->
                      </div>
                    </div>
                   
  
                    <!-- <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-2 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" name="repass" class="form-control" placeholder="Repeat Your Password" required/>
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div> -->


                    <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-2 fa-fw"></i>

                      <div class="form-outline flex-fill mb-0">
                        
                      <select class="form-select" name="gender" style="width:290px;"  aria-label="Default select example">
                          <option selected>gender</option>
                          <option value="male">male</option>
                          <option value="female">female</option>
                      </select>
                      </div>
                    </div>



                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-address-card fa-lg me-2 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="tel" id="form3Example4cd"  name="phone"  class="form-control" placeholder="phone number" required pattern="[0-9]{10}"/>
                        <!-- <label class="form-label" for="form3Example4cd">Repeat your password</label> -->
                      </div>
                    </div>

                    <?php
                    $connect=mysqli_connect('localhost','root','','railway');
                    if(isset($_POST['button']))
                    {
                          $name=$_POST['name'];
                          $email=$_POST['mail'];
                          $pass=$_POST['pass'];
                          $gen=$_POST['gender'];
                          $num=$_POST['phone'];
                          
      $_SESSION['email']=$_POST['mail'];

                          mysqli_query($connect,"insert into registers(name,email,password,gender,phonenumber) values('$name','$email','$pass','$gen','$num') ");
                          
                          $i=mysqli_query($connect,"select * from registers");
                          echo '<meta http-equiv="refresh" content="1;URL=route.php">'; 
                    }

                    ?> 
                    <div class="d-flex justify-content-center mx-4 mb-lg-4">
                      <button type="submit" name="button" class="btn btn-primary btn-lg">Register</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
