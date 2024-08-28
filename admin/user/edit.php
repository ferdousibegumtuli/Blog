<?php
include('../layout/header.php');
if($_SESSION['user'])
{
    include('../layout/sidebar.php');
    require($rootPath . '/controller/userController.php');
?>
<?php
if(isset($_GET['id'])){
    $userId = $_GET['id'];
    $userController = new UserController();
    $userGetById = $userController->getUserName($userId);
}
if(isset($_POST['submit'])){
    $userId = $_GET['id'];
    $userName = $_POST['userName'];
    $userFullName = $_POST['fullName'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $userIsUpdate = $userController->update($userId,$userName,$userFullName,$password,$status); 
    if($userIsUpdate){
        $_SESSION['editData'] = [
            'msg' => 'User Edit Successfully',
            'type' => 'success'
        ];
    } 
        header ("Location: index.php");
}
?>
<div id="main">
    <div class="col-md-6">
        <div class="card-body">
            <form action = "edit.php?id=<?php echo $userGetById[0]['id']?>" method ="post" class="form form-vertical">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">User Name</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="userName" value="<?php echo $userGetById[0]['user_name']?>"/>
                            </div>
                            <div class="form-group">
                                <label for="first-name-vertical">User Full Name</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="fullName" placeholder="User Full Name" value="<?php echo $userGetById[0]['full_name']?>">
                            </div>
                            <div class="form-group">
                                <label for="first-name-vertical">Update Password</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="password"/>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">Status</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <select  name = "status" class="form-select" id="basicSelect">
                                            <option value = ''>--select--</option>
                                            <option value = '0'
                                            <?php echo $userGetById[0]['status'] == '0' ? 'selected': '' ?>
                                            >Deactivate</option>
                                            <option value = '1'
                                            <?php echo $userGetById[0]['status'] == '1' ? 'selected': '' ?>
                                            >Active</option>
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
    include('../layout/footer.php');
}
else
{
       header("location:../login/index.php");
}
?>
