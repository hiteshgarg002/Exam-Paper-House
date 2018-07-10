<!DOCTYPE html>
<html>
<head>
    <title>Indian University</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="/citest/ui/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- bootstrap -->
	<link href="/citest/ui/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="/citest/ui/assets/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="/citest/ui/assets/img/favicon.ico" />
</head>
<body>

    <!-- Login Form-->
    <div class="login-form text-center">
        <div class="toggle">
        </div>
        <div class="form formLogin">
            <h2><img src="/citest/ui/assets/img/LOGO.png" class="img-responsive"></h2>
            <form action='checkPassword'>
                <input type="text" name='aid' placeholder="Username" />
                <input type="password" name='pwd' placeholder="Password" />

              <input type='submit' name='Log in' class="btn btn-info">
                <div class="forgetPassword"><a href="javascript:void(0)">Forgot your password?</a>
                </div>
            </form>
        </div>


    </div>
    <!-- start js include path -->
    <script src="/citest/ui/assets/plugins/jquery/jquery.min.js" ></script>
    <script src="/citest/ui/assets/js/pages/extra_pages/pages.js" ></script>
    <!-- end js include path -->
</body>
</html>











<?php echo $msg; ?>



