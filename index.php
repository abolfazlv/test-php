<?php
require_once 'section/Header.php';

// sqlinjection -> pdo //
// xss bug             //
// posts
// git -> https://github.com

?>

<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <h1 class="display-5">Welcome</h1>
        </li>

        <li class="nav-item">
            <?php
            if(isset($_SESSION['user_id']))
                echo '<a class="nav-link" href="logout.php">logout</a>';
            else
                echo '<a class="nav-link" href="signup.php">signup</a>';
            ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">
                <?php echo $text = isset($_SESSION['user_id'])?'Update':'Login'; ?>
            </a>
        </li>

    </ul>
</nav>

<!-- Black with white text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"></nav>

<!-- Blue with white text -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark"></nav>
<div>
    <img src="./js/22.jpg" class="rounded" alt="Cinque Terre" width="1345" height="800">
</div>

<?php require_once 'section/Footer.php'?>
