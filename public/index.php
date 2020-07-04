<html lang="en">
<?php include "../private/authenticate.php" ?>
<?php include "head.php" ?>

<body>
    <div class="container">
    <?php 
        include "../private/db_connection.php";

        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);

        //check associative array for users ID
        print_r(mysqli_fetch_assoc($result));
        $fetchId = mysqli_fetch_assoc($result);
        $userId = $_SESSION['userid'] = $fetchId['id'];
        
    ?>
        <!-- navigation menu -->
        <?php include "navigation.php" ?>
    </div>


</body>

</html>