<div class="row">
    <div class="col-6">
        <a class="logo" href="/public">MemeMe</a>
    </div>
    <nav class="col-6 d-flex jc-fe"> 
        <?php if(!isset($_SESSION['user'])) { ?>
            <a href="/public/login.php">Login</a>
            <a href="/public/create-account.php">Create Account</a>
        <?php } else { ?>
            <?php 
                $uname = $_SESSION['user'];
                echo "Hello " . $uname . "!";
            ?>
            <a href="upload.php">Upload</a>
            <a href="logout.php">Log out</a>
        <?php } ?>
    </nav>
</div>