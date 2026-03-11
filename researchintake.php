<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$institute = mysqli_real_escape_string($conn, $_POST['institute']);
$degree = mysqli_real_escape_string($conn, $_POST['degree']);
$start_year = mysqli_real_escape_string($conn, $_POST['start_year']);
$phone = mysqli_real_escape_string($conn, $_POST['phone_num']);
$skills = mysqli_real_escape_string($conn, $_POST['skills']);
$why_us = mysqli_real_escape_string($conn, $_POST['why_us']);

$resume_name = $_FILES['resume']['name'];
$temp_name = $_FILES['resume']['tmp_name'];

$upload_folder = "uploads/";
$final_path = $upload_folder . basename($resume_name);

move_uploaded_file($temp_name, $final_path);

$sql = "INSERT INTO research_applications
(fullname,email,institute,degree,start_year,phone_num,skills,why_us,resume)
VALUES
('$fullname','$email','$institute','$degree','$start_year','$phone','$skills','$why_us','$resume_name')";

if(mysqli_query($conn,$sql)){
    echo "Application Submitted Successfully";
}else{
    echo "Error: " . mysqli_error($conn);
}

}

?>