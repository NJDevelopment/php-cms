<?php session_start(); ?>
<?php include "db_connection.php" ?>

<?php 
    if(!isset($_POST["username"], $_POST["password"]) ) {
        echo "username/password required";
    }
?>
