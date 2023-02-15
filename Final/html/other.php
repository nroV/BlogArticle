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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php include_once(".././database/data.php") ?>
    <?php include_once(".././database/blogvalidation.php") ?>
</head>
<style>
    @import url("./font/font.css");

    @import url("./https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");

    @import url("./css/media.css");

    @import '../css/fadeinout.css';

    @import url("./css/form.css");
    @import url("../css/pagehome.css");

    @import url("../css/other.css");
    /* @import url("../css/default.css"); */


    .page-item.active .page-link {
        z-index: 3;
        color:white;
        background-color:#1E2B58;
        border-color: white;
    }
    body {
        margin: 0px;
        padding: 0px;

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

    body {
        background-color: #e9ecef;
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
           >
           <?php 
                         if (isset($_POST["btn_post"])) {

                            if ($_POST['txt-title'] === "") {
                                echo "<span class='text-danger'>*Title is missing</span>";
                            }
                            }
                             
                    ?>

    </div>
    <div class="form-group my-2">
        <label for="exampleInputPassword1" class="form-label font-weight-normal"
            style="font-size:20px;">Description</label><br>
            <?php 
                         if (isset($_POST["btn_post"])) {

                            if ($_POST['txt-title'] === "") {
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
    <div class="form-row">
                <div class="form-col">
                <input type="reset" class="btn btn-danger my-1 text-center" name="btn_po" value="Discard">
                <input type="submit" class="btn my-1 text-center text-white" name="btn_post" value="Save change"
                style="background-color:#1E2B58">
                </div>
    </div>

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
                             $userid = $_GET['UserID'];
                             $sql = "SELECT * FROM tbl_user
                             WHERE UserID = $userid;";
                             $result = mysqli_query($db, $sql);
                             if(!$result){
                            die("Something went wrong");
                             }
                             else{
                                
                             }
                             $row = mysqli_fetch_array($result);
                             $imageprofile = $row['Profile_Image'];
                             echo "$imageprofile";
                        
                        
                        ?>"alt="profile image" style="clip-path: circle();" width="150px" height="150px">
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


                       ?>
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
                            <a href="./CRUD/sendemail.php"
                                class="text-decoration-none text-dark    ">
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
                    <li class="list-group-item d-flex justify-content-center align-items-center"
                        style="border-radius:0px;width: 100%;background-color: #1E2B58;
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
        <nav class="navbar navbar-expand-lg navbar-dark p-3 sticky-top">




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
                <a class="nav-link text-dark font-weight-bold" href="#" data-toggle="modal"
                    data-target="#postblog  ">Post a Blog </a>
            </span>

            <button class="navbar-toggler" data-target="#mainnav" data-toggle="collapse">

                <span class="navbar-toggler-icon">

                </span>


            </button>


            <div class="collapse navbar-collapse text-center justify-content-end" id="mainnav">

                <ul class="navbar-nav text-white lead">

                    <li class="nav-item"><a class="nav-link font-weight-bolder active">Blog</a></li>


                    <li class="nav-item">
                        <!-- <button class="btn btn-primary" type="button" >Toggle right offcanvas</button> -->
                        <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">My Profile</a>
                        <!-- offcanvas my profile -->
                    </li>







                </ul>



            </div>





        </nav>
        <div class="container-fluid p-0 d-none d-md-block">
            <ul class="nav nav-tabs justify-content-center p-0" id="myTab" role="tablist"
                style="border:0px;background-color: #1E2B58;">
                <!-- tabbarview top -->
                <li class="nav-cate nav-item" role="presentation">
                    <button class="btn-category  d-md-block d-none nav-link lead font-weight-bold text-white disabled" id="home-tab"
                        data-bs-toggle="tab" data-bs-target="" type="" role="tab" aria-controls="home"
                        aria-selected="true">Category | </button>
                </li>
                <li class="nav-cate nav-item" role="presentation">
                    <button class="btn-category nav-link lead text-white" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="<?php echo "./page1.php?UserID=$userid&mypage=1" ?>" type="button" role="tab"
                        aria-controls="home" aria-selected="true">
                        <?php
                        echo " <a href='./page1.php?UserID=$userid&mypage=1' class='text-decoration-none text-white'>    
                           Technology </a> ";
                        ?>
                    </button>
                </li>
                <li class="nav-cate nav-item" role="presentation">
                    <button class="btn-category nav-link lead " id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="<?php echo "./animal.php?UserID=$userid&mypage=1" ?>" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">
                        <!-- animal category link -->
                        <?php
                        echo " <a href='./animal.php?UserID=$userid&mypage=1' class='text-decoration-none text-white'>    
                             Animal </a> ";
                        ?>



                    </button>
                </li>
                <li class="nav-cate nav-item" role="presentation ">
                    <button class="btn-category nav-link lead text-white lead " id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="<?php echo "./landscape.php?UserID=$userid&mypage=1" ?>" type="button"
                        role="tab" aria-controls="contact" aria-selected="false">
                        <?php
                        echo " <a href='./landscape.php?UserID=$userid&mypage=1' class='text-decoration-none text-white'>    
                             landscape </a> ";
                        ?>

                    </button>
                </li>
                <li class="nav-cate nav-item" role="presentation ">
                    <button class="btn-category nav-link lead text-white active font-weight-bold" id="contact-tab"
                        data-bs-toggle="tab" data-bs-target="<?php echo "./other.php?UserID=$userid&mypage=1" ?>"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">
                        <?php
                        echo " <a href='./other.php?UserID=$userid&mypage=1' class='text-decoration-none text-dark'>    
                             other </a> ";
                        ?>

                    </button>
                </li>
            </ul>
        </div>

    </section>
    <!-- coralsal -->
    <section class="top-img-page container-fluid m-0 p-0">
        <div class="container d-flex align-items-center" style="padding-top: 150px; padding-bottom: 100px;">
            <div class="row align-items-center">


                <div class="col-12 col-md-12 text-left">
                    <div class="header">

                        <p class="display-4 lead font-weight-bold text-md-left">Other
                        </p>
                        <p class="lead font-weight-lighter">whether you're looking for stunning macro-photography or
                            shots of complex architectural shapes Find out about his miraculous story of rescue, treatment and recovery here any article, news piece, or guide that's published in the blog section of a website.

                        </p>
                        <!-- search form -->
                      <!-- search form -->
                      <form action="#" method="post">
                       
                       <div class="input-group input-group-lg my-5" style="border:0px;">
                               
                           <span type="" class="input-group-text d-none d-md-block"
                               style="background-color: #1E2B58;border:0px;color:white"><i
                                   class="bi bi-search"></i> </span>
                           <input type="search" class="form-control rounded" placeholder="Search your blog here"
                               aria-label="Search" aria-describedby="search-addon" style="width:400px;" name="search" />
                           <input type="submit" class="input-group-text d-md-block d-block  d-none " name="btn_searching"
                               style="background-color: #1E2B58;border:0px;color:white" value="Enter"> </input>


                       </div>

                   </form>

                   <?php 
                      if(isset($_POST['btn_searching'])){
                        $search = $_POST['search'];
                       echo " <script> 
                                   window.location.href='CRUD/./search.php?search=$search&mypage=1&id=$userid';
                               </script>";
                             }
                           
                   ?>

                      
                    
                    </div>



                    <div class="footer my-5">


   


                    </div>
                </div>


            </div>

        </div>



    </section>



    <!-- tabview -->

    <!-- Nav tabs -->



    <section class="category view my-5">
        <div class="container">

            <!-- tab content -->
            <div class="tab-content my-5" id="myTabContent">
                <!-- technology section -->

                <div class="tab-pane fade show active container" id="home" role="tabpanel" aria-labelledby="home-tab">





                    <!-- search and today blog -->
       
                    <!-- //blog here -->
                    <div class="row my-5 g-5">
                        <div class="row">
                            <div class="col-12 ">
                     <form method="POST" action="">
                                <div class="content d-flex justify-content-between align-items-center">

                                <h1 style="flex-grow: 6" >Today Blog</h1>
                                <!-- newest latest -->
                        
                                <select class="form-select-sm w-25 lead d-none" name="select" id="" style="font-size: 20px;flex-grow:4 " >

                            
                                    <div class="form-row d-flex">
                                        <div class="container lead">
                                            <option value="DESC" name="filter" selected>Latest</option>
                                            <option value="ASC" name="filter">Oldest</option>
                                            <option value="view" name="filter">Trending</option>
                                          
                                        </div>
                                      
                                        





                                     
                                    </div>
                                 
                                 
                               
                       
                                </select>
                 
                                <div class="form-input d-none">
                                     <input type="submit" class="btn btn-outline-dark form-control bg-white text-dark" value ="Go" name="fill">
                                </div>
                         
                                </div>
                    </form>
                                

                                  
                      
                          
                             
                            </div>

                        </div>

                              <?php
                                 if(isset($_GET["sub"])){
                                    echo "true";
                                 }
                                            

                                ?>
                        <?php
                        if(isset($_POST["fill"])){
                                echo "<script>
                                    window.location.href='page1.php?UserID = $userid&mypage=1';
                                </script>";
                            }
                        if (isset($_GET['mypage'])) {
                            $numpage = $_GET['mypage'];
                            $id = $_GET['UserID'];

                            $page = ($numpage - 1) * 6;

                            $sql_getall = "SELECT b.UserID, b.Post_ID, b.title,b.Des,b.image,b.Post_Date,a.UserName 
                            FROM tbl_blog b inner join tbl_user a on a.UserID = b.UserID 
                            WHERE b.Category_ID =12326
                           ORDER by b.Post_ID LIMIT $page,6 ;";

                            $result = mysqli_query($db, $sql_getall);
                            if (!$result) {
                                die("error");
                            }
                      

                            while ($row = mysqli_fetch_assoc($result)) {
                                // link blog here
                                echo "   
                       <div class='col-12 col-md-6 col-lg-4'>
    
                          <div class='card shadow-sm' style=''>
                          <div class='".$row['Post_ID']."' card-img display-5 font-weight-normal border-0 bg-white'>

        
                          <a href='./readblog.php?UserID=" . $row['UserID'] . "&id=" . $id . " &title=" . $row['title'] . "&postid=" . $row['Post_ID'] . "'> 
                          <img src='" . $row['image'] . "'
                           alt='' class='img-fluid' style='height:270px; width:100%;'>
                           </a>
                   </div>
                   <div class='card-content lead' >


                 <div class='card-body' style='height:250px; width:100%;'>
              
                 <a href='./readblog.php?UserID=" . $row['UserID'] . "&id=" . $id . " &title=" . $row['title'] . "&postid=" . $row['Post_ID'] . "' class='text-decoration-none text-dark'>  <p class='card-title font-weight-bold lead' style='font-size: 28px;'>" . $row['title'] . "</p>
                <p class='card-subtitle'>" . substr($row['Des'], 0, 161) . "</p></a>

              </div>


              </div>


              <div
                   class='card-footer border-0 bg-white d-flex justify-content-between align-items:center'>

                   <div class='lead '> Date: <span class='date lead font-weight-bold'>" . $row['Post_Date'] . "</span> </div>
                   <div class='lead'>Author: <span class='lead font-weight-bold '>" . " " . $row['UserName'] . "</span></div>

              </div>
             </div>
                </div>";

                            }

                        } 
                        else {
                            // echo "No name";
                        }

                        ?>


                    </div>
                  
                  
                
                
                    <!-- pagination -->
                   <!-- pagination -->
                   <div class="d-none d-md-block here container">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center" style="background-color:#e9ecef  ;">
                                <?php
                                if (isset($_GET['mypage'])) {
                                    $checkpage = $_GET['mypage'];
                                }

                                ?>
                                <?php

                                if (isset($_GET['mypage'])) {
                                    $sql = "SELECT count(*) from tbl_blog
                                                   where Category_ID = 12326;";
                                    $count = mysqli_query($db, $sql);
                                    $row = mysqli_fetch_row($count);

                                    $totalpage = ceil($row[0] / 6);

                                }




                                ?>
                                <?php
                                if (isset($_GET['mypage'])) {
                                    $nextpage = $_GET['mypage'];
                                }
                                $nextpage--;
                                if ($nextpage == 0) {
                                    $nextpage++;
                                }


                                echo "   <li class='page-item 'text-dark>
                                    <a class='page-link text-dark' href='./other.php?UserID=$userid&mypage=" . $nextpage . "'> Previous <span class='sr-only'>(current)</span></a>
                                </li>";



                                ?>
                                <!-- <li class="page-item disabled" style='background-color:#1E2B58;'>
                                    <a class="page-link " href="#" tabindex="-1"
                                        style='background-color:#1E2B58;color:white;'>Previous</a>
                                </li> -->

                                <?php

                                for ($i = 1; $i <= $totalpage; $i++) {
                                    //check page active
                                    if ($checkpage == $i) {
                                        $checkactive = "active";
                                    } else {
                                        $checkactive = "";
                                    }

                                    //dot dot dot
                                    if ($i > 3) {
                                        echo "<li class='page-item text-dark'>
                                        <a class='page-link text-dark'>...<span class='sr-only'>(current)</span></a>
                                      </li>";
                                    } else {
                                        echo "<li class='page-item " . $checkactive . "' >
                                    <a class='" . $checkactive . " page-link' href='./other.php?UserID=$userid&mypage=" . $i . "'>" . $i . " <span class='sr-only'>(current)</span></a>
                                  </li>";
                                    }




                                }

                                ?>
                                <!-- pagination next -->

                                <?php
                         if(isset($_GET['mypage'])){
                            $nextpage = $_GET['mypage'];
                           }
                           $nextpage++;
                           if($nextpage > $totalpage){
                            $nextpage--;    
                           }
                                echo "   <li class='page-item ' style='background-color:#1E2B58;'>
                                    <a class='page-link text-dark' href='./other.php?UserID=$userid&mypage=" . $nextpage . "'> Next <span class='sr-only'>(current)</span></a>
                                </li>";




                                ?>




                            </ul>
                        </nav>
                    </div>

                    <!--cotent recent blog -->
                    <div class="container-today bg">
                        <!-- todayblog -->

                        <div class="row my-5 g-5">

                            <div class="col-12">
                                <div class="header-recent">
                                    <h1>Trending now</h1>
                                </div>
                            </div>

                        </div>

                        <div class="row my-5 g-5 align-content-center">
                            <!-- Trending now blog -->
                            <?php if (isset($_GET['UserID'])) {

                                        $sql_getall = "SELECT b.UserID,b.Post_ID,b.view_count ,b.title,b.Des,b.image,b.Post_Date,a.UserName FROM tbl_blog b
                                            inner join tbl_user a on a.UserID = b.UserID order by b.view_count DESC LIMIT 0,3;";
                                $result = mysqli_query($db, $sql_getall);

                                if (!$result) {
                                    die("error");
                                }
                                $row = mysqli_fetch_assoc($result);


                                echo "<div class='col-12 col-md-7'>
                                <!-- col 1 trending now -->
                                <a href='./readblog.php?UserID=" . $row['UserID'] . "&id=" . $id . "&title=" . $row['title'] . "&postid=" . $row['Post_ID'] . "' style='text-decoration: none;color:white'>
                                    <div class='container-out'
                                        style='   background: rgba(0, 0, 0, 0.57) url(" . $row['image'] . ");'>


                                        <div class='card-content lead '>

                                            <div class='card-body-one'>
                                                <div class='card-title font-weight-bold' style='font-size: 30px    ;'>
                                                  " . $row['title'] . "
                                                </div>

                                                <p class='lead'>
                                                    " . $row['Des'] . "

                                                </p>
                                                <!-- <div class='card-foot d-flex justify-content-between'>
                                                <div class='postby'>
                                                <span class='date d-inline'>Date: Jan/20/2002</span>
                                                <span class ='font-weight-bold'>Siv Sovanpanhavorn</span>
                                                </div>
                                                
                                           
                                                <button class='btn btn-outline-warning my-2'>Read More</button>

                                            </div> -->


                                            </div>
                                        </div>

                                    </div>

                                </a>


                            </div>
                           
                                ";




                            }

                            ?>

                            <!-- row -->
                            <?php if (isset($_GET['UserID'])) {

                        $sql_getall = "SELECT b.UserID,b.Post_ID,b.view_count ,b.title,b.Des,b.image,b.Post_Date,a.UserName FROM tbl_blog b
                        inner join tbl_user a on a.UserID = b.UserID order by b.view_count DESC LIMIT 1,3;";
                                $result = mysqli_query($db, $sql_getall);

                                if (!$result) {
                                    die("error");
                                }
                                $row = mysqli_fetch_assoc($result);


                                echo "<div class='col-12 col-md-5'>
                         <!-- col 1 trending now -->
                         <a href='./readblog.php?UserID=" . $row['UserID'] . "&id=" . $id . "&title=" . $row['title'] . "&postid=" . $row['Post_ID'] . "' style='text-decoration: none;color:white'>
                             <div class='container-out'
                                 style='   background: rgba(0, 0, 0, 0.57) url(" . $row['image'] . ");'>


                                 <div class='card-content lead '>

                                     <div class='card-body-one'>
                                         <div class='card-title font-weight-bold' style='font-size: 30px    ;'>
                                           " . $row['title'] . "
                                         </div>

                                         <p class='lead'>
                                             " . $row['Des'] . "

                                         </p>
                                         <!-- <div class='card-foot d-flex justify-content-between'>
                                         <div class='postby'>
                                         <span class='date d-inline'>Date: Jan/20/2002</span>
                                         <span class ='font-weight-bold'>Siv Sovanpanhavorn</span>
                                         </div>
                                         
                                    
                                         <button class='btn btn-outline-warning my-2'>Read More</button>

                                     </div> -->


                                     </div>
                                 </div>

                             </div>

                         </a>


                     </div>
                    
                         ";




                            }

                            ?>

                            <?php if (isset($_GET['UserID'])) {

                                $sql_getall = "SELECT b.UserID,b.Post_ID,b.view_count ,b.title,b.Des,b.image,b.Post_Date,a.UserName FROM tbl_blog b
                                inner join tbl_user a on a.UserID = b.UserID order by b.view_count DESC LIMIT 2,3;";
                                $result = mysqli_query($db, $sql_getall);

                                if (!$result) {
                                    die("error");
                                }
                                $row = mysqli_fetch_assoc($result);


                                echo "<div class='col-12 col-md-12'>
                         <!-- col 1 trending now -->
                         <a href='./readblog.php?UserID=" . $row['UserID'] . "&id=" . $id . "&title=" . $row['title'] . "&postid=" . $row['Post_ID'] . "' style='text-decoration: none;color:white'>
                             <div class='container-out'
                                 style='   background: rgba(0, 0, 0, 0.57) url(" . $row['image'] . ");'>


                                 <div class='card-content lead '>

                                     <div class='card-body-one'>
                                         <div class='card-title font-weight-bold' style='font-size: 30px    ;'>
                                           " . $row['title'] . "
                                         </div>

                                         <p class='lead'>
                                             " . $row['Des'] . "

                                         </p>
                                         <!-- <div class='card-foot d-flex justify-content-between'>
                                         <div class='postby'>
                                         <span class='date d-inline'>Date: Jan/20/2002</span>
                                         <span class ='font-weight-bold'>Siv Sovanpanhavorn</span>
                                         </div>
                                         
                                    
                                         <button class='btn btn-outline-warning my-2'>Read More</button>

                                     </div> -->


                                     </div>
                                 </div>

                             </div>

                         </a>


                     </div>
                    
                         ";




                            }

                            ?>



                        </div>

                        <!-- header recent blog -->

                        <div class="row my-5 g-5">

                            <div class="col-12">
                                <div class="header-recent">
                                    <h1>Recent Blog</h1>
                                </div>
                            </div>

                        </div>


                        <!-- php code read blog -->
                        <div class="row my-5 g-5">
                            <?php

                            if (isset($_GET['UserID'])) {

                                $sql_getall = "SELECT b.UserID,b.title,b.Des,b.image,b.Post_Date,a.UserName,b.Post_ID FROM tbl_blog b inner join tbl_user a on a.UserID = b.UserID ORDER by b.Post_ID DESC LIMIT 3;";
                                $result = mysqli_query($db, $sql_getall);
                                if (!$result) {
                                    die("error");
                                }


                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "   
                                <div class='col-12 col-md-6 col-lg-4 '>
                                 <div class='card shadow-sm' style=''>
                                    <div class='card-img display-5 font-weight-normal border-0 bg-white'>
                                    <a href='./readblog.php?UserID=" . $row['UserID'] . "&title=" . $row['title'] . "&postid=" . $row['Post_ID'] . "'>
                                     <img src='" . $row['image'] . "'
                                    alt=' class='img-fluid' style='height:270px; width:100%;'>
                                    </a>
                            
                            
                                
                                    </div>
                                    <div class='card-content lead' >
                            
                            
                                        <div class='card-body' style='height:250px; width:100%;'>
                                          
                                            <p class='card-title font-weight-bold lead' style='font-size: 32px;'>" . $row['title'] . "</p>
                                            <p class='card-subtitle'>" . substr($row['Des'], 0, 161) . "</p>
                            
                                        </div>
                            
                            
                                    </div>
                     

                                    <div
                                        class='card-footer border-0 bg-white d-flex justify-content-between align-items:center'>
                            
                                       <div class='lead '> Date: <span class='date lead font-weight-bold'>" . $row['Post_Date'] . "</span> </div>
                                        <div class='lead'>Author: <span class='lead font-weight-bold '>" . " " . $row['UserName'] . "</span></div>
                            
                                    </div>
                                </div>
                            </div>";
                                }
                                // mysqli_close($db);
                            
                            }

                            ?>


                        </div>





                    </div>






                    <div class="tab-pane fade" id="#profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <h1>Today Blog</h1>
                                <select class="form-select-sm w-25 lead " name="select" id="" style="font-size: 20px;">

                                    <div class="container lead">
                                        <option value="" name="" selected>Latest</option>
                                        <option value="" name="">Oldest</option>
                                        <option value="" name="">Trending</option>
                                    </div>


                                </select>

                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="#contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-between">
                                <h1>Today Blog</h1>
                                <select class="form-select-sm w-25 lead " name="select" id="" style="font-size: 20px;">

                                    <div class="container lead">
                                        <option value="" name="" selected>Latest</option>
                                        <option value="" name="">Oldest</option>
                                        <option value="" name="">Trending</option>
                                    </div>


                                </select>

                            </div>

                        </div>
                    </div>



                </div>



                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <h1>Todaasdy Blog</h1>
                            <select class="form-select-sm w-25 lead " name="select" id="" style="font-size: 20px;">

                                <div class="container lead">
                                    <option value="" name="" selected>Latest</option>
                                    <option value="" name="">Oldest</option>
                                    <option value="" name="">Trending</option>
                                </div>


                            </select>

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <h1>Today Blog</h1>
                            <select class="form-select-sm w-25 lead " name="select" id="" style="font-size: 20px;">

                                <div class="container lead">
                                    <option value="" name="" selected>Latest</option>
                                    <option value="" name="">Oldest</option>
                                    <option value="" name="">Trending</option>
                                </div>


                            </select>

                        </div>

                    </div>
                </div>
            </div>
    </section>





    <!-- Tab panes -->

    <div class="d-block d-md-none here container">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center" style="background-color:#e9ecef  ;">
                                <?php
                                if (isset($_GET['mypage'])) {
                                    $checkpage = $_GET['mypage'];
                                }

                                ?>
                                <?php

                                if (isset($_GET['mypage'])) {
                                    $sql = "SELECT count(*) from tbl_blog
                                                   where Category_ID = 12324;";
                                    $count = mysqli_query($db, $sql);
                                    $row = mysqli_fetch_row($count);

                                    $totalpage = ceil($row[0] / 6);

                                }




                                ?>
                                <?php
                                if (isset($_GET['mypage'])) {
                                    $nextpage = $_GET['mypage'];
                                }
                                $nextpage--;
                                if ($nextpage == 0) {
                                    $nextpage++;
                                }


                                echo "   <li class='page-item 'text-dark>
                                    <a class='page-link text-dark' href='./animal.php?UserID=$userid&mypage=" . $nextpage . "'> Previous <span class='sr-only'>(current)</span></a>
                                </li>";



                                ?>
                                <!-- <li class="page-item disabled" style='background-color:#1E2B58;'>
                                    <a class="page-link " href="#" tabindex="-1"
                                        style='background-color:#1E2B58;color:white;'>Previous</a>
                                </li> -->

                                <?php

                                for ($i = 1; $i <= $totalpage; $i++) {
                                    //check page active
                                    if ($checkpage == $i) {
                                        $checkactive = "active";
                                    } else {
                                        $checkactive = "";
                                    }

                                    //dot dot dot
                                    if ($i > 3) {
                                        echo "<li class='page-item text-dark'>
                                        <a class='page-link text-dark'>...<span class='sr-only'>(current)</span></a>
                                      </li>";
                                    } else {
                                        echo "<li class='page-item " . $checkactive . "' >
                                    <a class='" . $checkactive . " page-link' href='./animal.php?UserID=$userid&mypage=" . $i . "'>" . $i . " <span class='sr-only'>(current)</span></a>
                                  </li>";
                                    }




                                }

                                ?>
                                <!-- pagination next -->

                                <?php
                                  if(isset($_GET['mypage'])){
                                    $nextpage = $_GET['mypage'];
                                   }
                                   $nextpage++;
                                   if($nextpage > $totalpage){
                                    $nextpage--;    
                                   }

                                echo "   <li class='page-item ' style='background-color:#1E2B58;'>
                                    <a class='page-link text-dark' href='./animal.php?UserID=$userid&mypage=" . $nextpage . "'> Next <span class='sr-only'>(current)</span></a>
                                </li>";




                                ?>




                            </ul>
                        </nav>
                    </div>




    <!-- footer section here -->
    <section class="footer  "
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



<!-- pagination algorithms -->