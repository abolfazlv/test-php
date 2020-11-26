<?php
require_once 'section/Header.php';

if(isset($_SESSION['user_id']))
{
header('location: get.php');
exit();
}
?>
<div class="container">
    <h2>Login</h2>
    <form class="login" action="get.php" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary" name="submitBtnLogin">Submit</button>
    </form>
</div>
<?php require_once 'section/footer.php'?>
