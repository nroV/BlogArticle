<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/./wave.css">
  <!-- <link rel="stylesheet" href="../css/./default.css"> -->
  <?php include_once(".././database/data.php") ?>
  <?php include_once(".././database/blogvalidation.php") ?>
  <?php include_once(".././database/postuser.php") ?>
  <title>Document</title>
  <style>
    @import url("./font/font.css");
    @import url("./https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    @import url("./css/media.css");
    @import url("./css/hover.css");
    @import url("./css/form.css");

    #top {
      /* padding-top: 200px;
        padding-bottom: 200px; */

      border-radius: 20px;
    }

    .gradient-form {
      padding-top: 70px;
      padding-bottom: 70px;
    }

    body {
      background-color: #e9ecef;
    }

    .gradient-custom-2 {
      /* fallback for old browsers */

      background-image: url("https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80");

      background-repeat: no-repeat;

      background-size: cover;

      background-position: center;

      background-color: rgba(0, 0, 0, 0.68);

      background-blend-mode: darken;

    }

    .form-outline {
      display: flex;
    }

    .text {
      opacity: 0.5;
    }

    /* .btn{
          background-color: #505492;
          color: white;
        } */
    .btn:hover {
      background-color: #1E2B58;
      color: white;
    }

    .gender {
      display: flex;
      margin-left: -15px;
    }

    .choose {
      margin-left: 70px;
    }

    input[type=text] {}

    input[type=radio] {
      height: 20px;
      width: 20px;
    }

    input[type=radio]:focus {
      background-color: #1E2B58;
    }

    input[type=text]:focus,
    input[type=email]:focus,
    input[type=password]:focus,
    input[type=file]:focus {
      border: 1px solid #1E2B58;
    }

    .btn-hov {
      background-color: white;
    }

    .btn-hov:hover {
      background-color: #1E2B58;
    }

    .btn-hov-one {
      background-color: white;
    }

    .row {
      height: 890px;
    }

    #login-here {

      display: none;
      position: relative;
      left: 1210px;
      bottom: 66px;


      transform: translateX(-50%);
      transform: translateY(-94%);
    }

    #pic {
      display: none;
      position: relative;
      transform: translateX(0%);


    }

    .over {
      position: relative;

    }

    #left-form {
      position: relative;




    }
  </style>
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <section class="h-100 gradient-form" id="register">

    <div class="container h-100 border-0" id="top">
      <div class="row d-flex justify-content-center align-items-center h-100 border-0" id="big">
        <div class="container con-in shadow-lg p-0">
          <div class="col">
            <div class="card rounded-3 text-black border-0">
              <div class="row g-0">
                <!-- col 1 -->

                <div class="col-form col-lg-7" id="left-form">
                  <div class="card-body mx-md-4">

                    <div class="text-center text-md-left">
                      <h1 class="mt-1 pb-1 font-weight-bold">Welcome, Rookie </h1>
                     
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-4 lead" style="font-size: 30px;">Register</h2>
                      <h6 class="text-left lead"><a href="../" class="text-decoration-none" style="font-size:18px;">Back Home</a></h6>
                    </div>
               
                    
                    <!-- form -->


                    <div class="container p-0" id="form-here">
                      <form method="post" action="?" style="display:block" id="forming" enctype="multipart/form-data">
                        <div class="form-row">
                          <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">

                            <label for="efirstname" class="form-label font-weight-normal">First
                              name</label>
                            <?php

                            if (isset($_POST['btn-submit'])) {
                              if ($_POST['firstname'] === "") {
                                echo "<span class='text-danger'>*Missing</span>";
                              }
                              //    echo "<script>
                              //     window.location.href='./index.php';
                            
                              // </script>";
                            


                            }
                            ?>

                            <div class="input-group">
                              <span class="in input-group-text bg-white"><i class="bi bi-bootstrap-fill"></i>
                              </span>

                              <input type="text" class="form-control" name="firstname" id="efirstname">
                            </div>

                          </div>
                          <div class="col">

                            <label for="elastname" class="form-label font-weight-normal">last name </label>
                            <?php

                            if (isset($_POST['btn-submit'])) {
                              if ($_POST['lastname'] === "") {
                                echo "<span class='text-danger'>*Missing</span>";
                              }
                              //    echo "<script>
                              //     window.location.href='./index.php';
                            
                              // </script>";
                            


                            }

                            ?>

                            <div class="input-group">
                              <span class="input-group-text bg-white">
                                <i class="bi bi-calendar3-week-fill"></i>
                              </span>

                              <input type="text" class="form-control" name="lastname" id="elastname">
                            </div>
                          </div>


                        </div>

                        <div class="form-user my-3">
                          <label for="username" class="form-label font-weight-normal">Email</label>
                          <div class="input-group">
                            <span class="input-group-text bg-white"> <i class="bi bi-envelope-fill"></i></span>
                            <input type="email" id="form2Example1" name="email" class="form-control" placeholder="Email"
                              required>
                          </div>
                        </div>
                        <div class="form-row form-row-image">
                          <div class="input-out">
                            <label for="" class="form-label font-weight-normal">
                              Upload your avatar profile
                            </label>

                          </div>
                          <div class="input-group mb-3">

                            <div class="custom-file">
                              <input type="file" name="file-up" class="custom-file-input" id="inputGroupFile01"
                                required>

                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

                            </div>
                          </div>
                        </div>


                        <div class="font-weight-normal" style="">Gender</div>

                        <div class="form-row align-items-center my-3">

                          <div class="form-check form-check-inline">

                            <input class="form-check-input" type="radio" name="radio-gender" id="inlineRadio1"
                              value="Male">
                            <label class="form-check-label lead" for="inlineRadio1" style="font-size: 16px;"
                              required="required">Male</label>
                          </div>
                          <div class="form-check form-check-inline mx-5">
                            <input class="form-check-input" type="radio" name="radio-gender" id="inlineRadio2"
                              value="Female">
                            <label class="form-check-label lead" for="inlineRadio2" style="font-size: 16px;"
                              required="required">Female</label>
                          </div>

                        </div>


                        <div class="form-user my-3">
                          <label for="username" class="form-label font-weight-normal">Create Username</label>
                          <label for="" class="form-label" style="font-size:28;">
                            <?php

                            if (isset($_POST['btn-submit'])) {
                              if ($_POST['username'] === "") {
                                echo "<span class='text-danger'>*provide username</span>";
                              }
                              //    echo "<script>
                              //     window.location.href='./index.php';
                            
                              // </script>";
                            


                            }

                            ?>
                          </label>
                          <div class="input-group">
                            <span class="input-group-text bg-white" for="pass"><i
                                class="bi bi-person-check-fill"></i></span>

                            <input type="text" class="form-control" name="username" id="username">
                          </div>
                        </div>


                        <div class="form-pass my-3">
                          <label for="pass" class="form-label font-weight-normal">Create Password</label>
                          <label for="" class="form-label" style="font-size:28;">
                            <?php

                            if (isset($_POST['btn-submit'])) {
                              if ($_POST['password'] === "") {
                                echo "<span class='text-danger'>*provide password</span>";
                              }
                              //    echo "<script>
                              //     window.location.href='./index.php';
                            
                              // </script>";
                            


                            }

                            ?>
                          </label>
                          <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-eye-fill"></i></span>

                            <input type="password" class="form-control" maxlength="10" name="password" id="pass">
                          </div>


                          <!-- //check password -->
                          <div class="form-check my-3 d-flex align-items-center justify-content-between">
                            <div class="form-show">
                              <input type="checkbox" class="form-check-input " id="showpass">

                              <label class="form-check-label font-weight-normal" for="showpass">show
                                password</label>
                            </div>
                            <div class="form-show">


                              <a href="./login.php"
                                class="text-dark text-decoration-none d-block d-md-none"><strong>Already have an
                                  account?</strong></a>
                            </div>

                          </div>

                        </div>


                        <!-- login part -->
                        <div class="text-center pt-1 mb-5 pb-1">
                          <input type="submit" class="submit-btn btn btn-outline-primary form-control " value="Sign Up"
                            name="btn-submit" style="border: 1px solid white;">
                        </div>

                      </form>

                      <form action="" method="POST" id="hidden-form" style="display: none;">
                        <div class="form-top" style="">
                          <div class="form-group">
                            <h3 class="text-left">Login</h3>
                            <label class="my-3" for="exampleInputEmail1">Username</label>
                            <label class="my-3" for="">
                              <?php

                              if (isset($_POST["btn-login"])) {
                                if ($_POST['username'] == '') {
                                  echo "<span class='text-danger'>*Please provide your name</span>";
                                }
                              }
                              ?>
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="username"
                              placeholder="Username" name="username">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Passwords</label>
                            <label class="my-3" for="">
                              <?php

                              if (isset($_POST["btn-login"])) {
                                if ($_POST['password'] == '') {
                                  echo "<span class='text-danger'>*Please provide your password</span>";
                                }
                              }
                              ?>
                            </label>
                            <!-- showpassword part -->


                            <input type="password" class="form-control" id="pw"
                              placeholder="Password" name="password" maxlength="10">
                          </div>
                              <!-- showpassword login part -->
                          <div class="form-check d-flex justify-content-between">
                            <input type="checkbox" class="form-check-input" id="chbox_two">
                            <label class="form-check-label" for="exampleCheck1">show password</label>
                            <a href="./CRUD/sendemail.php"><label class="form-check-label text-dark" for="">forgot
                                password</label></a>
                          </div>

                          <input type="submit" class="form-control my-3" name="btn-login" id="login" value="login">
                        </div>

                      </form>
                    </div>



                  </div>

                </div>
                <!-- col2 picture -->

                <div class="col gradient-custom-2 d-lg-flex flex-column  d-md-none d-sm-none" style="display: none;"
                  id="pic">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4 display-6 text-center font-weight-normal text-center text-md-left d-md-left"
                      style="margin-top: 100px;">Already have an account?</h4>
                    <p class="lead mb-0 text-justify" style="margin-top: 50px;" id="content">Lorem ipsum dolor sit
                      amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua quip ex ea commodo consequat Ut enim ad minim
                      veniam, quis nostrud
                      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>

                  <div class="container text-center" style="margin-bottom: 100px;">
                    <!-- <button class="btn-hov-one btn w-75 font-weight-bold" id="login-btn" style="display: none;">Login</button> -->
                    <button class="btn-hov btn w-75 font-weight-bold" id="signup-btn"
                      style="font-size: 20px;">Login</button>
                    <button class="btn-log btn-hov btn w-75 font-weight-bold" id="login-btn" name="btn-login"
                      style="display: none;font-size: 20px;">Sign Up</button>

                  </div>
                  <div class="container text-center" style="margin-bottom: 10px;">
                    <!-- <button class="btn-hov-one btn w-75 font-weight-bold" id="login-btn" style="display: none;">Login</button> -->
                    <button class="btn-hov btn w-75 font-weight-bold d-none" id="first-login"
                      style="font-size: 20px;"><a href="login.html"></a></button>


                  </div>

                </div>



              </div>
            </div>
          </div>
        </div>

        <div class="custom-shape-divider-bottom-1675136817 p-0">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
              class="shape-fill"></path>
          </svg>
        </div>

      </div>

    </div>
    <!-- register -->

  </section>


  <script src="../javascript/ja.js"></script>
 
  <script src="js1.js"></script>
  <script src="../javascript/password.js"></script>

</body>

</html>

<?php


if (isset($_POST["btn-login"])) {

  $user = $_POST["username"];
  $pass = $_POST["password"];

  if ($user === '' || $pass === '') {
    echo "<script> 
            window.alert('Please check your information again');

      </script>";
  } else {
    $sql_two = "SELECT * from tbl_user;";

    $result = mysqli_query($db, $sql_two);
    if (!$result) {
      die("error occur");
    }

    while ($row = mysqli_fetch_assoc($result)) {
      if ($user == $row["UserName"] && $pass == $row["Password"]) {
        $userid = $row["UserID"];
        $fullname = $row["FirstName"] . "" . $row["LastName"];
        echo "<script> 
                          window.location.href='./page1.php?UserID=$userid&mypage=1';
      
              </script>";

        exit();


      }



    }
  }









}

?>