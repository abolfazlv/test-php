<?php require_once 'section/Header.php'?>
<div class="container">
  <h2>Signup</h2>
  <form class="signup" action="getsignup.php" method="POST">
    <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="first_name">
      </div>
      <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="last_name">
      </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="email">email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
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