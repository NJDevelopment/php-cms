<?php include "../private/db_connection.php" ?>
<?php include "header.php" ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="">
    <input type="text" placeholder="Title" name="title">
    <input type="" placeholder="Description" name="desc">
    <button type="submit">Submit</button>
</form>