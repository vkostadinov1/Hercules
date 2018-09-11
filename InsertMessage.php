<?php

$host = "209.159.158.122	";
$username = "track8te_Hercules";
$password = "+*z}zOj@O{Xe";
$database = "track8te_Hercules";

//create a connection

$conn = new mysqli($host, $username, $password, $database);

$first_name = filter_input(INPUT_POST, 'first_name');
$email = filter_input(INPUT_POST, 'email');
$desired_date = filter_input(INPUT_POST, 'desired_date');
$desired_time = filter_input(INPUT_POST, 'desired_time');
$info = filter_input(INPUT_POST, 'info');




if(mysqli_connect_error()){
    die('Connection error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}else{
    $sql = "INSERT INTO messages (first_name, email, desired_date, desired_time, info) VALUES ('$first_name','$email','$desired_date','$desired_time','$info')";
    if ($conn->query($sql)){
        echo "New record is inserted successfully!";
    }
    else{
        echo "Error:" . $sql . $conn->error;
    }
    $conn->close();
}