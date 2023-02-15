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

    <?php require_once("../../database/data.php") ?>


</head>
<style>
    @import url("./font/font.css");
    @import url("./https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    @import url("./css/media.css");
    @import url("./css/hover.css");
    @import url("./css/form.css");

    #vemail {
        background-color: #1E2B58;
        border: 0px;
        color: white;
        font-weight: 700;
    }

    #vemail:hover {
        background-color: darkblue;
        border: 0px;
        color: white;
        font-weight: 700;
    }

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
        background-color: #1E2B58;

    }

    html {
        scroll-behavior: smooth;
    }

    input[type="text"] {}
</style>

<body>

    <section class="email-header">

        <div class="container d-flex justify-content-center align-items-center" style="height:1000px;">
            <form action="" method="POST">

                <div class="card align-items-center">
                    <div class="card-header d-none"></div>
                    <div class="card-top">
                        <img src="../../image/88708-email.gif" alt="" class="img-fluid" width="300px" height="300px">
                    </div>
                    <div class="card-body p-5">



                        <div class="card-title font-weight-bold lead text-center" style="font-size: 25px;">
                            Change Password
                        </div>
                        <div class="card-content lead text-justify">Lorem
                            ipsum dolor sit amet consectetur
                            adipisicing elit. Neque minus,

                        </div>
                        <div class="card-subtitle my-3 lead">
                            Your following username:
                        </div>

                        <div class="form-group my-3">
                            <div class="input-group">

                                <input type="password" class="form-control form-control-lg" placeholder="new password"
                                    name="password" maxlength="10" id="pass">
                  
                            </div>

                        </div>
                        <label for="" class="form-label text-danger">
                                    <!-- <?php
                                    if ($_POST["password"] == '') {
                                        echo "*Please provide your password";
                                    }
                                    ?> -->
                                </label>
                        <?php
                        if ($_GET["email"]) {
                            $emailhere = $_GET["email"];
                        }
                        ?>

                        <div class="form-check">

                            <input type="checkbox" class="form-check-input" id="chbox">
                            <input type="text" class="form-check-input d-none" id="" value="<?php echo $emailhere ?>"
                                name="email">
                            <label class="form-check-label" for="chbox">show password</label>
                            <!-- check password to text -->
                       

                        </div>

                        <div class="subtitle d-flex justify-content-center my-5">
                            <input class="text-center w-100" id="vemail" name="changepass" type="submit"
                                value="Change Password"></input>
                            <!-- email php -->


                        </div>

                        <div class="card- border-0 bg-white text-center lead">
                            molestias beatae veritatis quod ad reiciendis qui delectus quis dolor sint molestiae nobis
                            unde eveniet commodi. Deserunt, repudiandae voluptate?
                        </div>



                    </div>
                </div>
            </form>
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


    <script src="./javascript/one.js"></script>
    <script src="./javascript/insert.js"></script>
    <script src="./javascript/form.js"></script>
    <script src="../../javascript/password.js"></script>

</body>

</html>

<?php





if (isset($_POST["changepass"])) {


    if ($_POST["password"] === '') {

    } else {
        $yourpass = $_POST["password"];
        $email = $_POST["email"];

        $sql = "UPDATE tbl_user SET `Password`='$yourpass' WHERE Email ='$email';";
        $result = mysqli_query($db, $sql);
        if (!$result) {
            die("failed to query");
        }

        echo "<script> window.location.href='../login.php'</script>";
    }










}



?>