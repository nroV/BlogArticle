<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Editing</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php include_once(".././database/data.php") ?>
</head>
<style>
    @import url("./font/font.css");

    @import url("./https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");

    @import url("./css/media.css");



    @import url("./css/form.css");
    @import url("../css/pagehome.css");


    .card-main {
        top: -500px;
        position: relative;
        z-index: 31;

        transform: scale(10%) translate(0%, 100%);


        /* display: none; */
    }

    #img-p {
        width: 250px;
        height: 250px;
        position: absolute;
        top: -190px;
        left: 440px;
        z-index: 61;

    }

    body {
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;

    }

    nav {
        background-color: #1E2B58;

    }

    ul li:last-child {
        border-radius: 25px;
    }

    * {
        border-radius: 0px;
        margin: 0px;
        padding: 0px;
    }

    div.card {
        height: 610px;
        overflow-y: hidden;
    }




    div.card-body-one {}

    .container-out {
        background: rgba(0, 0, 0, 0.57) url("https://images.unsplash.com/photo-1674421338672-3591ba6f176e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1015&q=80");
        background-position: center;
        background-repeat: no-repeat;

        background-blend-mode: darken;
        color: white;
        padding: 15px;
        height: 500px;
        display: flex;
        align-items: end;
        background-size: cover;

    }

    .blogger {
        background: rgba(0, 0, 0, 0.57) url("https://images.unsplash.com/photo-1520207588543-1e545b20c19e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80");
        background-position: center;
        background-repeat: no-repeat;

        background-blend-mode: darken;
        color: white;
        padding: 35px;
        height: 500px;
        width: 100%;
        display: flex;
        align-items: end;
        background-size: cover;
    }

    body {
        background-color: #e9ecef;
    }

    .jumbotron {
        background: rgba(0, 0, 0, 0.65) url("https://plus.unsplash.com/premium_photo-1669833448271-fd839dde57c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
        background-position: center;
        background-attachment: scroll;
        background-size: cover;
        background-blend-mode: darken;

        color: white;
        height: 400px;
    }
</style>

<body>



    <!-- popup form here -->
    <section class="popupform">
        <div class="modal fade" id="postblog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content d-flex justify-content-center">
                    <div class="modal-header text-center"
                        style="background-color: #1E2B58; border-radius: 0; align-items: center;">
                        <div class="card-lead lead text-center text-white font-weight-bold" style="font-size: 26px;">
                            Posting Blog
                        </div>
                        <button type="button" class="close text-white   " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body p-3 border-0">

                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-3">
                                <form action="?" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label font-weight-normal "
                                            style="font-size:20px;">Title</label><br>
                                        <?php
                                        if (isset($_POST["btn_post"])) {

                                            if ($_POST['txt-title'] == "") {
                                                echo "<span class='text-danger'>*Description is missing</span>";
                                            }
                                        }

                                        ?>
                                        <small class="lead d-none   " style="font-size:15px;color:red">Choose how other
                                            will
                                            view your blog base on the category*</small>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Describe your title"
                                            name="txt-title" required>

                                    </div>
                                    <div class="form-group my-2">
                                        <label for="exampleInputPassword1" class="form-label font-weight-normal"
                                            style="font-size:20px;">Description</label><br>
                                        <?php
                                        if (isset($_POST["btn_post"])) {

                                            if ($_POST['txt-desc'] == "") {
                                                echo "<span class='text-danger'>*Description is missing</span>";
                                            }
                                        }

                                        ?>

                                        <textarea class="form-control" placeholder="What is on your mind?..." rows="3"
                                            name="txt-desc" maxlength="240" style="height:200px;"></textarea>
                                    </div>
                                    <div class="form-img my-2">
                                        <label for="exampleInputEmail1" class="form-label font-weight-normal "
                                            style="font-size:20px;">Upload Image</label><br>
                                        <small class="lead d-none " style="font-size:15px;color:red">Choose how other
                                            will view
                                            your blog base on the category*</small>
                                        <input type="file" name="file_uploading" id="file_uploading"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-category my-1">
                                        <label for="exampleInputEmail1" class="form-label font-weight-normal"
                                            style="font-size:20px;">Category</label>
                                        <br>
                                        <small class="lead" style="font-size:15px;color:#1E2B58">Choose how other will
                                            view your
                                            blog base on the category*</small>
                                        <select class="form-select text-center my-3" name="select-group" id="" required>

                                            <?php
                                            // category from php
                                            
                                            if (isset($_GET['UserID'])) {
                                                $sql = "SELECT * from tbl_category;";
                                                $result = mysqli_query($db, $sql);
                                                if (!$result) {
                                                    die("Error on " . mysqli_error($db));
                                                }
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='" . $row['Category_Name'] . "' name='category_choose'>" . $row['Category_Name'] . "</option>";
                                                }

                                            }

                                            ?>

                                            <!-- <option value="Technology" name="category_choose">Technology</option>
                                    <option value="Sport" name="category_choose">Landscape</option>

                                    <option value="Animal" name="category_choose">Animal</option> -->


                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-outline-dark my-1 w-100 " name="btn_post"
                                        value="Post">

                                </form>

                            </div>
                        </div>

                        <div>

                        </div>

                        <!-- already have an account? -->
                        <div class="d-none justify-content-around my-3">
                            <div class="">Already have an account? <span class="font-weight-bold"
                                    style="color: #1E2B58;">Login</span></div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- header navi -->

    <!--     edit -->
    <!-- myprofile edit -->
    <section class="offcanvas">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header" style="background-color: #1E2B58;color:white;">
                <h5 id="offcanvasRightLabel font-weight-bold">My Profile</h5>
                <button type="button" class="btn-close text-reset text-white" data-bs-dismiss="offcanvas"
                    aria-label="Close" style="background-color: white;"></button>
            </div>
            <div class="offcanvas-body" style="overflow:hidden;background-color: ;">
                <div class="profile container d-flex flex-column align-items-center">

                    <div class="img-profile my-5">
                        <img src="
                            <?php
                            $userid = $_GET['UserID'];
                            $sql = "SELECT * FROM tbl_user
                             WHERE UserID = $userid;";
                            $result = mysqli_query($db, $sql);
                            if (!$result) {
                                die("Something went wrong");
                            } else {

                            }
                            $row = mysqli_fetch_array($result);
                            $imageprofile = $row['Profile_Image'];
                            echo "$imageprofile";


                            ?>" alt="profile image" style="clip-path: circle();">
                    </div>
                    <div class="profile-name lead font-weight-bold  " style="font-size:25px">
                        <?php
                        if (isset($_GET['UserID'])) {
                            $userid = $_GET['UserID'];
                            $sql = "SELECT TRIM(CONCAT(FirstName,LastName)), Email from tbl_user 
                            WHERE UserID = $userid;";
                            $result = mysqli_query($db, $sql);
                            $row = mysqli_fetch_row($result);
                            $fullname = $row[0];

                            echo $fullname;



                        } else {
                            echo "No name";
                        }


                        echo $fullname ?>
                    </div>
                    <div class="profile-gmail lead   ">
                        <?php
                        if (isset($_GET['UserID'])) {
                            $userid = $_GET['UserID'];
                            $sql = "SELECT TRIM(CONCAT(FirstName,LastName)), Email from tbl_user 
                            WHERE UserID = $userid;";
                            $result = mysqli_query($db, $sql);
                            $row = mysqli_fetch_row($result);
                            $fullname = $row[0];
                            $email = $row[1];





                        } else {
                            echo "No name";
                        }


                        echo $email ?>
                    </div>

                    <div class="container detail my-5">
                        <ul class="list-group">

                            <li class="list-group-item d-flex justify-content-between align-items-center text-center text-white"
                                style="font-size:22px;background-color: #1E2B58;">
                                Blogs Statistic

                            </li>


                            <li
                                class="list-hover-group_two list-group-item d-flex justify-content-between align-items-center">
                                Total Blog
                                <?php
                                if (isset($_GET['UserID'])) {
                                    $userid = $_GET['UserID'];
                                    $sql = "SELECT count(Post_ID) as 'count'
                                    from tbl_blog where UserID = $userid;";
                                    $result = mysqli_query($db, $sql);

                                    if (!$result) {
                                        die("Error on " . mysqli_error($db));
                                    }
                                    $row = mysqli_fetch_assoc($result);

                                    $countblog = $row['count'];


                                    echo "<script> 
                                        console.log('ID of user is:'+$userid);
                                    
                                    </script>";



                                } else {
                                    // echo "No name";
                                }

                                echo "    <span class='badgebadge-dark badge-pill font-weight-bold'>
                                   $countblog

                                </span>"

                                    ?>
                            </li>


                            <a href="./editblog.php?UserID=<?php echo "$userid"; ?>"
                                class="text-decoration-none text-black">
                                <li
                                    class="list-hover-group_three list-group-item d-flex justify-content-between align-items-center">
                                    Click Here To Edit
                                    <span class="badgebadge-dark badge-pill">

                                        <?php
                                        echo "<a href ='./editblog.php?UserID=" . $userid . "' class='text-decoration-none text-dark'>";


                                        ?>

                                        <i class="bi bi-stickies-fill"></i>
                            </a>
                            </span>
                            </li>

                            </a>
                            <a href="./editblog.php?UserID=<?php echo "$userid"; ?>"
                                class="text-decoration-none text-dark    ">
                                <li class="list-hover-group list-group-item d-flex justify-content-between align-items-center"
                                    style="border-radius:0px;">
                                    Change password?
                                    <span class="badgebadge-dark badge-pill">
                                        <?php
                                        echo "<a href ='./editblog.php?UserID=" . $userid . "' class='text-decoration-none text-dark'>";


                                        ?>
                                        <i class="bi bi-gear-fill"></i>
                                    </span>
                                </li>
                            </a>

                        </ul>
                    </div>
                    <li class="list-group-item d-flex justify-content-center align-items-center" style="border-radius:0px;width: 100%;background-color: #1E2B58;
                        position:absolute; bottom:0px;">

                        <span class="badgebadge-dark text-center ">
                            <a class='nav-link text-white text-center font-weight-bold text-center'
                                href='.././index.php'>Log
                                out</a>
                        </span>
                    </li>


                </div>
                <div class="container d-flex justify-content-center">

                </div>


            </div>
        </div>
    </section>
    <section class="topbar sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark p-3 ">




            <span class="navbar-brand lead text-white font-weight-bold">
                Welcome Back, <span>
                    <?php

                    if (isset($_GET['UserID'])) {
                        $userid = $_GET['UserID'];
                        $sql = "SELECT TRIM(CONCAT(FirstName,LastName)) from tbl_user 
                            WHERE UserID = $userid;";
                        $result = mysqli_query($db, $sql);
                        $row = mysqli_fetch_row($result);
                        $fullname = $row[0];

                        echo $fullname;



                    } else {
                        echo "No name";
                    }

                    ?>
                </span>
            </span>
            <span class="navbar-brand bg-white mx-1 d-none d-md-block">
                <a class="nav-link text-dark font-weight-bold"
                    href='./page1.php?UserID=<?php echo "$userid"; ?>&mypage=1' data-target="">return home</a>
            </span>

            <button class="navbar-toggler" data-target="#mainnav" data-toggle="collapse">

                <span class="navbar-toggler-icon">

                </span>


            </button>


            <div class="collapse navbar-collapse text-center justify-content-end" id="mainnav">

                <ul class="navbar-nav text-white lead">

                    <li class="nav-item"><a class="nav-link font-weight-bolder active">Edit</a></li>


                    <li class="nav-item"><a class="nav-link font-weight-bolder"
                            href="./page1.php?UserID=50&amp;mypage=1">Back</a></li>





                </ul>



            </div>





        </nav>
        <!-- <section class="d-none d-md-block category view my-5"
            style="position: relative; top: -48px; padding: 0px;margin: 0px;">
            <div class="container-fluid shadow-lg">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand font-weight-bold" href="#">Category |</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="#">Technology<span
                                    class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#">Animal</a>
                            <a class="nav-item nav-link" href="#">Landscape</a>
                            <a class="nav-item nav-link" href="#">Other</a>
                        </div>
                    </div>
                </nav>

                <!-- <ul class="nav nav-tabs justify-content-center  " id="myTab" role="tablist"  style="position: sticky; top: 0px;"
                >
                    <!-- tabbarview top -->
        <!-- <li class="nav-cate nav-item" role="presentation">
                        <button class="btn-category nav-link active lead font-weight-bold text-dark" id="home-tab"
                            data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home"
                            aria-selected="true">Technology</button>
                    </li>
                    <li class="nav-cate nav-item" role="presentation">
                        <button class="btn-category nav-link lead font-weight-bold text-dark" id="profile-tab"
                            data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">
                            animal category link
                            <?php
                            echo " <a href='./animal.php?UserID=$userid' class='text-decoration-none text-dark'>    
                                 Animal </a> ";
                            ?>
    
    
    
                       </button>
                    </li>
                    <li class="nav-cate nav-item" role="presentation ">
                        <button class="btn-category nav-link lead font-weight-bold text-dark" id="contact-tab"
                            data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                            aria-selected="false">Landscape</button>
                    </li>
                    <li class="nav-cate nav-item" role="presentation ">
                        <button class="btn-category nav-link lead font-weight-bold text-dark" id="contact-tab"
                            data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                            aria-selected="false">Other</button>
                    </li>
                </ul> -->
        <!-- tab content -->

    </section>



    <!-- blog more here -->


    <!-- Modal Editing here-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #1E2B58;border-radius: 0px;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Editing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="background-color: white;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" method="post" enctype="multipart/form-data">
                        <?php
                        if (isset($_GET[''])) {

                        }

                        ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label font-weight-normal "
                                style="font-size:20px;">Title</label><br>
                            <small class="lead d-none   " style="font-size:15px;color:red">Choose how other will
                                view your blog base on the category*</small>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Describe your title" name="txt-title" required>

                        </div>
                        <div class="form-group my-2">
                            <label for="exampleInputPassword1" class="form-label font-weight-normal"
                                style="font-size:20px;">Description</label><br>

                            <textarea class="form-control" placeholder="What is on your mind?..." rows="3"
                                name="txt-desc" maxlength="240" style="height:200px;"></textarea>
                        </div>
                        <div class="form-img my-2">
                            <label for="exampleInputEmail1" class="form-label font-weight-normal "
                                style="font-size:20px;">Upload Image</label><br>
                            <small class="lead d-none " style="font-size:15px;color:red">Choose how other will view
                                your blog base on the category*</small>
                            <input type="file" name="file_uploading" id="file_uploading" class="form-control" required>
                        </div>
                        <div class="form-category my-1">
                            <label for="exampleInputEmail1" class="form-label font-weight-normal"
                                style="font-size:20px;">Category</label>
                            <br>
                            <small class="lead" style="font-size:15px;color:#1E2B58">Choose how other will view your
                                blog base on the category*</small>
                            <select class="form-select text-center my-3" name="select-group" id="" required>

                                <?php
                                // category from php
                                
                                if (isset($_GET['UserID'])) {
                                    $sql = "SELECT * from tbl_category;";
                                    $result = mysqli_query($db, $sql);
                                    if (!$result) {
                                        die("Error on " . mysqli_error($db));
                                    }
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['Category_Name'] . "' name='category_choose'>" . $row['Category_Name'] . "</option>";
                                    }

                                }

                                ?>

                                <!-- <option value="Technology" name="category_choose">Technology</option>
                                    <option value="Sport" name="category_choose">Landscape</option>

                                    <option value="Animal" name="category_choose">Animal</option> -->


                            </select>
                        </div>
                        <!-- <input type="submit" class="btn btn-outline-dark my-1 w-100 " name="btn_post" value="Post"> -->

                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-dark" name="btn_post">Save changes</button>
                </div>
            </div>
        </div>
    </div>




    <!-- Tab panes content -->
    <section class="my-5">


    </section>


    <section class="space-here" style="margin-top: 100px;">

    </section>

    <section class="editblog mb-5">

        <!-- edit blog delete php -->

        <div class="container">

        </div>

        <div class="edit container my-5">
            <div class="card text-center" style="height:auto ;">


                <div class="card-header font-weight-bold lead b text-white d-flex justify-content-between"
                    style="background-color: #1E2B58; font-size:25px;">

                    <div class="icon">

                        <i class="" style="font-size:45px;"></i>
                        <a href="# " class="text-decoration-none text-white"> Editing Blog</a>

                    </div>

                    <div class="icon">


                        <a href="<?php echo "page1.php?UserID=" . $userid . "&mypage=1"; ?>"
                            class="text-decoration-none text-white"> back home </a>
                        <i class="" style="font-size:45px;"></i>
                    </div>



                </div>

                <div class="container card-body ">
                    <?php
                    if (isset($_GET['UserID'])) {
                        $sql_getall = "SELECT * from tbl_blog where UserID = $userid;";
                        $result = mysqli_query($db, $sql_getall);
                        if (!$result) {
                            die("error");
                        }
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "
                    <div class='list-group mb-4 border-0' >
                    <div class='list-group-item flex-column align-items-center p-3 ' style='border: 0px solid #1E2B58;border-bottom:0px;'>
                        <div class='d-flex w-100 justify-content-between '>
                            <h5 class='mb-1 font-weight-bold lead' style='font-size:25px;'>
                            " . $row['title'] . "
                                
                                
                                </h5>
    
    
    
    
                        </div>
    
                        <p class='description mb-1 lead my-2 text-left'>
                            " . $row['Des'] . "
    
                        </p>
                        <!-- <small>Donec id elit non mi porta.</small> -->
                    </div>

                    <div class='modal fade ' tabindex='-1' role='dialog' id='modaldelete'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header' style='background-color:#1E2B58;color:white;border-radius:0px;'>
        <h5 class='modal-title' style='font-size:25'>Warning</h5>
        <button type='button' class='close bg-white' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body font-weight-normal' style='font-size:25px;'>
        <p>Are you sure you want to delete this?</p>
      </div>
      <div class='modal-footer'>
         
      <div class='bg-danger text-center p-2' style='width: 100px; font-size:20px;border-radius:7px;'>
      <small class='text-white d-block'>
      <a href='CRUD/./delete.php?Postid=" . $row['Post_ID'] . "&UserID=" . $row['UserID'] . "'

              class='text-white d-block text-decoration-none'>Delete</a>
              
              
              </small>

  </div>
        <button type='button' class='btn btn-dark' data-dismiss='modal'>Close</button>
      </div>
    </div>
  </div>
</div>
    
                    <div class='list-group-item p-3' style='border: 0px solid #1E2B58;border-radius:0px;border-bottom:1px solid #1E2B58'>
    
                        <div class='d-flex w-100 justify-content-between my-1 '>
                            <div class=' text-center p-2' style='width: 100px;font-size:20px;background-color: #1E2B58;border-radius:7px;' >
                            <a href='CRUD/./edit.php?Postid=" . $row['Post_ID'] . "&UserID=" . $row['UserID'] . "'
                      
                            class='text-white d-block text-decoration-none'>Edit</a></small>
                            </div>
                            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modaldelete'>
 Delete
</button>

                      
    
    
    
    
                        </div>
                    </div>
    
                </div>
    
                    ";
                        }


                    }

                    ?>
                </div>

            </div>

        </div>

        </div>

    </section>



    <!-- footer section here -->
    <section class="footer "
        style="background-color: #1E2B58; position: relative; bottom: 0px; padding-top: 100px; padding-bottom: 100px;">
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
    <div class="container">



        <!-- javascript src body -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>


        <script src="javascript/one.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
        <script>
            let btn = document.querySelector("button");
            let btn_close = document.querySelector("#close");
            let cardppop = document.querySelector(".card");
            let main = document.querySelector("body");


            btn.addEventListener("click", () => {
                cardppop.style.transition = "1s linear";
                cardppop.style.display = "block";
                cardppop.style.top = "100px";
                cardppop.style.transform = "scale(1) translate(0%,100%)";
                btn.style.display = "none";
                main.style.transition = "3s linear";
                main.style.backgroundBlendMode = "darken";

            })
            btn_close.addEventListener("click", () => {
                cardppop.style.transition = "3s";
                cardppop.style.display = "none";

                cardppop.style.top = "-600px";
                cardppop.style.transform = "scale(1%) translate(0%,100%)";

                btn.style.display = "inline-block";
                main.style.backgroundBlendMode = "";

            })
        </script>


</body>

</html>

<!-- <?php
if (isset($_POST['btn_post'])) {

    $db_post = mysqli_connect("localhost", "root", "111", "tbl_student");


    $title = $_POST['txt-title'];
    $desc = $_POST['txt-desc'];
    $category = $_POST['select-group'];
    $file_name = $_FILES["file_uploading"]["name"];

    $source = $_FILES["file_uploading"]["tmp_name"];



    $datepost = date('d-M-Y', time());


    $destination = '.././image/' . $file_name;
    move_uploaded_file($source, $destination);

    if (mysqli_connect_errno() > 0) {
        echo "error id:" + mysqli_connect_error() + "on " + mysqli_connect_errno();
    } else {

    }
    $sql = "SELECT Category_ID from tbl_category 
    WHERE Category_Name LIKE '$category';";
    $result = mysqli_query($db, $sql);

    if (!$result) {
        die("Error on " . mysqli_error($db));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $categoryid = $row['Category_ID'];
    }



    $sql_three = "INSERT INTO tbl_blog(title, Des, image, Post_Date, Category_ID, UserID) 
    VALUES ('$title','$desc','$destination',' $datepost',  $categoryid,$userid);";
    $result = mysqli_query($db_post, $sql_three);

    if (mysqli_errno($db)) {
        die("error on" . mysqli_errno($db));
    }

    if (!$result) {

    }

    echo "<script> 

            window.location.href='./page1.php?UserID=$userid';
       </script>";


    exit();

}
// header('Location: thanks.php');


?>


<?php

if (isset($_GET['UserID'])) {
    $userid = $_GET['UserID'];

    echo "<script> 
        console.log('ID of user is:'+$userid);
    
    </script>";


} else {
    // echo "No name";
}
?> -->