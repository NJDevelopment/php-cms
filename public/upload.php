<?php include "head.php"?>
<?php include "../private/upload.php" ?>

<?php 
    if(isset($_SESSION['user'])) {
        $uname = $_SESSION['user'];
        echo $uname . ", this is your profile page.";
    } else {
        echo "not set";
    }
?>

<div class="container">
    <?php include "navigation.php" ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" name="title" placeholder="Title">
        <p><?php echo $titleError ?></p>
        <input type="text" name="description" placeholder="Description">
        <p><?php echo $titleError ?></p>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</div>