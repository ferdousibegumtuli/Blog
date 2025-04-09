<?php
include('../layout/header.php');
if($_SESSION['user'])
{
    include('../layout/sidebar.php');
    if(isset($_POST["submit"])){
    require_once ("../../controller/userController.php");
    $userName = $_POST['userName'];
    $userFullName = $_POST['fullName'];
    $userPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $userStatus = $_POST['status'];
    $userController = new UserController();
    $userIsSaved = $userController->insert($userName,$userFullName,$userPassword,$userStatus);
        if($userIsSaved){
            $_SESSION['addData'] = [
                'msg' => 'User Add Successfully',
                'type' => 'success'
            ];
            
        } 
        header ("Location: index.php");    
    }
?>
<div id="main">
    <h4 class="card-title">USER</h4>
    <div class="col-md-6">
        <div class="card-body">
            <form action = "add.php" method ="post" class="form form-vertical">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">User Name</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="userName" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <label for="first-name-vertical">User Full Name</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="fullName" placeholder="User Full Name">
                            </div>
                            <div class="form-group">
                                <label for="first-name-vertical">Password</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">Status</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <select  name = "status" class="form-select" id="basicSelect">
                                            <option value = ''>--select--</option>
                                            <option value = '0'>Deactivate</option>
                                            <option value = '1'>Active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <input type="submit" class="btn btn-primary me-1 mb-1" name="submit" value="Submit"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    include_once('../layout/footer.php');
}else
{
    header("location:../login/index.php");
}
?>