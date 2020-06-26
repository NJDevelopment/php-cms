<?php include "../private/authenticate.php" ?>
<?php include "head.php" ?>

<div class="container">
    <?php include "navigation.php" ?>

    <?php 
        if(isset($_SESSION['user'])) {
            $uname = $_SESSION['user'];
            echo $uname . ", this is your profile page.";
        } else {
            echo "not set";
        }
    ?>
</div>
