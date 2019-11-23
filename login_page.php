<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/login_page.css">
   
</head>
<?php
    include("nav.php");
?>
<body>
<div class="container login-container">
            <div class="row justify-content-center">
                <div class="col-md-5 login-form-1">
                    <h3>Login to your account</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group justify-content-center">
                            <input type="submit"  name ="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="create_account.php" class="create account">Dont have an account?</a>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
        <footer id="footer" class="footer">
        <p class="copyright" href="#">&copy Forum 2019</p>
</footer>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>