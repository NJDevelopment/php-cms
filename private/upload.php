<?php session_start() ?>
<?php include "db_connection.php" ?>
<?php 
$titleError = $descriptionError = $imageError = $categoryError = "";

if(isset($_POST["submit"])) {
    if(empty($_POST["title"])) {
        $titleError = "Title is required";
    }
    if(empty($_POST["description"])) {
        $descriptionError = "Description is required";
    } 
    else {
        $title =  mysqli_real_escape_string($connection, $_POST['title']);
        $description =  mysqli_real_escape_string($connection, $_POST['description']);
        
        //create query to select user ID and insert into the upload variable
        //so that whoever is logged in will have the user ID set in the database upon 
        //uploading content.
        $userIdQuery = "SELECT id FROM users";
        $idQuery = mysqli_query($connection, $userIdQuery);
        $fetchIdQuery = mysqli_fetch_assoc($idQuery);
        $userId = $_SESSION['userid'] = $fetchIdQuery['id'];
    
        $upload = "INSERT INTO content (title, description, id_fk) VALUES ('$title', '$description', '$userId')";
        mysqli_query($connection, $upload);
        // header("Location: index.php");
        echo "Added successfully";
    }
}
?>