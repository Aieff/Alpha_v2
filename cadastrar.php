<?php
session_start();
include 'include/conexao.php';
include('config.php');
include_once __DIR__ . ('/language/translate.php');

$msg = "";
$css_class = "";

if (isset($_POST['save-user'])) {

    $username = $_POST['username'];
    $email =  $_POST['email'];
    $password = md5($_POST['password']);
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

    $result = mysqli_query($conexao, "SELECT * FROM usuarios where email = '$email'");
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $_SESSION['emailF'] = true;
        header("location: ./formulario.php?username=$username&email=$email");
        exit();
    } else {

        $target = 'image/' . $profileImageName;

        if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
            $sql = "INSERT INTO usuarios (profile_image, username, email, senha) VALUE ('$profileImageName', '$username', '$email', '$password')";
            if (mysqli_query($conexao, $sql)) {
                $msg = "uploaded to Database";
                $css_class = "alert-success";
            } else {
                $msg = "Failed to upload to upload Database";
                $css_class = "alert-danger";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $keyword["titulo"]; ?></title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/cadastrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/themes.css">
    <script src="js/jquery.js"></script>
</head>

<body class="active">
    
    <div class="wrapper">
        <div class="sidebar">
            <!--Menu item-->
            <ul>
                <li><a href="?language=pt-br">
                    <span class="item"><?php echo $keyword["lan_pt"]; ?></span>
                </a></li>
                <li> <a href="?language=en-us">
                    <span class="item"><?php echo $keyword["lan_en"]; ?></span>
                </a></li>
                <li><a href="?language=es-mx">
                    <span class="item"><?php echo $keyword["lan_es"]; ?></span>
                </a></li>
                <li><a href="?language=fr-fr">
                    <span class="item"><?php echo $keyword["lan_fr"]; ?></span>
                </a></li>
                <li><a href="?language=al-de">
                    <span class="item"><?php echo $keyword["lan_de"]; ?></span>
                </a></li>
                <li><a href="?language=jp-jp">
                    <span class="item"><?php echo $keyword["lan_jp"]; ?></span>
                </a></li>
                <li><a href="?language=pl-pl">
                    <span class="item"><?php echo $keyword["lan_pl"]; ?></span>
                </a></li>
                 <li><a href="?language=ch-cn">
                    <span class="item"><?php echo $keyword["lan_cn"]; ?></span>
                </a></li>
            </ul>
        </div>

        <!---Top menu bar-->
        <div class="section-bar">
            <div class="top-navbar">
                <div class="side-action">
                    <a href="#"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="login">
    <h2><?php echo $keyword["title_success_cadastro"]; ?></h2><br>
    <p><?php echo $keyword["text_success_cadastro"]; ?></p>
    <a href="login.php" class="btn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <?php echo $keyword["cadastrar_voltar"]; ?>
        </a>
    </div>
    <img src="img/controle.gif" class="controler">

 

</body>

<script src="js/sidebar.js"></script>

</html>