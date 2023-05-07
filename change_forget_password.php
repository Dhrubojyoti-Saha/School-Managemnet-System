<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Forget Pass | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="css/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">

        <div class="card">
			 <div class="logo">
				<a href="javascript:void(0);"><b>K.P.C.L.V</b></a>
				<small>Admin BootStrap Based - Material Design</small>

			</div>
            <div class="body">
                <form id="sign_in" method="POST" action="change_password_success.php" onsubmit="return valid()">
                    <div class="msg">Recover Your Password</div>
                    <span style="color:red"><?=(isset($_GET['msg']) && $_GET['msg'] != '')?$_GET['msg']:''?></span>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="New password"/>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm password"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="submit" id="submit" value="forgotten password">SUBMIT</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="register.php">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="js/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="js/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/login/sign-in.js"></script>

    <script type="text/javascript">
        function valid(){
            if($("#password").val() == ''){
                alert("password must be require.");
                $("#password").focus();
                $("#password").css("color",'red');
                return false;
            }
            else if($("#confirm_password").val() == ''){
                alert("Confirm password must be require.");
                $("#confirm_password").focus();
                $("#confirm_password").css("color",'red');
                return false;
            }
            else if($("#password").val() != $("#confirm_password").val()){
                alert("Confirm password does not match with password");
                $("#confirm_password").focus();
                $("#confirm_password").css("color", 'red');
                return false;
            }
        }

    </script>
</body>

</html>
