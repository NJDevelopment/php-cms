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
        //encrypt password and use it in sql statement
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $insertUser = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashedPassword')";
        mysqli_query($connection, $insertUser);
        echo "added successfully";
        // header("Location: ../public/login.php");
    }
}
?>