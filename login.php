<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if ($password === 'mypassword') {
    header('Location: login.html');
    exit();
  } else {
    echo 'Incorrect password';
  }
}
?>