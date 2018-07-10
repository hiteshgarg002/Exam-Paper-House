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
    <script src='/citest/asset/jquery-2.2.1.min.js'></script>
<script src='/citest/asset/statecity.js'></script>
</head>
<body>
<center><img src="/citest/user/images/logo.png"></center>
    <!-- Login Form-->
    <div class="login-form text-center">
        <div class="toggle" style="width:80px;"><i class="fa fa-user-plus"> <b>Registration</b></i>
        </div>
        <div class="form formLogin">
            <h2>Client Login to your account</h2>
            <form action="checkPassword">
                <input type="text" name='clientid' placeholder="Client ID" />
                <input type="password" name='password' placeholder="Password" />
<input type='submit' value='Log in' class="btn btn-info">
<?php
			echo "$msg";

		?>
            </form>
        </div>
        <div class="form formRegister" style="padding: 10px;">
            <h2>Create an account</h2>
            <form action="insert" method="POST" enctype='multipart/form-data'>
                <input type="text" name='cfn' placeholder="First Name" />
                <input type="text" name='cln'  placeholder="Last Name" />
                <input type="text" name='cemail' placeholder="Email ID" />
                <input type="text" name='cpn' placeholder="Mobile No" />
                <input type="text" name='cdob' placeholder="DOB" />
                <table class="table">
                <tr>
                <td>Male<input type='radio' name='gender' value='Male'></td>
                <td>Female<input type='radio' name='gender' value='Female'></td>
                </tr>
                </table>

                <input type="text" name='cadd' placeholder="Address" />
                <select  id='state' name='us'></select>
                <select  id='city' name='uc'></select>
                <input type='password' name='password' placeholder="Password" />
                <input type='submit' class="btn btn-info">

			<?php
				echo "$msg";

		?>
            </form>
        </div>

    </div>
    <!-- start js include path -->
    <script src="/citest/ui/assets/plugins/jquery/jquery.min.js" ></script>
    <script src="/citest/ui/assets/js/pages/extra_pages/pages.js" ></script>
    <!-- end js include path -->
</body>
</html>




