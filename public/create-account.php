<?php include "head.php" ?>
<?php include "../private/create-account.php" ?>

<div class="container">
    <?php include "navigation.php" ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h4>Sign up</h4>
        <input type="email" placeholder="Email" name="email" />
        <p class="error"><?php echo $emailError ?></p>
        <input type="text" placeholder="Username" name="username" /> 
        <p class="error"><?php echo $usernameError ?></p>
        <input type="password" placeholder="Password" name="password" />
        <p class="error"><?php echo $passwordError ?></p>
        <input type="submit" name="submit" value="Create Account">
    </form>
</div>