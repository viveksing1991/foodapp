<?php
session_start();
include 'includes/header.php';

?>

<!-- Sign In Section Begin -->
<div class="signin">
    <div class="signin__warp">
        <div class="signin__content">
            <div class="signin__logo">
                <a href="#"><img src="img/siign-in-logo.png" alt=""></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore
                magna aliqua viverra.</p>
            <div class="signin__form">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="false">
                            Sign up
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">
                            Sign in
                        </a>
                    </li>
                    <li class="nav-item">
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="signin__form__text">
                            <p>with your social network :</p>
                            <div class="signin__form__signup__social">
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google"><i class="fa fa-google"></i></a>
                            </div>
                            <div class="divide">or</div>
                            <form action="uservalidations.php" method="post">
                                <input type=" text" placeholder="User Name*" name="username" id="username">
                                <input type="text" placeholder="Password" name="password" id="password">
                                <input type="text" placeholder="Email Address" name="emailid" id="emailid">
                                <input type="number" placeholder="contactno" name="contactno" id="contactno">

                                <label for="sign-agree-check">
                                    I agree to the terms & conditions
                                    <input type="checkbox" id="sign-agree-check">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit" name="btnregister" class="site-btn">Register Now</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="signin__form__text">
                            <p>with your social network :</p>
                            <div class="signin__form__signup__social">
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google"><i class="fa fa-google"></i></a>
                            </div>
                            <div class="divide">or</div>
                            <form action="uservalidations.php" method="post" name="loginform">
                                <input type=" text" placeholder="Email*" name="email" id="email">
                                <input type="text" placeholder="Password" name="password" id="password">
                                <button type="submit" class="site-btn" name="submitLogin" onclick="return onSubmit()">Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign In Section End -->



<script>
    function onSubmit() {
        var email = document.getElementById("email").value.indexOf("@");

        let password = document.getElementById("password").value;

        if (email == -1) {
            alert("Please enter a valid email address.");
            return false;
        } else if (password.length < 8) {
            alert("Password length cannot be less than 8");
            return false;
        }
    }


    function onSubmitRegister() {
        var email = document.getElementById("email").value.indexOf("@");

        let password = document.getElementById("password").value;

        let username = document.getElementById("username").value;

        if (email == -1) {
            alert("Please enter a valid email address.");
            return false;
        } else if (password.length < 8) {
            alert("Password length cannot be less than 8");
            return false;
        }
    }
</script>
<?php

include 'includes/footer.php';

?>