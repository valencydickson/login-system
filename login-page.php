<?php
require_once "partial/header.php";

?>

<main class="register-wrapper">

    <div class="hero-wrapper">
        <h1 class="heading"><a href="login-page.php"><span><i class="fas fa-sign-in-alt"></i></span>Login System</a></h1>
        <div>
            <p>Welcome to a PHP login system</p>
            <img src="images/hero.png" alt="register image" class="hero-img-login">
        </div>
        <div class="links">
            <a href=""><i class="fas fa-blog"></i></a>
            <a href=""><i class="fab fa-github"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>

        </div>
    </div>


    <div class="form-wrapper">

        <h3>Thank you for registering to our Login System !!!</h3>
        <p>Please Login to your account.</p>
        <span class="error"><?php echo (isset($_GET["error"])) ? htmlspecialchars($_GET["error"]) : "" ?></span>
        <div>
            <form action="<?php echo htmlspecialchars('controllers/login.php') ?>" method="post">

                <div>
                    <div class="form-group">
                        <label for="pwd">Username or Email</label>

                        <input type="text" class="form-control" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary submit-btn">Login</button>
            </form>
            <p class="form-footer">Don't have an account yet? <span><a href="./">Register now</a></span></p>
        </div>
    </div>
</main>

<?php require_once __DIR__ . "partial/footer.php";
