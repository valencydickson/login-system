<div class="register-wrapper">

    <div class="hero-wrapper">
        <h1 class="heading"><span><i class="fas fa-sign-in-alt"></i></span>Login System</h1>
        <div>
            <p>Welcome to a PHP login system</p>
            <img src="images/hero.png" alt="register image" class="hero-img">
        </div>
    </div>


    <div class="form-wrapper">
        <h3>Register</h3>
        <p>Please fill the form below to register.</p>
        <div>
            <form action="/action_page.php">

                <div>
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>

                    <div class="form-group">
                        <label for="fname">Last Name</label>
                        <input type="text" class="form-control" name="lname">
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
            <p class="form-footer">Already have an account? <span><a href="login.php">Log in</a></span></p>
        </div>
    </div>

</div>