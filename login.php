<?php
include('config.php');
include_once __DIR__ . ('/language/translate.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $keyword["titulo"]; ?></title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/themes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

    <form class="login" action="include/acessar.php" method="post" enctype="multipart/form-data">
       <img src="img/logo-login.png">

        <div class="box-user">
            <input type="text" name="email" id="email" placeholder="<?php echo $keyword["login_placheholder_email"]; ?>">
            <label></label>
        </div>
        <div class="box-user">
            <input type="password" name="password" id="password" placeholder="<?php echo $keyword["login_placheholder_senha"]; ?>">
        </div>
        <div>
            <a href="#" class="forget"><?php echo $keyword["login_esqueceu_senha"]; ?></a>
        </div>

        <button type="submit" class="btn btn-button">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <?php echo $keyword["login_logar"]; ?>
        </button>


        <a href="formulario.php" class="btn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <?php echo $keyword["login_cadastrar"]; ?>
        </a>
    </div>
    </form>
    
</body>
<script src="js/sidebar.js"></script>

</html>