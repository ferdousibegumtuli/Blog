<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/assets/css/app.css">
    <link rel="stylesheet" href="../public/assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="../public/assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                        <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form action="index.php" method="post">
                        <?php
                        session_start();
                        if(isset($_SESSION['message']))
                        {
                        ?> 
                        <div class="alert alert-danger"><i class="bi bi-file-excel"></i>
                            <?php
                            echo $_SESSION ['message']['msg'];
                            unset($_SESSION['message']);
                            ?>
                        </div>
                        <?php 
                        }
                        ?>  
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <input type = "submit" name="login" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" value = "Log in"/>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

<?php

if (isset($_POST['login'])){
    require_once ("../controller/loginController.php");
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $loginController = new LoginController();
    $userAndPasswordIsCheck = $loginController->login($userName, $password);
    if($userAndPasswordIsCheck){
      $_SESSION['user']=[
            $userAndPasswordIsCheck
        ];
        header ("Location: ../admin");
    }else{
        $_SESSION['message']=[
            'msg' => 'Credential is not correct.',
            //'type' => 'faild'
        ];
        header ("Location: index.php");
    }
   
}
?>
</body>

</html>