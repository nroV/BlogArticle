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
    <?php include_once("../.././database/data.php") ?>

</head>
<style>
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
    *{
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
                                <input type="file" name="file_uploading" id="file_uploading" class="form-control">
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
   

    <section class="topbar sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark p-3 ">




            <span class="navbar-brand lead text-white font-weight-bold">
                Welcome Back, <span>
                    <?php

                    if (isset($_GET['UserID'])) {
                        $uid = $_GET['UserID'];
                        $sql = "SELECT TRIM(CONCAT(FirstName,LastName)) from tbl_user 
                            WHERE UserID = $uid;";
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
         

            <button class="navbar-toggler" data-target="#mainnav" data-toggle="collapse">

                <span class="navbar-toggler-icon">

                </span>


            </button>


            <div class="collapse navbar-collapse text-center justify-content-end" id="mainnav">

                <ul class="navbar-nav text-white lead">

                    <li class="nav-item"><a class="nav-link font-weight-bolder active">Edit</a></li>


                  
                    <li class="nav-item"><a class="nav-link font-weight-bolder" href="../page1.php?UserID=50&amp;mypage=1">Back</a></li>







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
                            echo " <a href='./animal.php?UserID=$uid' class='text-decoration-none text-dark'>    
                                 Animal </a> ";
                            ?>
    
    
      tab content -->

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
        <!-- Editing on blog php -->
        <div class="edit container my-5">

        </div>

        </div>

    </section>

    <div class="container">


        <form action="" method="post" enctype="multipart/form-data">
            <?php

            $imagefile = '';
            $categoryid = '';
            $userid = '';
            $post = '';
            if (isset($_GET['Postid'])) {
                // echo "Successfully";
                $post = $_GET['Postid'];
                $userid = $_GET['UserID'];

                $sql = "SELECT * from tbl_blog WHERE Post_ID = $post;";
                $result = mysqli_query($db, $sql);
                if (!$result) {
                    echo "error";
                }
                $row = mysqli_fetch_assoc($result);
                $imagefile = $row['image'];
                $categoryid = $row['Category_ID'];
                $title = $row['title'];
                $des = $row['Des'];

                // update blog
            
                echo "<script> 
                    console.log('Hello World');
                    console.log(`$imagefile`);
                    console.log(`$categoryid`);
                    console.log(`$post`);
                    console.log(`ID: $userid`);
                </script>";



                echo "<div class='header display-6 font-weight-bold text-md-left text-lg-left'>Blog Editing</div>
                            <br>
                            <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'
                            placeholder='Describe your title' name='picture' required value='" . $row['image'] . "' hidden>
                            <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'
                            placeholder='Describe your title' name='txt-postid' required value='" . $row['Post_ID'] . "' hidden>
                            <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'
                            placeholder='Describe your title' name='txt-userid' required value='" . $row['UserID'] . "' hidden>
                            <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'
                            placeholder='Describe your title' name='txt-cateid' required value='" . $row['Category_ID'] . "' hidden>
         
                           
                            <div class='form-group'>
                                <label for='exampleInputEmail1' class='form-label font-weight-normal '
                                    style='font-size:20px;'>Title</label><br>
                                <small class='lead d-none   ' style='font-size:15px;color:red'>Choose how other will
                                    view your blog base on the category*</small>
                                <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'
                                    placeholder='Describe your title' name='txt-title' value='" . $row['title'] . "'>";

                                    if (isset($_POST["btn_post"])) {

                                        if ($_POST['txt-title'] == "") {
                                            echo "<span class='text-danger'>*Title is missing</span>";
                                        }
                                        }
                            
                          echo"  </div>
                            <div class='form-group my-2'>
                                <label for='exampleInputPassword1' class='form-label font-weight-normal'
                                    style='font-size:20px;'>Description</label><br>
                            
                                <textarea class='form-control' placeholder='What is on your mind?...' rows='3'
                                    name='txt-desc' maxlength='240' style='height:200px;' > " . $row['Des'] . "</textarea>
                                    ";
                                    
                                    if (isset($_POST["btn_post"])) {

                                        if ($_POST['txt-desc'] == "") {
                                            echo "<span class='text-danger'>*Description is missing</span>";
                                        }
                                        }
                           echo" </div>
                            <div class='form-img my-2'>
                                <label for='exampleInputEmail1' class='form-label font-weight-normal '
                                    style='font-size:20px;'>Upload Image</label><br>
                                <small class='lead d-none ' style='font-size:15px;color:red'>Choose how other will view
                                    your blog base on the category*</small>
                                <input type='file' name='file_uploading' id='file_uploading' class='form-control'>
                            </div>
                            <div class='form-category my-1'>
                                <label for='exampleInputEmail1' class='form-label font-weight-normal'
                                    style='font-size:20px;'>Category</label>
                                <br>
                                <small class='lead' style='font-size:15px;color:#1E2B58'>Choose how other will view your
                                    blog base on the category*</small>
                            
                            </div>
                           ";


            }
            //post and check validation
        
            ?>
            <!-- update blog here -->
            <?php




            ?>
            <select class="form-select text-center my-3" name="select-group" id="" required>

                <?php
                // category from php
                
                if (isset($_GET['UserID'])) {
                    $sql = "SELECT * from tbl_category ;";

                    $result = mysqli_query($db, $sql);
                    if (!$result) {
                        die("Error on " . mysqli_error($db));
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['Category_Name'] . "' name='category_choose' >" . $row['Category_Name'] . "</option>";
                    }
                    $sql_categoryname = "SELECT * from tbl_category where Category_ID = $categoryid;";
                    $result = mysqli_query($db, $sql_categoryname);
                    if (!$result) {
                        die("Error on " . mysqli_error($db));
                    }


                }

                ?>

                <!-- <option value="Technology" name="category_choose">Technology</option>
    <option value="Sport" name="category_choose">Landscape</option>

    <option value="Animal" name="category_choose">Animal</option> -->
              

            </select>
            <input type='submit' class='btn btn-dark my-1 w-100 ' name='btn_post' value='Save'>

        </form>


       </div>

    <section class="my-5">

    </section>
    <!-- footer section here -->
    <section class="footer"
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



<?php
if (isset($_POST['btn_post'])){
    $title = $_POST['txt-title'];
$des = $_POST['txt-desc'];

    if(    $title === '' ||$des ===''){

        echo "<script> 
    
        alert('Registeration failed please check your form again');
       
    </script>
";
    }
    
    else {
        // update blog php
    
        $datepost = date('d-M-Y', time());
        $title = $_POST['txt-title'];
        $des = $_POST['txt-desc'];
        $postid = $_POST['txt-postid'];
    
    
        // if user change image
        $file_name = $_FILES["file_uploading"]["name"];
    
        $source = $_FILES["file_uploading"]["tmp_name"];
    
        $destination = '../.././image/' . $file_name;
        move_uploaded_file($source, $destination);
    
    
    
        $im = $destination;
        
    echo "after substring" . substr($im, 3, 200);
    echo "<br>";
    $im = substr($destination, 3, 200);
            //check if user upload file
        if ($_FILES["file_uploading"]["name"]=="" ||$_FILES["file_uploading"]["size"]<=0) {
            $img_file = $_POST['picture'];
    
    
            echo "true";
    
            $im = $img_file;
            echo "<br>";
         
            echo "The image path upload is a: " . $im;
        }
       
    
        $cateid = $_POST['txt-cateid'];
        $id = $_POST['txt-userid'];
    
    
        $sql = "UPDATE tbl_blog set title='  $title', Des = ' $des ', image=' $im',Category_ID=' $cateid ',Post_Date='$datepost'
        WHERE Post_ID ='$postid';";
    
    
    
    
        echo "$title";
        echo "<br>";
        echo "$des";
        echo "<br>";
        echo "$postid";
        echo "<br>";
        echo " path:here $im";
        echo "<br>";
        echo "categoryid: $cateid";
        echo "<br>";
        echo "userid = : $userid";
    
    
    
    
        $result = mysqli_query($db, $sql);
    
        if (!$result) {
            die("Error on " . mysqli_error($db));
        } else {
            // echo "Successful";
        }
    
        echo "<script> 
    
    
              window.location.href='../editblog.php?UserID= $id';
         </script>";
    
    
        exit();
    
    }
}



?> 