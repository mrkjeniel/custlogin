<!DOCTYPE html>
<html>
    <head><title>Register</title>
        <link rel="stylesheet" href="css/custlogin_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75,100,300..800;1,75,300..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="nav">
                <div class="logo"><img src="images/reg_logo.svg"></div>
                <div class="nav_links">
                    <ul>
                        <li><a href="news.asp">HOME</a></li>
                        <li><a href="contact.asp">PRODUCTS</a></li>
                        <li><a href="about.asp">PROMOS</a></li>
                        <li><a href="about.asp">NEWS & REVIEWS</a></li>
                    </ul>
                </div>
                <div class="signin_up">
                    <a href="about.asp" class="signin">SIGN IN</a>
                    <a href="about.asp" class="signup">SIGN UP</a>
                </div>
            </div>
            <div class="form">
                <form <!--onsubmit="return passverify()"-->>
                    <h1>Sign in to your Account</h1>

                    <div class="inputs">
                        <div class="login-input">
                            <img src="images/email.svg">
                            <input type="email" placeholder="Email" required>
                        </div>

                        <div class="login-input">
                            <img src="images/password.svg">
                            <input type="password" class="password" id="password" placeholder="Password" required>
                            <img src="images/closed_eye.svg" id="pass_img">
                        </div>

                        <div class="remember-forget">
                            <label><input type="checkbox">Remember me?</label>
                            <a href="#">Forgot Password?</a>
                        </div>

                        <button type="submit" class="btn">Log In</button>

                        <div class="register">
                            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            let eyeicon = document.getElementById("pass_img");
            let password = document.getElementById("password");

            eyeicon.onclick = function(){
                if(password.type == "password"){
                    password.type = "text";
                    eyeicon.src = "images/open_eye.svg";
                }else{
                    password.type = "password";
                    eyeicon.src = "images/closed_eye.svg";
                }
            }
        </script>

        <!--<script>
            let eyeicon2 = document.getElementById("pass_img2");
            let password2 = document.getElementById("confirm");

            eyeicon2.onclick = function(){
                if(password2.type == "password"){
                    password2.type = "text";
                    eyeicon2.src = "images/open_eye.svg";
                }else{
                    password2.type = "password";
                    eyeicon2.src = "images/closed_eye.svg";
                }
            }
        </script>
        <script>
            function passverify(){
                var a = document.getElementById("password").value;
                var b = document.getElementById("confirm").value;

                if(a!=b){
                    document.getElementById("messages").innerHTML='<span id="messages"><img src="images/warning.svg">Passwords do not match! Please try again.</span>';
                    return false;
                }
            }
        </script>-->
    </body>
</html>