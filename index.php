<?php
require_once "partial/header.php";
?>

<div class="register-wrapper">

    <div class="hero-wrapper">
        <h1 class="heading"><a href=""><span><i class="fas fa-sign-in-alt"></i></span>Login System</a></h1>
        <div>
            <p>Welcome to a PHP login system</p>
            <img src="images/register.webp" alt="register image" class="hero-img">
        </div>
        <div class="links">
            <a href=""><i class="fas fa-blog"></i></a>
            <a href=""><i class="fab fa-github"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>

        </div>
    </div>


    <div class="form-wrapper">
        <h3>Register</h3>
        <p>Please fill the form below to register.</p>
        <div>
            <form action="<?php echo htmlspecialchars('controllers/register.php') ?>" method="post" autocomplete="off">

                <div>
                    <div class="form-group">
                        <label for="fname">Full Name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>



                    <div class="form-group">
                        <label for="pwd">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>


                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" name="pwd">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Repeat Password</label>
                        <input type="password" class="form-control" name="repeatPwd">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary submit-btn">Create Account</button>
            </form>
            <p class="form-footer">Already have an account? <span><a href="<?php echo htmlspecialchars('login-page.php') ?>">Log in</a></span></p>
        </div>
    </div>
</div>

</body>

</html>