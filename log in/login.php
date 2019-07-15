<!DOCTYPE html>
<html>
<?php  include 'header.php' ?>

<body>
    
    <!-- start nav bar    -->
    <nav class="navbar">
        <div class="nav_img">
            <!-- logo-->
            <img src="imgs/logo.png" width="65" height="60">
        </div>
        <!-- navbar links ul -->
        <ul class="navbar_links">
            <li><a href="#" class="home"> Home </a></li>
            <li><a href="#"> About </a></li>
            <li><a href="#"> Contact </a></li>
            <li><a href="#">portfolio</a></li>
        </ul>
            <div class="dropdown">
                    <button class="dropBtn fa fa-bars fa-2x ">
                    </button>
                    <div class="dropdownContent">
                        <a href="login.php"><i></i>Sign in / up</a>
                        <a href="#">home</a>
                        <a href="#">about</a>
                </div>
            </div>
    </nav>
    
<!-- start sign in/sign up par -->
    <section class="wrapper">
        <div class="container" id="container">

            <div class="form-container sign-up-container">
                <form class="form" action="#">
                    <h1 class="h1">Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social a"><i class="fas fa-apple-alt"></i></a>
                        <a href="#" class="social a"><i class="fas fa-apple-alt"></i></a>
                        <a href="#" class="social a"><i class="fas fa-apple-alt"></i></a>
                    </div>
                    <span class="span">or use your email for registration</span>
                    <input class="input" type="text" placeholder="Name" />
                    <input class="input" type="email" placeholder="Email" />
                    <input class="input" type="password" placeholder="Password" />
                    <button class=" button">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form class="form" action="#">
                    <h1 class="h1">Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social a"><i class="fas fa-apple-alt"></i></a>
                        <a href="#" class="social a"><i class="fas fa-apple-alt"></i></a>
                        <a href="#" class="social a"><i class="fas fa-apple-alt"></i></a>
                    </div>
                    <span class="span">or use your account</span>
                    <input class="input" type="email" placeholder="Email" />
                    <input class="input" type="password" placeholder="Password" />
                    <a class="a" href="#">Forgot your password?</a>
                    <button class=" button">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="h1">Welcome Back!</h1>
                        <p class="p">To keep connected with us please login with your personal info</p>
                        <button class="ghost  button" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 class="h1">Hello, Friend!</h1>
                        <p class="p">Enter your personal details and start journey with us</p>
                        <button class="ghost button" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php include 'footer.php' ?>
</body>

</html>
