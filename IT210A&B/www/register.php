<!DOCTYPE HTML>
<html>

<head>
    <script>
    var id = "register";
    </script>
    <title>Jacob Parry</title>
    <!-- CSS pages  -->
    <link rel="Stylesheet" href="/css/bootstrap.css" type="text/css" />
    <link rel="Stylesheet" href="/css/register.css" type="text/css" />
    <link rel="Stylesheet" href="style.css" type="text/css" />
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/js/bootstrap.js"></script>
</head>

<body>
    <?php
      include ('navbar.php');
      ?>
        <section>
            <!-- I got the Login/Register form from this site  -->
            <!--http://bootsnipp.com/snippets/featured/login-and-register-tabbed-form -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-login">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="#" class="active" id="login-form-link">Login</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="#" id="register-form-link">Register</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="login-form" action="loginaction.php" method="post" role="form" style="display: block;">
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                <label for="remember"> Remember Me</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form id="register-form" action="registeraction.php" method="post" role="form" style="display: none;">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" id="reg-password" tabindex="2" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="confirm-password" id="reg-confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
        </script>
        <script type="text/javascript">
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
        });
        </script>
        <!--http://www.sitepoint.com/using-the-html5-constraint-api-for-form-validation/ -->
        <script type="text/javascript">
        window.onload = function() {
            document.getElementById("reg-password").onchange = validatePassword;
            document.getElementById("reg-confirm-password").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("reg-password").value;
            var pass1 = document.getElementById("reg-confirm-password").value;
            if (pass1 != pass2)
                document.getElementById("reg-confirm-password").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("reg-confirm-password").setCustomValidity('');
            //empty string means no validation error
        }
        </script>
</body>

</html>
