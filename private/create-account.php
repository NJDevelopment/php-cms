<?php include "db_connection.php" ?>

<?php 
$emailError = $usernameError = $passwordError = "";

if(isset($_POST["submit"])) {
    if(empty($_POST["email"])) {
        $emailError = "Email is required";
    }
    if(empty($_POST["username"])) {
        $usernameError = "Username is required";
    } 
    if(empty($_POST["password"])) {
        $passwordError = "Password is required";
    } else {
        $email =  mysqli_real_escape_string($connection, $_POST['email']);
        $username =  mysqli_real_escape_string($connection, $_POST['username']);
        $password =  mysqli_real_escape_string($connection, $_POST['password']);
    
        $insertUser = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($connection, $insertUser);
        header("Location: ../public/login.php");
    }
}
?>