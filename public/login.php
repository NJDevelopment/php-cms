<?php include "head.php" ?>
<?php include "../private/authenticate.php"?>


<div class="container">
    <?php include "navigation.php" ?>
    <h4>Login</h4>
    <p class="error"><?php echo $invalidLogin ?></p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="username" placeholder="Username">
        <span class="error"><?php echo $unameError ?></span>
        <input type="password" name="password" placeholder="Password">
        <span class="error"><?php echo $passwordError ?></span>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>