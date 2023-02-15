<?php
if (isset($_POST['btn_post'])) {

    $db_post = mysqli_connect("localhost", "root", "111", "tbl_student");


    $title = $_POST['txt-title'];
    $desc = $_POST['txt-desc'];
    $category = $_POST['select-group'];
    $file_name = $_FILES["file_uploading"]["name"];

    $source = $_FILES["file_uploading"]["tmp_name"];
    $userid = $_GET['UserID'];



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


   //validation here
   if($title ==='' || $desc === '' || $category ==='' || $file_name  ===''){
    echo "<script> 
    
                alert('Registeration failed please check your form again');
               
            </script>
        ";

        }     
        
        else{
            $sql_three = "INSERT INTO tbl_blog(title, Des, image, Post_Date, Category_ID, UserID) 
            VALUES ('$title','$desc','$destination',' $datepost',  $categoryid,$userid);";
            $result = mysqli_query($db_post, $sql_three);
        
            if (mysqli_errno($db)) {
                die("error on" . mysqli_errno($db));
            }
            if (!$result) {
        
            }
            //get post id
        
        
        
            echo "<script> 
        
                    window.location.href='./page1.php?UserID=$userid&mypage=1';
               </script>";
        
        
            exit();
        }
 

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
?>