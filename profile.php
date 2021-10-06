<?php
require_once "partial/header.php";

if ($_SESSION['username']) {
?>
    <div class="welcome-wrapper">
        <div class="welcome-hero"></div>
        <div class="intro">
            <h1>Hello <span><?php echo ($_SESSION["fullName"]) ?></span>, Welcome to the PHP Login System.</h1>
            <p>You are logged in as <span><?php echo ($_SESSION["username"])  ?>.</p>
            <button class="btn  btn-logout"><a href="controllers/logout.php">Logout</a></button>
        </div>

    </div>

<?php } else {
    $error = "Please register or Login to access profile page";
    header("location:./?error= $error");
}
?>

<?php require_once "partial/footer.php";
