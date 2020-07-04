<?php session_start() ?>
<?php include "db_connection.php" ?>

<?php 
    $invalidLogin = $unameError = $passwordError = $uname = $password = "";

    if(isset($_POST["submit"])) {
        // Check if username is valid
        if(empty($_POST["username"])) {
            $unameError = "Username is required";
        }
        // Check if password is valid
        if(empty($_POST["password"])) {
            $passwordError = "Password is required";
        } else {
            $uname =  mysqli_real_escape_string($connection, $_POST['username']);
            $password =  mysqli_real_escape_string($connection, $_POST['password']);
            
            $query = "SELECT username, password FROM users WHERE username = '$uname' AND password = '$password'";

            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

            $rows = mysqli_num_rows($result);

            // if username/password are true
            if ($rows == 1) {
                $_SESSION['user'] = $uname; 
                header("Location: user-profile.php"); 
            } else {
                $invalidLogin = "Username or Password is invalid";
            }
        }
    }
?>


