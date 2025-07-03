<?php
if ($_POST['fullname'] && $_POST['email'] && $_POST['comment']) {
  header('Location: thankyou.html');
  exit();
}
?>