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
    <link rel="stylesheet" href="css/forms.css">
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

    <form class="login" action="cadastrar.php" method="post" id="form" enctype="multipart/form-data">

       <div class="form-group text-center">
       <div class="spinner">
            <img src="image/placeholder.jpg" onclick="triggerClick()" id="profileDisplay" />
       </div>
                    <input type="file" name="profileImage" id="profileImage" onchange="displayImage(this)" class="form-control" style="display: none;">
            <span class="alert-forms"></span>
        </div>
        
    <div class="box-user">
        <div class="form-control">
            <!-- <div class="box-user"> -->
            <input value="<?php echo $_GET['username'] ?>" class="input-control" type="username" name="username" id="username" placeholder="<?php echo $keyword["login_placheholder_username"]; ?>">
            <span class="alert-forms"></span>
            <!-- </div> -->
            
    </div>


    <div class="form-control">
        <!-- <div class="box-user"> -->
        <input value="<?php echo $_GET['email'] ?>" class="input-control" type="email" name="email" id="email" placeholder="<?php echo $keyword["login_placheholder_email"]; ?>">
        <span class="alert-forms"></span>
        <!-- </div> -->
        
    </div>
        
        
    <span class="alert-forms"><?php if (isset($_SESSION['emailF'])) {
                    echo "Este email já foi cadastrado";
                    unset($_SESSION['emailF']);
            } ?>
            </span>


    <div class="form-control">
        <!-- <div class="box-user"> -->
        <i class="fa-regular fa-eye" id="btn-senha" onclick="mostrarSenha()"></i>
        <input class="input-control" type="password" name="password" id="password" placeholder="<?php echo $keyword["login_placheholder_senha"]; ?>">
        <span class="alert-forms"></span>
        </div>
        
    </div>
    

     <div class="container-btn">
  
    <button type="submit" name="save-user" class="btn btn-button">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <?php echo $keyword["cadastrar_salvar"]; ?>
    </button>

        <a href="login.php" class="btn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <?php echo $keyword["cadastrar_voltar"]; ?>
        </a>
    </div>
    </form>

</body>
    <script src="js/sidebar.js"></script>
    <script src="js/validacao.js"></script>
    <script src="js/avatar.js"></script>
</html>