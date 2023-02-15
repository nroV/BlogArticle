<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php require_once("./database/data.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
      $(document).ready(function(){

                $("#readmore").click(()=>{
           

                     $(".hidden-container").css("display","block")
                     .slideDown("slow");
                 
                })

            });
    </script>

</head>
<style>
    @import url("./font/font.css");
    @import url("./https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    @import url("./css/media.css");
    @import url("./css/hover.css");
    @import url("./css/form.css");



    nav {
        background-color: #1E2B58;

    }

    ul li:last-child {
        border-radius: 25px;
    }

    #postblog {
        background: rgba(0, 0, 0, 0.65) url("https://images.unsplash.com/photo-1661956602139-ec64991b8b16?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=665&q=80");
        background-position: center;
        background-attachment: scroll;
        background-size: cover;
        background-blend-mode: darken;
        color: white;
        margin-top: 100px;
        margin-bottom: 100px;
        padding: 15px;
    }

    body {
        overflow: visible;
        scroll-behavior: smooth;
        animation: onloadhere 1s linear ;
        animation-delay: 0s;
     
    }

   @keyframes onloadhere {
    from{
            opacity: 0;
    }   
    to{
        opacity: 1
   }
   }
    html {
  scroll-behavior: smooth;
}
</style>

<body>
    <!-- successsignuppop -->
    <!-- popuphere -->
    <div class="modal fade" id="qsign" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content d-flex justify-content-center">
                <div class="modal-header text-center"
                    style="background-color: #1E2B58; border-radius: 0; align-items: center;">
                    <div class="card-lead lead text-center text-white font-weight-bold" style="font-size: 26px;">Become
                        a member for Free</div>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body p-3 border-0">


                    <div class="card border-0">

                        <div class="card-head lead my-4 " style="font-size:medium;">


                            <div class="img-body text-center">
                                <p class="lead font-weight-bold display-5 text-center" style="font-size: 30px;">Register
                                    to get blog daily and exclusive content</p>
                                <img src="./image/67084-blogging-writing-typing.gif" alt=""
                                    class="img-fluid d-none d-md-block" width="auto" height="380px"
                                    style="position: relative; top: 0px;">

                            </div>



                        </div>
                        <div class="card-form">
                <form action="#" class="form my-1" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">

                                        <label for="efirstname" class="form-label display-6 font-weight-bold">First
                                            name</label>
                                        <div class="input-group">
                                            <span class="in input-group-text bg-white"><i
                                                    class="bi bi-bootstrap-fill"></i>
                                            </span>

                                            <input type="text" class="form-control" name="firstname" id="efirstname">
                                        </div>

                                    </div>
                                    <div class="col">

                                        <label for="elastname" class="form-label font-weight-bold">last name </label>

                                        <div class="input-group">
                                            <span class="input-group-text bg-white">
                                                <i class="bi bi-calendar3-week-fill"></i>
                                            </span>

                                            <input type="text" class="form-control" name="lastname" id="elastname">
                                        </div>
                                    </div>

                                </div>
                                <!-- validation on use -->
                                <!-- upload image -->
               
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label font-weight-bold" style="font-size:28;">
                                            <?php

                                            if (isset($_POST['btn-submit'])) {
                                                if ($_POST['firstname'] === "") {
                                                    echo "<span class='text-danger'>*provide firstname</span>";
                                                }
                                                //    echo "<script>
                                                //     window.location.href='./index.php';
                                            
                                                // </script>";
                                            


                                            }

                                            ?></label>


                                    </div>


                                    <div class="col">
                                        <label for="" class="form-label font-weight-bold" style="font-size:28;"> <?php

                                        if (isset($_POST['btn-submit'])) {
                                            if ($_POST['lastname'] === "") {
                                                echo "<span class='text-danger'>*provide lastname</span>";
                                            }
                                            //    echo "<script>
                                            //     window.location.href='./index.php';
                                        
                                            // </script>";
                                        


                                        }

                                        ?></label>
                                    </div>
                                </div>

                                <div class="form-row form-row-image">
                                    <div class="input-out">
                                        <label for="" class="form-label font-weight-bold">
                                            Upload your avatar profile
                                        </label>
                                    </div>
                                    <div class="input-group mb-3">
                                    
                                        <div class="custom-file">
                                            <input type="file" name="file-up" class="custom-file-input" id="inputGroupFile01" >
                                            <label class="custom-file-label" for="inputGroupFile01" >Choose file</label>
                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label font-weight-bold" style="font-size:28;">
                                               <?php 
                                                 if (isset($_POST["btn-submit"])) {

                                                        $filename = $_FILES["file-up"]["name"];
                                                        $source =$_FILES["file-up"]["tmp_name"];
                                                        $size   =$_FILES["file-up"]["size"];
                                                        if($size <= 0){
                                                        echo "<span class='text-danger'>*missing files upload</span>";
                                                        }
                                                    }
                                                     
                                            ?></label>


                                    </div>

                                </div>

                                <div class="form-radio my-3">
                                    <label for="" class="form-label font-weight-bold"
                                        style="font-size:28;">Gender</label>
                                    <div class="radio-group d-flex align-items-center">
                                        <label for="cmale" class="form-label">Male</label>
                                        <input type="radio" class="form-control" name="radio-gender" value="Male"
                                            id="cmale" required="required">
                                        <label for="cfemale" class="form-label">Female</label>
                                        <input type="radio" class="form-control" name="radio-gender" value="Female"
                                            id="cfemale" required="required">
                                    </div>
                                </div>





                                <div class="form-email my-3">
                                    <label for="eemail" class="form-label font-weight-bold">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>

                                        <input type="email" class="form-control" required name="email" id="eemail">
                                    </div>
                                </div>




                                <div class="form-user my-3">
                                    <label for="username" class="form-label font-weight-bold">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white" for="pass"><i
                                                class="bi bi-person-check-fill"></i></span>

                                        <input type="text" class="form-control" name="username" id="username">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label font-weight-bold" style="font-size:28;">
                                            <?php

                                            if (isset($_POST['btn-submit'])) {
                                                if ($_POST['username'] === "") {
                                                    echo "<span class='text-danger'>*provide username</span>";
                                                }
                                                //    echo "<script>
                                                //     window.location.href='./index.php';
                                            
                                                // </script>";
                                            


                                            }

                                            ?></label>


                                    </div>

                                </div>

                                <div class="form-pass my-3">
                                    <label for="pass" class="form-label font-weight-bold">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="bi bi-eye-fill"></i></span>

                                        <input type="password" class="form-control" maxlength="10" name="password"
                                            id="pass">
                                    </div>
                                    <div class="row">



                                        <div class="col">
                                            <label for="" class="form-label font-weight-bold" style="font-size:28;">
                                                <?php

                                                if (isset($_POST['btn-submit'])) {
                                                    if ($_POST['password'] === "") {
                                                        echo "<span class='text-danger'>*provide password</span>";
                                                    }
                                                    //    echo "<script>
                                                    //     window.location.href='./index.php';
                                                
                                                    // </script>";
                                                


                                                }

                                                ?></label>
                                        </div>
                                    </div>

                                    <!-- //check password -->
                                    <div class="form-check my-3 d-flex align-items-center">
                                        <input type="checkbox" class="form-check-input" id="showpass">

                                        <label class="form-check-label font-weight-bold" for="showpass">show
                                            password</label>
                                    </div>

                                </div>


                                <br>

                                <input type="submit" class="submit-btn btn btn-outline-primary form-control"
                                    value="Sign Up" name="btn-submit" data-target="#succeed" data-toggle="modal">

                            </form>
                            <!-- form validation -->

                        </div>
                    </div>
                    <div>
                        <?php
                        include_once("./database/postuser.php")







                            ?>
                    </div>

                    <!-- already have an account? -->
                    <div class="d-flex justify-content-around my-3">
                        <div class="">Already have an account? <span class="font-weight-bold"
                                style="color: #1E2B58;"><a href="./html/login2.php" class="text-decoration-none"   style="color: #1E2B58;">Login</a></span></div>

                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- header navi -->

    <section class="topbar sticky-top" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000">
        <nav class="navbar navbar-expand-lg navbar-dark p-3 sticky-top">


            <span class="navbar-brand lead text-white"><i class="fa fa-grav	mx-3" style="font-size:30px;"></i>Blog
                Vorn</span>
            <button class="navbar-toggler" data-target="#mainnav" data-toggle="collapse">

                <span class="navbar-toggler-icon">

                </span>

            </button>

            <div class="collapse navbar-collapse justify-content-end text-center" id="mainnav">

                <ul class="navbar-nav text-white lead">

                    <li class="nav-item mx"><a class="nav-link font-weight-bolder active">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#qsign">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item d-none d-md-inline-block"><a class="nav-link" href="./html/login2.php">Login</a></li>
                    <li class="nav-item d-inline-block d-md-none"><a class="nav-link" href="./html/login.php">Login</a></li>
                    <li class="nav-item text-white d-none d-md-block"
                        style="background-color:white; border-radius:10px;    ">

                        <a class="nav-link font-weight-bold text-dark" href="./html/register.php">
                            Sign Up
                        </a>

                    </li>
                </ul>


            </div>


        </nav>
    </section>
    <!-- 
    imagecontent -->

    <section class="container-fluid py-5 position-relative" id="top-image">
        <div class="container" style="padding-top: 50px; padding-bottom: 200px;">
            <div class="row justify-content-center">


                <div class="col-12 col-md-6 text-left">
                    <div class="header">

                        <p class="display-4 lead font-weight-bold text-md-left " data-aos="fade-in
                        "   data-aos-duration="2000" data-aos-delay="1500">Get 1000+ and premium Blog Daily Updated
                        </p>
                        <p class="lead font-weight-lighter" data-aos ="fade-up" data-aos-delay="2000" data-aos-duration="2000">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Veniam, quam delectus error aliquid cupiditate quia sunt facere qui necessitatibus! Corrupti
                            consequuntur at modi repellat cumque architecto eum, id pariatur sit.</p>
                    </div>
                    <div class="footer justify-content-start">

                        <div class="btn-group d-flex" data-aos="fade-in
                        "   data-aos-duration="1000" data-aos-delay="2600">
                            <button class="btn-start btn btn font-weight-bold border-0 active" id="btn-post" >

                                                        <a href="html/register.php" class="text-decoration-none text-white "> Start Blog</a>


                            </button>
                            <button class="btn-about-us btn btn font-weight-bold border-0 d-none d-md-block mx-3 active"
                                id="btn-abt"><a href="#postblog" style="text-decoration: none ;color: white;"
                                    id="abtus">About Us</a></button>
                        </div>
                    </div>
                </div>

                <div class="d-none d-md-block col-12 col-md-6">
                    <div class="image">
                        <img class="img-fluid"
                            src="image/Creator adding information on website flat vector illustration.jpg" alt="image"
                            srcset="">

                    </div>
                </div>

                <div class="wave d-none d-sm-none d-md-block">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                        preserveAspectRatio="none">
                        <path
                            d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                            class="shape-fill"></path>
                    </svg>
                </div>

            </div>

        </div>



    </section>


    <section class="next-content container-fluid" id="Production" >
        <div class="container p-5" id="conpro">
            <div class="row">
                <div class="col">

                    <div class="card text-center border-0" id="card-product">
                        <div class="main lead display-5 font-weight-bold text-center" id="thisproduct" data-aos="flip-down"   data-aos-duration="2000" >Production
                      
                        </div>
                        <div class="card-body" data-aos="fade-right" data-aos-duration="1000" >
                            <p class="lead">Trusted by 4 million+ Users from 250,000+ companies worldwide
                            </p>
                        </div>

                        <div class="container d-block d-lg-flex justify-content-center ">
                            <div class="logo mx-3">
                                <div class="logo-header"><i class="fa fa-flickr"
                                        style="font-size:108px;" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="600" ></i></div>
                                <div class="logo-content lead my-4"  data-aos="fade-down" data-aos-duration="2000" data-aos-delay="650">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.cipit odio! Dolor harum sunt ill</div>

                            </div>
                            <div class="logo mx-3">
                                <div class="logo-header"  data-aos="fade-left" data-aos-duration="2000" data-aos-delay="600"><i class="fa fa-free-code-camp	
                                    " style="font-size:108px;" ></i></div>
                                <div class="logo-content lead my-4" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="650">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.cipit odio! Dolor harum sunt ill</div>

                            </div>
                            <div class="logo mx-3">
                                <div class="logo-header"  data-aos="fade-right" data-aos-duration="2000" data-aos-delay="600"><i class="fa fa-gittip	
                                    " style="font-size:108px;"></i></div>
                                <div class="logo-content lead my-4" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="650">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.cipit odio! Dolor harum sunt ill</div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog website -->




    <section class="content my-5">
        <div class="container text-center">
            <div class="header-text text-center display-4 font-weight-bold" id="what-do-we-do" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="350">What do we do?</div>

            <div class="content-body">
                <br>
                <p class="content text-center lead" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1250">Let's take a look at some of the best blog sites available on the
                    web today and how they compare against each other. WordPress.com Best free blogging platform.
                    WordPress.org Best platform for serious bloggers.
                    Medium.com Simple platform for writing.
                    Blogger.com Publishing platform by Google</p>
                <p class="button text-center"  data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1050">
                    <button class="btn btn-lg btn-outline-dark text-center d-block w-100 font-weight-bold"
                        id="readmore">Read more</button>

                </p>
                <!-- learn more here -->
                <div class="hidden-container container my-5">
                    <div class="row">




                        <div class="col-12 col-lg-4 my-4 my-md-0" id="card-container">

                            <div class="card " style="height: 600px;" id="c-one">
                                <!-- <div class="card-header d-none"> -->
                                <div class="card-img">

                                </div>


                                <div class="card-img-overlay text-white">
                                    <div class="card-content text-left">
                                        <div class="card-body">
                                            <p class="head font-weight-bold display " style="font-size: 35px;">Posting
                                            </p>

                                            <p class="content lead my-5">A blog post is an individual web page on your
                                                website that dives into a particular sub-topic of your blog.</p>
                                        </div>
                                        <div class="card-end d-block d-md-block d-lg-none d-xl-block">
                                            <button class="btn btn-dark font-weight-bold w-100 border-0 "
                                                id="btn-explore">Explore Now!!!</button>
                                        </div>
                                    </div>

                                </div>
                            </div>




                        </div>

                        <div class="col-12 col-lg-4 my-4 my-md-0" id="card-container">

                            <div class="card" style="height: 600px;" id="c-two">
                                <!-- <div class="card-header d-none"> -->
                                <div class="card-img-two">

                                </div>

                                <div class="card-img-overlay text-white">
                                    <div class="card-content text-left">
                                        <div class="card-body">
                                            <p class="head font-weight-bold display " style="font-size: 35px;">Sharing
                                            </p>

                                            <p class="content lead my-5">A blog post is an individual web page on your
                                                website that dives into a particular sub-topic of your blog.</p>
                                        </div>
                                        <div class="card-end d-block d-md-block d-lg-none d-xl-block">
                                            <button class="btn-explore btn btn-dark font-weight-bold w-100 border-0"
                                                id="btn-explore">Explore Now!!!</button>
                                        </div>
                                    </div>

                                </div>
                            </div>




                        </div>




                        <div class="col-12 col-lg-4 my-4 my-md-0" id="card-container">

                            <div class="card" style="height: 600px;" id="c-three">
                                <!-- <div class="card-header d-none"> -->
                                <div class="card-img-three">

                                </div>


                                <div class="card-img-overlay text-white">
                                    <div class="card-content text-left">
                                        <div class="card-body">
                                            <p class="head font-weight-bold display " style="font-size: 35px;">Love
                                            </p>

                                            <p class="content lead my-5">A blog post is an individual web page on your
                                                website that dives into a particular sub-topic of your blog.</p>
                                        </div>
                                        <div class="card-end d-block d-md-block d-lg-none d-xl-block">
                                            <button class="btn btn-dark font-weight-bold w-100 border-0 active"
                                                id="btn-explore">Explore Now!!!</button>
                                        </div>
                                    </div>

                                </div>
                            </div>




                        </div>


                    </div>





                </div>

            </div>

        </div>
        </div>





    </section>

    <!-- blog website -->

    <section class="blogger" id="postblog">


        <div class="container" style="margin-top: 10px;">

            <div class="content">
                <div class="header-blog display-4 font-weight-bold text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">Blog Website</div>

                <div class="body-content my-5">

                    <div class="parent lead" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="750">
                        Let's take a look at some of the best blog sites available on the web today and how they compare
                        against each other. WordPress.com Best free blogging platform. WordPress.org Best platform for
                        serious bloggers..
                    </div>

                    <br> <br> <br>

                    <div class="btn-group d-flex justify-content-center" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="850">

                        <button class="btn btn-outline-light font-weight-bold"><a data-toggle="modal"
                                data-target="#qsign">Create Your Blog Now</a></button>
                    </div>

                </div>

            </div>



        </div>


    </section>






    <!-- about us -->

    <section class="aboutus" id="about-us" style="margin-top: 200px;" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="350">

        <div class="container">
            <p class="about-header font-weight-bold display-4 text-center">About Us</p>
            <p class="centertext text-center lead">We're currently a third year University Student who proceed in
                learning and polishing our skill</p>






            <div class="row justify-content-center my-5 d-block d-md-none">





                <div class="col-lg-5 d-flex " id="aboutleft">


                    <div class="body-content">
                        <p class="head-content display-6 font-weight-bold text-center text-md-left"
                            style="font-size: 40px;">Goal</p>
                        <ul class="content text-justify lead list-group" style="font-size: 20px;">
                            <li class="list-group-item border-left-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg"
                                style="border-width: 3px; border-color: #1E2B58;"> Able to design Web pages that can
                                effectively display material, provide interactivity, and be artistically pleasing to the
                                user.</li>
                            <li class="list-group-item border-left-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg my-4"
                                style="border-width: 3px; border-color: #1E2B58;"> Able to design Web pages that can
                                effectively display material, provide interactivity, and be artistically pleasing to the
                                user.</li>
                            <li class="list-group-item border-left-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg    "
                                style="border-width: 3px; border-color: #1E2B58; visibility: hidden;"> Able to design
                                Web pages that can effectively display material, provide interactivity, and be
                                artistically pleasing to the user.</li>


                        </ul>
                    </div>
                </div>

                <div class="col d-none d-md-flex" id="aboutright">


                    <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1468&q=80"
                        alt="" class="img-fluid">

                </div>

            </div>





            <div class="row justify-content-center" style="margin-top: 200px;">





                <div class="col-lg-5 d-flex " id="aboutleft">


                    <div class="body-content">
                        <p class="head-content display-6 font-weight-bold text-center text-md-left"
                            style="font-size: 40px;" data-aos-delay="1000" data-aos-duration="2000" data-aos="fade-right">Experience</p>
                        <ul class="content text-justify lead list-group" style="font-size: 20px;box-sizing: co;">
                            <li class="list-group-item border-right-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg"
                                style="border-width: 3px; border-color: #1E2B58; box-sizing: border-box;"
                                data-aos-delay="1300" data-aos-duration="2000" data-aos="fade-right"
                                >I have built
                                desktop application for my final Assignment at Setec Institute Project.</li>

                            <li class="list-group-item border-right-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg my-4"
                                style="border-width: 3px; border-color: #1E2B58;box-sizing: content-box;"
                                data-aos-delay="2600" data-aos-duration="1500" data-aos="fade-right"
                                
                                > I have also
                                developed student management and product sale system.Previously</li>

                            <li class="list-group-item border-right-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg my-3"
                                style="border-width: 3px; border-color: #1E2B58; "
                                data-aos-delay="3000" data-aos-duration="1700" data-aos="fade-right"
                                
                                
                                >I have been volunteerimg as a web
                                developer , which i have built for TEDxRUPP cambodia. </li>
                            <li class="list-group-item border-right-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg my-3"
                                style="border-width: 3px; border-color: #1E2B58;box-sizing: content-box; visibility: hidden;"
                                data-aos-delay="3400" data-aos-duration="2000" data-aos="fade-right"
                                
                                >
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col d-none d-md-flex" id="aboutright">


                    <img src="https://images.unsplash.com/photo-1489875347897-49f64b51c1f8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="" class="img-fluid">

                </div>

            </div>



            <div class="row justify-content-center d-none d-lg-flex " style="margin-top: 200px;">





                <div class="col-lg-7 d-none d-md-flex" id="aboutleft">

                    <img src="https://images.unsplash.com/photo-1661961112951-f2bfd1f253ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80"
                        alt="" class="img-fluid">

                </div>

                <div class="col" id="aboutright">



                    <div class="body-content">
                        <p class="head-content display-6 font-weight-bold" style="font-size: 40px;" data-aos-duration="1000" data-aos="fade-right">Goal</p>
                        <ul class="content text-justify lead list-group" style="font-size: 20px;">
                            <li class="list-group-item border-left-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg"
                                style="border-width: 3px; border-color: #1E2B58;"
                                data-aos-delay="1600" data-aos-duration="1200" data-aos="fade-right"
                                
                                > Able to design Web pages that can
                                effectively display material, provide interactivity, and be artistically pleasing to the
                                user.</li>
                            <li class="list-group-item border-left-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg my-4"
                                style="border-width: 3px; border-color: #1E2B58;" data-aos-delay="1900" data-aos-duration="1200" data-aos="fade-left"> Able to design Web pages that can
                                effectively display material, provide interactivity, and be artistically pleasing to the
                                user.</li>
                            <li class="list-group-item border-left-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg    "
                                style="border-width: 3px; border-color: #1E2B58; visibility: hidden;" data-aos-delay="2000" data-aos-duration="1500" data-aos="fade-left"> Able to design
                                Web pages that can effectively display material, provide interactivity, and be
                                artistically pleasing to the user.</li>


                        </ul>
                    </div>
                </div>

            </div>


            <div class="row justify-content-center" style="margin-top: 200px;">





                <div class="col-lg-5 d-flex " id="aboutleft">


                    <div class="body-content">
                        <p class="head-content display-6 font-weight-bold text-center text-md-left"
                            style="font-size: 40px;" data-aos-duration="2000" data-aos="fade-right">University Student</p>
                        <ul class="content text-justify lead list-group" style="font-size: 20px;">
                            <li class="list-group-item border-right-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg"
                                style="border-width: 3px; border-color: #1E2B58;" data-aos-delay="1400" data-aos-duration="1200" data-aos="fade-left"> At SETEC INSTITUTE, we conduct
                                up-to-date degree programs to equip our students with skills that companies nowadays are
                                looking for, We also place emphasis on Business English.</li>

                            <li class="list-group-item border-right-0 border-bottom-0 border-top-0 border-bottom-0 shadow-lg my-4"
                                style="border-width: 3px; border-color: #1E2B58;" data-aos-delay="2000" data-aos-duration="1200" data-aos="fade-left"> Our programs include theoretical
                                lessons, hands-on practical, learn and communicate with professional from recognized
                                companies and organizations.</li>



                        </ul>
                    </div>
                </div>

                <div class="col d-none d-md-block" id="aboutright">


                    <img src="https://images.unsplash.com/photo-1590402494628-9b9acf0b90ae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="University-student-img" class="img-fluid">

                </div>

            </div>


        </div>


        </div>
    </section>



    <!-- footer section here -->
    <section class="footer "
        style="background-color: #1E2B58; position: relative; bottom: 0px; margin-top: 130px; padding-top: 100px; padding-bottom: 100px;">
        <div class="container d-flex" style="position:relative;bottom: 0px;">
            <div class="row text-white justify-content-center align-content-center">

                <div class="col">


                    <p class="left-footer font-weight-bold">Location</p>
                    <div class="footer-left-content">
                        <ul class="list-unstyled lead" style="font-size: 19px;">

                            <li>Address: No. 86A, Street 110, Russian Federation Blvd (110), Phnom Penh</li>


                        </ul>
                    </div>
                    <div class="row text-white">







                        <div class="col">


                            <p class="left-footer font-weight-bold">Follow us on</p>
                            <div class="footer-social d-flex">
                                <i class="bi bi-instagram mx-1" style="font-size: 25px;"></i>
                                <i class="bi bi-facebook  mx-1" style="font-size: 25px;"></i>
                                <i class="bi bi-discord  mx-1" style="font-size: 25px;"></i>
                                <i class="bi bi-telegram mx-1" style="font-size: 25px;"></i>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col">


                    <p class="left-footer font-weight-bold">Overviews</p>
                    <div class="footer-left-content">
                        <ul class="list-unstyled lead" style="font-size: 18px;">
                            <li>Privacy Policy</li>
                            <li>Terms and Conditions</li>
                            <li>Terms of Sale</li>
                            <li>Community Guidelines</li>
                            <li>Upload Guidelines</li>
                        </ul>
                    </div>
                </div>
                <div class="col">


                    <p class="left-footer font-weight-bold">Contact Us</p>
                    <div class="footer-left-content">
                        <ul class="list-unstyled lead" style="font-size: 18px;">
                            <address class="list-unstyled"><span>Tel: </span><a href="#" class="text-white">(+855)
                                    12323232</a></address>
                            <address class="list-unstyled"><span>Email: </span><a href="#" class="text-white">
                                    Nightpp19@gmail.com</a></address>
                            <li>Terms of Sale</li>
                            <li>Community Guidelines</li>
                            <li>Upload Guidelines</li>
                        </ul>
                    </div>
                </div>

                <div class="col">


                    <p class="left-footer font-weight-bold">Terms and Policies</p>
                    <div class="footer-left-content">
                        <ul class="list-unstyled lead" style="font-size: 18px;">
                            <li>Privacy Policy</li>
                            <li>Terms and Conditions</li>
                            <li>Terms of Sale</li>
                            <li>Community Guidelines</li>
                            <li>Upload Guidelines</li>
                        </ul>
                    </div>
                </div>

            </div>




        </div>
    </section>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- 
    <script src="./javascript/one.js"></script> -->
    <script src="./javascript/insert.js"></script>
    <script src="./javascript/form.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init(
     
    );
  </script>
</body>

</html>

<?php



?>