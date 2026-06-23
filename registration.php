<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST["full_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $cohort_applying_for = $_POST["cohort_applying_for"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $sql = "INSERT INTO student
    (`Full Name`,`Date of Birth`,`Email`,`Phone Number`,
    `Corhort Applying For`,`Password`,`Confirm Password`)
    VALUES
    ('$full_name','$date_of_birth','$email','$phone_number',
    '$cohort_applying_for','$password','$confirm_password')";

    if(mysqli_query($conn,$sql)){
        echo "Record inserted successfully";
    } else {
        echo mysqli_error($conn);
    }
}
?>