<div class="container-fluid register-wrapper ">
    <div class="wrapper d-flex ">
        <div class="text-light hero-wrapper p-5 ">
            <h1 class="heading mb-5"><span class="pr-2"><i class="fas fa-sign-in-alt"></i></span>Login System</h1>
            <div>
                <p>Welcome to a PHP login system</p>
                <img src="images/hero.png" alt="register image" class="hero-img mt-2 mb-5">
            </div>
        </div>
        <div class="p-5 form-wrapper">
            <h3 class="my-3">Register</h3>
            <p class="my-5">Please fill the form below to register.</p>
            <div>
                <form action="/action_page.php">
                    <div class="d-flex ">
                        <div class="mr-5">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Phone Number</label>
                                <input type="text" class="form-control" name="phoneNumber">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control" name="pwd">
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label for="fname">Last Name</label>
                                <input type="text" class="form-control" name="lname">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Repeat Password</label>
                                <input type="password" class="form-control" name="repeatPwd">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary submit-btn">Create Account</button>
                </form>
                <p class="display-6 mt-3">Already have an account? <span><a href="login.php">Log in</a></span></p>
            </div>
        </div>
    </div>

</div>