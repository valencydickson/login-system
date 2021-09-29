<?php
require_once "partial/header.php";
?>

<div class="register-wrapper">

    <div class="hero-wrapper">
        <h1 class="heading"><span><i class="fas fa-sign-in-alt"></i></span>Login System</h1>
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
        <h3>Login</h3>
        <p>Please Login to your account.</p>
        <div>
            <form action="<?php echo htmlspecialchars('controllers/login.php') ?>" method="post" autocomplete="off">

                <div>
                    <div class="form-group">
                        <label for="pwd">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username or Email" autocomplete="false" autocomplete="false">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" name="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary submit-btn">Login</button>
            </form>
            <p class="form-footer">Don't have an account yet? <span><a href="index.php">Register now</a></span></p>
        </div>
    </div>
</div>