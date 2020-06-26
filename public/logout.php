<?php include "head.php"?>
<?php include "../private/authenticate.php"?>

<?php unset($_SESSION['user']); ?> 

<div class="container">
    <?php include "../public/navigation.php"?>

    <?php 
        if (!isset($_SESSION["user"])) {
            echo "You have been logged out.";
        } else {
            echo "Something went wrong.";
        } 
    ?>
</div>