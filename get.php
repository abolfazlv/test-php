<?php
require_once 'section/Header.php';

$msg = "";
if (isset($_POST['submitBtnLogin'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    if ($username != "" && $password != "") {
        try {
            $query = "SELECT * FROM `users` WHERE `username`=:username AND `password`=:password";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                $_SESSION['user_id'] = $row['id'];
                echo "<a href=\"after.login.php\">continue</a>";
            } else {
                $msg = "Invalid username and password!";
            }
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    } else {
        $msg = "Both fields are required!";
    }
}

echo $msg;



require_once 'section/footer.php';
