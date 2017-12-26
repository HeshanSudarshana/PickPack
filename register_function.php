<?php include "db.php"?>

<?php

// function form_submission(){
//     if(isset($_POST['submit'])) {
//         register_user();
//     }
// }

function form_submission() {
    if($_SERVER['REQUEST_METHOD']== "POST") {
        register_user();
    }
}

function register_user() {
    //connection variable
    global $connection;
    //validation variable
    // $valid = true;

    //retrieving data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_no = (int)$_POST['contact_no'];
    $password = $_POST['password'];
    $nic_no = $_POST['nic_no'];
    $index_no = $_POST['index_no'];
    $gender = $_POST['gender'];
    $house_no = $_POST['house_no'];
    $street_name = $_POST['street_name'];
    $city = $_POST['city'];

    //to prevent SQL injection
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $contact_no = mysqli_real_escape_string($connection, $contact_no);
    $password = mysqli_real_escape_string($connection, $password);
    $nic_no = mysqli_real_escape_string($connection, $nic_no);
    $index_no = mysqli_real_escape_string($connection, $index_no);
    $gender = mysqli_real_escape_string($connection, $gender);
    $house_no = mysqli_real_escape_string($connection, $house_no);
    $street_name = mysqli_real_escape_string($connection, $street_name);
    $city = mysqli_real_escape_string($connection, $city);

    //form validation
    // $no_space_name = preg_replace('/\s+/', '', $name);
    // if(!ctype_alpha($no_space_name)) {
    //     echo "<script type='text/javascript'>$(#name_err_label).text('Invalid name! No symbols must be included.');</script>";
    // }

    //password encryption
    $hashf = "$2y$10$";
    $salt = "justsomesampletexthere";
    $concat_hashf_salt = $hashf . $salt;
    $password = crypt($password, $concat_hashf_salt);

    $query = "INSERT INTO `user` (`name`, `email`, `contact_no`, `password`, `nic_no`, `index_no`, `gender`, `house_no`, `street_name`, `city`) VALUES ( '$name', '$email', $contact_no, '$password', '$nic_no', '$index_no', '$gender', '$house_no', '$street_name', '$city')";

    $result = mysqli_query($connection, $query);

    if($result) {
        echo "<script type='text/javascript'>alert('Query successful!');</script>";
    } else {
        die("<script type='text/javascript'>alert('Query Failed!');</script> ".mysqli_error($connection));
    }

}

?>