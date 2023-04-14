<?php
session_start();
include 'conexao.php';
include('../config.php');

$email = $_SESSION['email'];

$query = "SELECT id, email, username, profile_image FROM usuarios WHERE email = '{$email}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_fetch_row($result);

//echo $row[0] id
//echo $row[1] email
//echo $row[2] username
//echo $row[3] profile_image