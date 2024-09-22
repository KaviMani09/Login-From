<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login From</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="css\logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
  <body>
<div class="container" id="container">

       <div class="form-container sign-up" id="signup" >
            <form method="post" action="register.php">
                <h1>Register</h1>
                <span>or use your for registeration</span>
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <button type="submit"  value="Sign Up" name="signUp">sign in</button>
                </form>
                  </div>
                

<!--================================================LOGIN=============================================================---> 

     <div class="form-container sign-in" id="signIn">
            <form method="post" action="register.php">
                <h1>Login</h1>
                <span>or use your Email password</span>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit" value="Sign In" name="signIn">Login</button>
                </form>
            </div>
           


        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Login</button>
                    <div class="social-icons">
                    <a href="https://www.instagram.com/roughed__boi__mani/" class="icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://github.com/KaviMani09/MANIKANDAN" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/mani-kandan-k-2709mk/" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                </div>
                <div class="toggle-panel toggle-right">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <h1>Welcome, Friend!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">Register</button>
                    <div class="social-icons">
                    <a href="https://www.instagram.com/roughed__boi__mani/" class="icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://github.com/KaviMani09/MANIKANDAN" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/mani-kandan-k-2709mk/" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





<script src="js/style.js"></script>