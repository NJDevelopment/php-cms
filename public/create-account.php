<?php include "../private/create-account.php" ?>
<?php include "navigation.php" ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h4>Sign up</h4>
    <input type="email" placeholder="Email" name="email" />
    <p><?php echo $emailError ?></p>
    <input type="text" placeholder="Username" name="username" /> 
    <p><?php echo $usernameError ?></p>
    <input type="password" placeholder="Password" name="password" />
    <p><?php echo $passwordError ?></p>
    <input type="submit" name="submit" value="Create Account">
</form>