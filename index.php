<?php
require_once __DIR__ . "partial/header.php";
?>

<main class="register-wrapper">
    <div class="hero-wrapper">
        <h1 class="heading"><a href="./"><span><i class="fas fa-sign-in-alt"></i></span>Login System</a></h1>
        <div>
            <p>Welcome to a PHP login system</p>
            <img src="images/register.webp" alt="register image" class="hero-img">
        </div>
        <div class="links">
            <a href="https://valencydickson.xyz/" target="_blank"><i class="fas fa-blog"></i></a>
            <a href="https://github.com/valencydickson" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/valency-dickson-0a7754125/" target="_blank"><i class="fab fa-linkedin"></i></a>

        </div>
    </div>


    <div class="form-wrapper">
        <h3>Register</h3>
        <p>Please fill the form below to register.</p>
        <span class="error"><?php echo (isset($_GET["error"])) ? htmlspecialchars($_GET["error"]) : "" ?></span>
        <div>
            <form action="<?php echo htmlspecialchars('controllers/register.php') ?>" method="post">

                <div>
                    <div class="form-group">
                        <label for="fname">Full Name</label>
                        <input type="text" class="form-control" name="fname" required>
                    </div>



                    <div class="form-group">
                        <label for="pwd">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>


                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Repeat Password</label>
                        <input type="password" class="form-control" name="repeatPassword" required>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary submit-btn">Create Account</button>
            </form>
            <p class="form-footer">Already have an account? <span><a href="<?php echo htmlspecialchars('login-page.php') ?>">Log in</a></span></p>
        </div>
    </div>
</main>

<?php require_once __DIR__ . "partial/footer.php";
