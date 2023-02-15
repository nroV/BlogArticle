<?php

include_once("../../database/data.php");
?>

<?php


if (isset($_GET['Postid'])) {
    $postid = $_GET['Postid'];
    $userid = $_GET['UserID'];
    echo "true";
    $sql = "DELETE from tbl_blog
    WHERE Post_ID =$postid";

    $result = mysqli_query($db, $sql);

    if (!$result) {
        echo "error";
    } else {

    }

    header("location:.././editblog.php?UserID=$userid");

}

mysqli_close($db);

?>