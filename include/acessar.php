<?php
session_start();
include 'conexao.php';
include('../config.php');

if (empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: ../login.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "SELECT id, email, senha FROM usuarios WHERE email = '{$email}' AND senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../home.php');
    exit();
} else {
    header('Location: ../login.php');
    exit();
}
