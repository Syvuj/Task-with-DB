<?php


$connect = mysqli_connect('localhost', 'root', '', 'rating');
if (!$connect) {
    die ("No connection with DB" . mysqli_error($connect));
}


?>