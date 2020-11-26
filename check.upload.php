<?php require_once 'section/Header.php';

$msg = "";
if (isset($_POST['submitBtnLogin'])) {
    $textupload = htmlspecialchars(trim($_POST['textupload']));

    if ($textupload != "") {
        try {
            $query = "INSERT INTO `posts` (textupload) VALUES ('`textupload`=:textupload')";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':textupload', $textupload, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    }
    echo "<a href=\"after.login.php\">continue</a>";

        if ($textupload != "") {
            try {
                $query = "SELECT * FROM `posts` textupload WHERE 'textupload'=:textupload";

                $stmt = $conn->prepare($query);
                $stmt->bindParam(':textupload', $textupload, PDO::PARAM_STR);
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
            }foreach ($_POST as $x) {
                echo "<div class=\"\">$x</div>";
            }
        }
    }

require_once 'section/footer.php';