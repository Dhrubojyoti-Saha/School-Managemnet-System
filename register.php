<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | School Management System</title>
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

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Registration</a>
            <small>Create a new account</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="registration_success.php" onsubmit="return valid()">
                    <div class="msg">Register a new account</div>
                    <span style="color:red"><?=(isset($_GET['msg']) && $_GET['msg'] != '')?$_GET['msg']:''?></span>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                        </div>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" id="mobile_no">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email_id" placeholder="Email Address" id="email_id">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                        </div>
                    </div>

                    <input class="btn btn-block btn-lg bg-pink waves-effect" type="submit" name="submit" id="submit" value="Register Now" />

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="index.php">You already have an account?</a>
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
    <script src="js/login/ sign-up.js"></script>

    <script>

       function valid(){
          if($("#name").val() == ''){
              alert("Full Name must be require");
              $("#name").focus();
              $("#name").css("color", 'red');
              return false;
          }else if($("#email_id").val() == ''){
              alert("Email Id must be require");
              $("#email_id").focus();
              $("#email_id").css("color", 'red');
              return false;
          }else if($("#password").val() == ''){
              alert("Password must be requie.");
              $("#password").focus();
              $("#password").css("color", 'red');
              return false;
          }else if($("#confirm_password").val() == ''){
              alert("Confirm password must be require.");
              $("#confirm_password").focus();
              $("#confirm_password").css("color", 'red');
              return false;
          }else if($("#password").val() != $("#confirm_password").val()){
              alert("Confirm password does not match");
              $("#confirm_password").focus();
              $("#confirm_password").css("color", 'red');
              return false;
          }
       }

    </script>

</body>

</html>
