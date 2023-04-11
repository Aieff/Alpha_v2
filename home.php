<?php
$api = "http://localhost:3000/api/games/top";
$ch = curl_init($api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$games = json_decode((curl_exec($ch)));

include('config.php');
include('include/valida_sessao.php');
include('include/profile.php');
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="active">

    <div class="wrapper">
        <div class="sidebar">
            <!--profile image-->
            <div class="profile">
                <div class="spinner">
                    <img src="image/<?php echo $row[3] ?>">
                </div>
                <h3><?php echo $row[2] ?></h3>
            </div>
            <!--Menu item-->
            <ul>
                <li><a href="#" class="active">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Home</span>
                </a></li>
                <li><a href="#" id="open-modal">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <span class="item" >Perfil</span>
                </a></li>
                <li><a href="#">
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="item">Performance</span>
                </a></li>
                <li><a href="#">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Development</span>
                </a></li>
                <li><a href="#">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Reports</span>
                </a></li>
                <li><a href="#">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Admin</span>
                </a></li>
                <li><a href="include/logout.php">
                    <span class="icon"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span>
                    <span class="item">Sair</span>
                </a></li>
            </ul>
        </div>

        <!---Top menu bar-->
        <div class="section-bar">
            <div class="top-navbar">
                <div class="side-action">
                    <a href="#"><i class="fas fa-bars"></i></a>
                </div>
            </div>


         
    <div id="fade" class="hide"></div>
    <div id="modal" class="hide">
      <div class="modal-header">
        <h2>PERFIL</h2>
        <button class="close" id="close-modal">✖</button>
      </div>
      <div class="modal-body">
        
      <img src="image/<?php echo $row[3] ?>" onclick="triggerClick()" id="profileDisplay"/>
            <input type="file" name="profileImage" id="profileImage" onchange="displayImage(this)" class="form-control" style="display: none;">
      <ul>
            <li>Nome:<input type="text" id="username" value="<?php echo $row[2] ?>"></li>
            <li>Email:<input type="text" id="email" value="<?php echo $row[1] ?>"></li>
        </ul>
         <button type="submit" name="update-user" class="btnSave">SALVAR</button>
        </div>
      </div>


    <!--- HOME BANNNER --->

    <div class="banner">
        <div class="bg">
            <div class="content">
                <h2>A New Home for <br> Game Lovers</h2>
                <p>Lorem impsum dolor, sit amet </p>
                <a href="#" class="btn">Join Now</a>
            </div>
            <img src="img/banner-home.png" >
        </div>
    </div>

        <!--- About --->

    <div class="about">
        <div class="contentBx">
            <h2>About Us</h2>
            <p>Lorem impsum dsadsada dsa dasdsad sdsa d sads ads as dsa dsad ads asda sad a</p>
            <a href="#">Read More</a>
        </div>
        <img src="img/logo-login.png">
    </div>

    <!---- Games --->

<section id="games-list">

    <div class="games">
        <h2>Popular Games</h2>
        <ul>
            <li class="list active" data-filter="all">All</li>
            <li class="list" data-filter="pc">Pc Games</li>
            <li class="list" data-filter="mobile">Mobile Games</li>
            <li class="list" data-filter="console">Console Games</li>
        </ul>

    <ul>
        <li>
        <div class="cardBx">
            <div class="card" data-item="pc">
                <img src="">
                <div class="content">
                    <h4><?=$games->name?></h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>R$250</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="cardBx">
            <div class="card" data-item="pc">
                <img src="img/banner-games/ac-brotherhood.png">
                <div class="content">
                    <h4>Assassins Creed Brotherhood</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>R$250</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="cardBx">
            <div class="card" data-item="pc">
                <img src="img/banner-games/ac-odyssey.png">
                <div class="content">
                    <h4>Assassins Creed Odyssey</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>R$250</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>
        </li>

            <li>
            <div class="cardBx">
            <div class="card" data-item="console">
                <img src="img/banner-games/tlou.png">
                <div class="content">
                    <h4>The Last of Us II</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>R$250</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="cardBx">
            <div class="card" data-item="pc">
                <img src="img/banner-games/elden-ring.png">
                <div class="content">
                    <h4>Elden Ring</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>R$250</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>
        </li>


        <li>
            <div class="cardBx">
            <div class="card" data-item="console">
                <img src="img/banner-games/gw-ragnarok.png">
                <div class="content">
                    <h4>God of War Ragnarok</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>R$250</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div class="cardBx">
            <div class="card" data-item="pc">
                <img src="img/banner-games/infamous-ss.png">
                <div class="content">
                    <h4>Infamous Second Son</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Pricing<br><span>R$250</span></p>
                        <a href="#">Play Now</a>
                    </div>
                </div>
            </div>
        </li>



    </ul>
    </section>

            </div>
        </div>
    </div>
</div>
</body>

<script src="js/home.js"></script>
<script src="js/avatar.js"></script>

</html>