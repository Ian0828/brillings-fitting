<?php
if ($_POST['fullname'] && $_POST['email'] && $_POST['comment']) {
  header('Location: thankyou.html');
  exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Invalid request.";
}
?>
