<?php

$connection = mysqli_connect('localhost','root','','pickPack');
if(!$connection) {
    die("<script type='text/javascript'>alert('connection Failed!');</script>");
}

?>