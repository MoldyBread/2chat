<?php 
  require "db.php";

  if (isset($_POST['common_submit'])) {
    if($_POST['common_text']!=''){
    $message = R::dispense('chat');
    $message->userid = $_SESSION['logged_user'];
    $message->text = $_POST['common_text'];
    $message->time = date("h:i:sa");
    R::store($message);
  }
  header('Location: /');
}
?>