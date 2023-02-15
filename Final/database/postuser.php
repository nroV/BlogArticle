<?php

if (isset($_POST["btn-submit"])) {


    $fistname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $gender = $_POST["radio-gender"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $date_now = date('d-M-Y', Time());
    $created_date = $date_now;
    $filename = $_FILES["file-up"]["name"];
    $source =$_FILES["file-up"]["tmp_name"];
    $size   =$_FILES["file-up"]["size"];

    $desination = '.././image/' . $filename;


    if ( $size <= 0 || $fistname === '' || $lastname ==='' || $username === '' || $username === null || $password === '' || $password === null || $gender === '' || $gender === null ||  $email ==='') {
        echo "<script> 
        
                alert('Registeration failed please check your form again');
            </script>
        ";
    } else {

        $sql = "INSERT INTO tbl_user(FirstName,LastName,Email,Gender,UserName,Password,Profile_Image)
            VALUES('$fistname','$lastname','$email','$gender','$username','$password','$desination');";


        $aresult = mysqli_query($db, $sql);


        if (mysqli_errno($db) > 0) {
            die("Error on");
        } else {

        }
        echo "<script> 
        
        alert('Registeration complete');
             </script>
";


    }


    mysqli_close($db);

}

?>