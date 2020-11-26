<?php require_once 'section/Header.php'?>
<div class="container-fluid container">
    <h2>Edit information</h2>
    <form class="change" action="update.php" method="POST">

        <?php
        $id=$_SESSION['user_id'];
        $result = $mysqli->query("SELECT * FROM `users` WHERE `id`='$id'");
        $row = $result->fetch_assoc();
        foreach ($row as $key => $value){
            if(in_array($key,['id','password']))
                continue;
            $placeHolder=str_replace('_',' ',$key);
            echo "<div class=\"form-group\">
<label for='$key'>$placeHolder:</label>
<input type=\"test\" class=\"form-control\" id=\"$key\" placeholder=\"Enter $placeHolder\" name=\"$key\" value='$value'>
</div>\n";
        }
        ?>

        <div class="form-group">
            <input type="submit" value="save" class="" id=" placeholder="" name="">
        </div>

        <h1>delete account</h1>
        <a class="nav-link" href="delete.account.php">Go</a>

    </form>
</div>

<?php require_once 'section/footer.php'?>