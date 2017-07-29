<?php
require_once("others_includes/db_connection.php");
require_once("others_includes/functions.php");
require_once("others_includes/validation_functions.php");
require_once("others_includes/session.php");
//define ('SITE_ROOT', realpath(dirname(__FILE__)));
if(isset($_POST['submit']))
{
    $mail = $_POST["email_connect"];
    $pwd = $_POST["pwd_connect"];
    $query = "SELECT MAIL_U, MDP_U FROM utilisateur ";
    $query .= " WHERE MAIL_U = '{$mail}' AND MDP_U = '{$pwd}'";
    $query .= " LIMIT 1";
    $result = mysqli_query($connect, $query);
    echo '</br>';
    $row = mysqli_fetch_array($result);
    if ($row[0]==null) {
      echo "utilisateur non reconnu";
      redirect_to("../../../public/home/");
    }
    else {
      $_SESSION["user_connected"] = "true";
      //echo "------->". $_SESSION["user_connected"] . ".<br>";  
      redirect_to("../../../public/home/");
    }
}
?>
