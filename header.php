<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEEK ROOM</title>

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;700&family=Rubik:wght@300;500&display=swap" rel="stylesheet">

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="/geekroom/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/geekroom/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/geekroom/favicon-16x16.png">
    <link rel="manifest" href="/geekroom/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="cabecera">
        <div class="cabecera__contenido container-lg">
            <div class="cabecera__logo">
                <a href="index.php" class="cabecera__link-inicio">
                    <img src="img/geekroom-logo.svg" alt="logo Geek Room" class="cabecera__img">
                    <img src="img/logo-simplificado.svg" alt="logo Geek Room" class="cabecera__reducido">
                </a>
            </div>

            <input type="checkbox" id="check">

            <label class="cabecera__burger" for="check">
                <div></div>
                <div></div>
                <div></div>
            </label>

            <nav class="cabecera__nav">
                <ul class="cabecera__menu">
                    <li class="cabecera__li">
                        <a href="lista-exposiciones.php" class="cabecera__link <?php if($active == 'lista-exposiciones') { echo 'active-nav';} ?>">Exposiciones</a>
                    </li>
                    <li class="cabecera__li">
                        <a href="exposicion-actual.php" class="cabecera__link <?php if($active == 'exposicion-actual') { echo 'active-nav';} ?>">Actual</a>
                    </li>
                    <li class="cabecera__li">
                        <a href="hotel.php" class="cabecera__link <?php if($active == 'hotel') { echo 'active-nav';} ?>">Hotel</a>
                    </li>
                    <li class="cabecera__li">
                        <a href="reserva.php" class="cabecera__link <?php if($active == 'reserva') { echo 'active-nav';} ?>">Reserva</a>
                    </li>                
                    <li class="cabecera__li">
                        <a href="#contacto" class="cabecera__link">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <main class="contenido">