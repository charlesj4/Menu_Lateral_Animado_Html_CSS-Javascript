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
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $css; ?>main.min.css">
</head>
<body>

    <div class="navigation">
        <div class="menuToggle">
            <ul>
                <li class="list">
                    <a href="#">
                        <span class="icon"></span>
                        <span class="text">Página Principal</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- JS MAIN -->
    <script>
        const menuToggle = document.querySelector('.menuToggle');
        const navigation = document.querySelector('.navigation');
        menuToggle.onclick = function(){
            navigation.classList.toggle('open')
        }
    </script>
</body>
</html>