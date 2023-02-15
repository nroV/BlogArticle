<?php


$db = mysqli_connect("localhost", "root", "111", "tbl_student");

if (mysqli_connect_errno() > 0) {
    echo "error id:" + mysqli_connect_error() + "on " + mysqli_connect_errno();
} else {

}

?>