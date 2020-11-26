<?php
require_once 'section/Header.php';

$msg = "";
if (isset($_POST['submitBtnLogin'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    if ($username != "" && $password != "" && $first_name != "" && $last_name != "" && $email != "") {
        try {
            $query = "INSERT INTO `users` (first_name,last_name,username,email,password) VALUES (':first_name','$last_name','$username','$email','$password')";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
            $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            }
        catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
        }
}foreach ($_POST as $x) {
    echo "<div class=\"signup\">$x</div>";
}

echo "<a href=\"login.php\">login</a>";

require_once 'section/footer.php';