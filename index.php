<?php
include "./assets/conf/variables.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="i">
    <meta name="author" content="RC-CONSULTORIA E ASSESSORIA EM TELECOM">
    <title><?php echo $title; ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo $img; ?>logo_perfil.svg" type="image/x-icon">

    <!-- <====== FONTS GOOGLE ======>  -->
    <link rel="import" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display-swap">

    <!-- CSS MAIN-->
    <link rel="stylesheet" href="<?php echo $css; ?>main.min.css">

</head>

<body>

    <div class="navigation">
        <div class="menuToggle"></div>
            <ul>
                <li class="list active" style="--clr-color: #fd7e14">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list" style="--clr-color: #ffa117">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="text">Sobre</span>
                    </a>
                </li>
                <li class="list" style="--clr-color: #0fc70f">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="text">Mensagens</span>
                    </a>
                </li>
                <li class="list" style="--clr-color: #2196f3">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="camera-outline"></ion-icon>
                        </span>
                        <span class="text">Fotos</span>
                    </a>
                </li>
                <li class="list" style="--clr-color: #b145e9">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="text">Configuração</span>
                    </a>
                </li>
                <li class="list" style="--clr-color: #f44336">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="arrow-undo-outline"></ion-icon>
                        </span>
                        <span class="text">Sair</span>
                    </a>
                </li>
            </ul>
    </div>


    <!-- JS MAIN -->
    <script>
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.onclick = function() {
            navigation.classList.toggle('open')
        }

        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item) => item.classList.remove('active'));
            this.classList.add('active');
        }

        list.forEach((item) => item.addEventListener('click',activeLink))
    </script>

    <!-- JS CDN IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>