<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Read blog</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php







    include_once(".././database/data.php") ?>
</head>
<style>
    @import '../css/fadeinout.css';
    @import url("./font/font.css");

    @import url("./https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");

    @import url("./css/media.css");



    @import url("./css/form.css");
    @import url("../css/pagehome.css");




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

    #img-clip {
        clip-path: circle();
        width: 50px;
        height: 50px;
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


                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label font-weight-normal "
                                    style="font-size:20px;">Title</label><br>
                                <small class="lead d-none   " style="font-size:15px;color:red">Choose how other will
                                    view your blog base on the category*</small>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Describe your title" name="txt-title"
                                    required>

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
                                <input type="file" name="file_uploading" id="file_uploading" class="form-control"
                                    required>
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
                            <input type="submit" class="btn btn-outline-dark my-1 w-100 " name="btn_post" value="Post">

                        </form>
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

    <!-- myprofile edit -->

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
                            $userid = $_GET['id'];
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


                            ?>" alt="profile image" style="clip-path: circle();" width="150px" height="150px">
                    </div>
                    <div class="profile-name lead font-weight-bold  " style="font-size:25px">
                        <?php
                        if (isset($_GET['UserID'])) {
                            $userid = $_GET['id'];
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
                                    $sql = "    SELECT count(Post_ID) as 'count'
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
                            <a href="./CRUD/sendemail.php" class="text-decoration-none text-dark    ">
                                <li class="list-hover-group list-group-item d-flex justify-content-between align-items-center"
                                    style="border-radius:0px;">
                                    Change password?
                                    <span class="badgebadge-dark badge-pill">
                                        <?php
                                        echo "<a href ='./CRUD/sendemail.php' class='text-decoration-none text-dark'>";


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

                    <li class="nav-item"><a class="nav-link font-weight-bolder active">Read Blog</a></li>


                    <li class="nav-item">
                        <!-- <button class="btn btn-primary" type="button" >Toggle right offcanvas</button> -->
                        <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">My Profile</a>
                        <!-- offcanvas my profile -->
                    </li>

                    <li class="nav-item"><a class="nav-link font-weight-bolder"
                            href="./page1.php?UserID=50&mypage=1">Back</a></li>





                </ul>



            </div>





        </nav>
        <!-- category -->
        <section class="d-none d-md-block category view my-5"
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
                            <?php
                            echo "
                            <a class='nav-item nav-link active' href='./page1.php?UserID=$userid&mypage=1'>Technology<span
                            class='sr-only'>(current)</span></a>
                            ";
                            ?>
                            <?php
                            echo "
                            <a class='nav-item nav-link ' href='./animal.php?UserID=$userid&mypage=1'>Animal<span
                            class='sr-only'>(current)</span></a>
                            ";
                            ?>


                            <?php
                            echo "
                            <a class='nav-item nav-link ' href='./landscape.php?UserID=$userid&mypage=1'>Landscape<span
                            class='sr-only'>(current)</span></a>
                            ";
                            ?>
                            <?php
                            echo "
                            <a class='nav-item nav-link ' href='./other.php?UserID=$userid&mypage=1'>Other<span
                            class='sr-only'>(current)</span></a>
                            ";
                            ?>
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


    </section>




    <!-- edit profile -->



    <!-- blog more here -->



    <!-- Tab panes content -->

    <div class="container" style="padding-left:50px;">
        <div class="row my-5 g-5">

            <div class="row my-2 g-5 justify-content-between">
                <!-- read here -->


                <div class="col-12 col-md-6">
                    <div class="header font-weight-bold text-left p-0 m-0">
                        <a class="nav-link text-decoration-none text-dark p-0" href="./page1.php?UserID=50&mypage=1"
                            style="font-size:22px;">Back</a>
                    </div>

                    <?php
                    //pass userid
                    if (isset($_GET['UserID'])) {

                        $sql_getall = "SELECT b.title, b.Des,b.image,b.Post_Date,b.UserID,a.UserName FROM tbl_blog b inner join tbl_user a on a.UserID = b.UserID WHERE b.Post_ID = 144;";
                        $result = mysqli_query($db, $sql_getall);
                        if (!$result) {
                            die("error");
                        }
                    }
                    ?>
                    <div class="main-content">
                        <?php

                        //pass title and get post id
                        if (isset($_GET['UserID'])) {
                            $blogtitle = $_GET['title'];



                            $sql_blog = "SELECT Post_ID 
                                  from tbl_blog
                                 WHERE title = '$blogtitle' AND UserID = '$userid';";
                            $result = mysqli_query($db, $sql_blog);
                            if (isset($_GET['postid'])) {
                                $postidd = $_GET['postid'];
                            } else {
                                $postidd = $row['Post_ID'];
                            }
                            if (!$result) {
                                die("error");
                            }
                            $row = mysqli_fetch_assoc($result);


                            $sql_getpost = "SELECT b.Post_ID,b.title, b.Des,b.image,b.Post_Date,b.UserID,a.UserName,a.Profile_image
                                 from tbl_blog b inner join tbl_user a on a.UserID = b.UserID
                                     where b.Post_ID = $postidd ;";

                            $result = mysqli_query($db, $sql_getpost);
                            $row = mysqli_fetch_assoc($result);
                            if (!$result) {
                                die("error");
                            }

                            $titleshow = $row['title'];
                            $Desshow = $row['Des'];
                            $image = $row['image'];
                            $date = $row['Post_Date'];
                            $username = $row['UserName'];
                            $imgprofile = $row['Profile_image'];

                            echo "<script> 
                                            console.log('hello world');

                      console.log(`$blogtitle`);
                      console.log(`$postidd`);
                    //   console.log(` $titleshow`);
                    //   console.log(` $image `);
      
                    //   console.log(`  $username`);
               </script>";



                        } else {
                            echo "error";
                        }


                        ?>

                        <div class="img-part my-3">
                            <?php echo "<img class='img-fluid'
                    src='$image'
                    alt=''>"; ?>
                        </div>


                        <!-- blog content description -->
                        <?php echo "<div class='header display-6 font-weight-bold text-left my-5'>
                    " . $titleshow . "
            </div>"; ?>

                        <?php echo " <div class='paragraph lead my-5 text-justify'> " . $Desshow . "

                    </div>";
                        ?>

                        <div class="profile-paragraph">
                            <div class="content-profile my-5">
                                <div class="footer d-flex justify-content-between align-content-center">
                                    <div style="">
                                        <img src="<?php echo "  $imgprofile"; ?>" alt="" class="img-fluid"
                                            id="img-clip">
                                        <span class="" style="visibility:hidden;">1</span>
                                        <span class="avatar lead">
                                        <?php echo "<span class='font-weight-bold'> " . $username . "</span></span>"; ?>

                                    </div>




                                    <p class="avatar lead font-weight-bold align-self-center align-items-center"
                                        style="font-size:15px;margin-top:11px;">Date: <span>
                                            <?php echo "$date"; ?>
                                        </span></p>


                                </div>



                            </div>
                        </div>

                    </div>
                </div>
                <!-- recent blog  popular-->


                <div class="col-12 col-md-5">
                    <div class="header font-weight-bold " style="font-size: 22px;">Recent blogs</div>

                    <div class="row my-5 g-3">

                        <?php
                        if (isset($_GET['UserID'])) {
                            $id = $_GET['id'];
                            $sql_getall = "SELECT a.Profile_Image,b.Post_ID,b.title,b.Des,b.image,b.Post_Date,a.UserName FROM tbl_blog b inner join tbl_user a on a.UserID = b.UserID ORDER by b.Post_ID DESC LIMIT 4;";
                            $result = mysqli_query($db, $sql_getall);
                            if (!$result) {
                                die("error");
                            }
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "
                    <div class='col'>
                     <div class='img'>
                          <a href='./readblog.php?UserID=" . $userid . "&id=" . $id . "&title=" . $row['title'] . "&postid=" . $row['Post_ID'] . "'>
                             <img src='" . $row['image'] . "' alt='asds' width='270px' height='160px' id='img-left'>
                          </a>
                    
                      </div>
                 </div>

                <div class='col'>

            <div class='main content my-3'>
                    <div class='header font-weight-bold' style='font-size: 22px;'>
                            " . $row['title'] . "
                             </div>
            <div class='content-profile my-3'>
             <div class='footer d-flex align-items-center justify-content-between'>
           
                 <p class='avatar lead'> <img src='" . $row['Profile_Image'] . "' alt='' class='img-fluid' id='img-clip'></p>
                 <p class='date lead'> " . $row['UserName'] . "</p>
           
              

              </div>



             </div>
         </div>
        </div>  ";

                            }

                        }
                        ?>

                    </div>

                </div>
                <!-- recent php -->
                <div class="col-12">
                    <h3>More Blogs</h3>

                    <div class="popular container" style="margin:0px;padding:0px;">

                        <div class="container-today bg">
                            <div class="row my-3 g-5 align-content-center">
                                <!-- Trending now blog -->
                                <?php

                                if (isset($_GET['UserID'])) {

                                    $sql_getall = "SELECT b.Post_ID,b.view_count ,b.title,b.Des,b.image,b.Post_Date,a.UserName FROM tbl_blog b
                  inner join tbl_user a on a.UserID = b.UserID LIMIT 4";
                                    $result = mysqli_query($db, $sql_getall);
                                    if (!$result) {
                                        die("error");
                                    }

                                    $sql = "SELECT Post_ID from tbl_blog order by Post_ID DESC LIMIT 1;";

                                    $result_two = mysqli_query($db, $sql);
                                    $row = mysqli_fetch_assoc($result_two);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // link blog here
                                        echo "   
                   <div class='col-12 col-md-3'>

                       <div class='card shadow-sm' style='height:400px;'>
                      <div class='card-img display-5 font-weight-normal border-0 bg-white'>
                      <a href='./readblog.php?UserID=" . $userid . "&id=" . $id . "&title=" . $row['title'] . "&postid=" . $row['Post_ID'] . "'>
                        <img src='" . $row['image'] . "'
                          alt='error' class='img-fluid' style='height:270px; width:100%;'>
                         </a>
                    </div>
                 <div class='card-content lead' >
                     <div class='card-body' style='height:250px; width:100%;'>        
                   <p class='card-title font-weight-bold lead' style='font-size: 28px;'>" . $row['title'] . "</p>
                   </div>
                   </div>
               </div>
        </div>";
                                    }
                                    // mysqli_close($db);
                                
                                }

                                ?>



                            </div>





                        </div>
                        <!--  -->
                 
                        <!-- pagination -->






                    </div>


                </div>

            </div>
            <!--cotent recent blog -->

            <!-- more News -->

        </div>

    </div>



    <section class="space-here" style="margin-top: 200px;">

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

<?php

$view = 1;

if (isset($_GET['postid'])) {

    $sql_getview = "SELECT view_count from tbl_blog where Post_ID = $postidd;";

    $result = mysqli_query($db, $sql_getview);
    if (mysqli_errno($db)) {

        die("error on" . mysqli_error($db));
    }
    $row = mysqli_fetch_assoc($result);

    $blogview = $row["view_count"];

    // echo $blogview;

    //plus view to blog
    $sql = "UPDATE tbl_blog set view_count = $blogview+$view where Post_ID = $postidd";
    $result = mysqli_query($db, $sql);
    if (mysqli_errno($db)) {

        die("error on" . mysqli_error($db));
    }

}
?>


