<?php ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Environmental Monitoring System | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <?php
        session_start();
        if(isset($_SESSION['registration_status'])){
            if($_SESSION['registration_status'] == 1){
                echo '<div class="alert alert-success alert-dismissable">
                         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                Your account is pending to be activated</a>.
                      </div>';
            }
            unset($_SESSION['registration_status']);
        }
    ?>
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">EMS</h1>

            </div>
            <h3>Register to EMS</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" action="php/Register.php" method="post">
                <div class="form-group">
                    <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name" required="">
                </div>
                <div class="form-group">
                    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last Name" required="">
                </div>
                <div class="form-group">
                    <input id="initials" name="initials" type="text" class="form-control" placeholder="Initials" required="">
                </div>
                <div class="form-group">
                    <input id="nic" name="nic" type="text" class="form-control" placeholder="NIC" pattern="^\d{9}(X|V)$" required="">
                </div>
                <div class="form-group">
                    <input id="user_name" name="user_name" type="text" class="form-control" placeholder="User Name" required="">
                </div>
                <div class="form-group">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.php">Login</a>
            </form>
            <p class="m-t"> <small>Ozious Techbology&copy; 2015</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
