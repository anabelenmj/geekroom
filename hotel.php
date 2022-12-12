<?php 
$active = 'hotel';
include('header.php'); ?>

<article class="hotel">
    <section class="hotel__portada">
        <div class="hotel__composicion">
            <div class="hotel__img-izda"></div>
            <div class="hotel__img-rombo">
                <div class="hotel__rombo">
                    <img src="img/expo-pantalla.png" alt="Prestige Room">
                </div>
                <h1 class="hotel__titulo-rombo">the best way to enjoy</h1>
            </div>
            <div class="hotel__img-dcha"></div>
        </div>
    </section> <!--PORTADA HOTEL-->

    <section class="hotel__habitaciones container">
        
        <h2 class="hotel__titulo-entrada">Habitaciones</h2>
        <div class="hotel__descripcion-entrada">
            <p class="hotel__p">En este hotel tendrás la oportunidad de disfrutar de tus videojuegos favoritos en tu propia habitación, sólo tienes que pedirlo en recepción.</p>
            <p class="hotel__p">El hotel cuenta con 3 plantas, cada una de ellas con diferentes tipos de habitaciones</p>
        </div>

        <!--TIPO HABITACIONES-->
        <div class="hotel__tipo-habitacion">
            <div class="col-md-10 col-xl-9">
                <h3 class="hotel__titulo-habitacion">Prestige Room</h3>
                <div class="hotel__portada-img">
                    <div class="hotel__img">
                        <img src="img/prestige-room.jpg" alt="Prestige Room">
                        <i class="icon-rango-3"></i>
                    </div>           
                </div>

                <input type="checkbox" id="check-hotel-uno">

                <label class="hotel__bola-mas d-md-none" for="check-hotel-uno">
                    <i class="icon-flecha"></i>
                </label>

                <div class="hotel__detalles-habitacion">
                    <div class="hotel__descripcion-habitacion">
                        <p class="hotel__p">Tendrás la oportunidad de conducir un Ferrari e incluso tener experiencias VR en tu propia habitación. Incluye también acceso a pc</p>
                    </div>
                    <div class="hotel__capacidad-habitacion">
                        <i class="icon-capacidad"></i>
                        <div class="hotel__capacidad-texto">
                            <h4 class="hotel__titulo-capacidad">Capacidad</h4>
                            <p class="hotel__p">+4 pax</p>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!--PRESTIGE ROOM-->

        <div class="hotel__tipo-habitacion-sr">
            <div class="col-md-10 col-xl-9">
                <h3 class="hotel__titulo-habitacion">Soldier Room</h3>
                <div class="hotel__portada-img">
                    <div class="hotel__img">
                        <img src="img/soldier-room.jpg" alt="Soldier Room">
                        <i class="icon-rango-2"></i>
                    </div>
                </div>

                <input type="checkbox" id="check-hotel-dos">

                <label class="hotel__bola-mas d-md-none" for="check-hotel-dos">
                    <i class="icon-flecha"></i>
                </label>

                <div class="hotel__detalles-habitacion">
                    <div class="hotel__descripcion-habitacion">
                        <p class="hotel__p">Encontrarás las consolas actuales como: play station o Xbox o switch</p>
                    </div>
                    <div class="hotel__capacidad-habitacion">
                        <i class="icon-capacidad"></i>
                        <div class="hotel__capacidad-texto">
                            <h4 class="hotel__titulo-capacidad">Capacidad</h4>
                            <p class="hotel__p">Hasta 3 pax.</p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div> <!--SOLDIER ROOM-->

        <div class="hotel__tipo-habitacion">
            <div class="col-md-10 col-xl-9">
                <h3 class="hotel__titulo-habitacion">Junior Room</h3>
                <div class="hotel__portada-img">
                    <div class="hotel__img">
                        <img src="img/junior-room.jpg" alt="Junior Room">
                        <i class="icon-rango-1"></i>
                    </div>
                </div>

                <input type="checkbox" id="check-hotel-tres">

                <label class="hotel__bola-mas d-md-none" for="check-hotel-tres">
                    <i class="icon-flecha"></i>
                </label>

                <div class="hotel__detalles-habitacion">
                    <div class="hotel__descripcion-habitacion">
                        <p class="hotel__p">Encontrarás consolas como: Famicom, recreativas o gameboy</p>
                    </div>
                    <div class="hotel__capacidad-habitacion">
                        <i class="icon-capacidad"></i>
                        <div class="hotel__capacidad-texto">
                            <h4 class="hotel__titulo-capacidad">Capacidad</h4>
                            <p class="hotel__p">Hasta 2 pax.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!--JUNIOR ROOM-->

    </section> <!--HABITACIONES HOTEL-->

    <div class="hotel__separador">
        <img src="img/logo-simplificado.svg" alt="Logo Geek Room">
    </div>

    <section class="hotel__restaurante container">
        <h2 class="hotel__titulo-entrada">Restaurante/bar</h2>

        <div class="hotel__restaurante-img">
            <div class="hotel__restaurante-uno"></div>
            <div class="hotel__restaurante-dos"></div>
        </div>

        <div class="hotel__descripcion-restaurante">
            <p class="hotel__p">¡Conoce nuestro restaurante con una temática retro y un ambiente inigualable!</p>
            <p class="hotel__p">Podrás disfrutar de máquinas recreativas y de unas comidas especiales para todos los paladares. ¡Habrá platos que parecerán sacados de los propios videojuegos!</p>
            <p class="hotel__p">Como no podía ser de otra manera, disfruta de nuestro pub/bar a partir de las 06:00 p.m hasta las 01:00 a.m </p>
            <p class="hotel__p">Habrá una sección de actividades especiales para los más atrevidos y otra sección para disfrutar de su música</p>
        </div>

    </section> <!--RESTAURANTE/BAR-->









</article>

<?php include('footer.php'); ?>