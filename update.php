<?php
require_once 'section/Header.php';


//if(isset($_SESSION['user_id'])) {
$id = $_SESSION['user_id'];
$new_user=$_POST["username"];
$new_pass=$_POST["password"];

//print_r($_POST);

$mysqli->query("UPDATE `users` SET `password`='$new_pass' ,`username`='$new_user' WHERE id='$id' ");

$result = $mysqli->query("SELECT * FROM `users` WHERE `id`='$id'");
$row = $result->fetch_assoc();

foreach ($row as $key => $value){
    echo "<div>$key: $value</div>\n";
}
require_once 'section/footer.php';
exit();


    
// }
//$mysqli->query("UPDATE `users` SET `password`=$new_pass ,`username`=$new_user WHERE id='2' ");

//$mysqli->query("SELECT * FROM `users` WHERE `id`='$id'");
//
//
//if(isset($_SESSION['user_id'])){
//    $id=$_SESSION['user_id'];
//    $result = $mysqli->query("SELECT * FROM `users` WHERE `id`='$id'");
//    $row = $result->fetch_assoc();
//    foreach ($row as $key => $value){
//        echo "<div>$key: $value</div>\n";
//    }
//    require_once 'section/footer.php';
//    exit();
//
//$result->bindValue(1,$new_user);
//$result->bindValue(2,$new_pass);
//if ($result->execute()){
//    echo "user update";
//}else{
//    echo "error in update";
//}
?>
<?php require_once 'section/Footer.php';