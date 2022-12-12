<?php 
$active = 'index';
include('header.php'); ?>

        <!-- P O R T A D A -->
        <section class="portada">
            <div class="portada__contenido">
                <div class="portada__video">
                    <video src="video/video-making-of.mp4" class="portada__video-fondo" muted autoplay loop playsinline poster="img/miniatura-video.jpg">
                    </video>
                </div>

                <div class="portada__textos">
                    <h3 class="portada__actual">Ahora</h3>
                    <h2 class="portada__contorneado">descubre el origen de la creación de</h2>
                    <h1 class="portada__titulo">Uncharted & The last of us</h1>
                </div>

                <div class="portada__reservar">
                    <a href="exposicion-actual.php" class="portada__boton">¡Me interesa!</a>
                </div>
            </div>
            

        </section>

        <!-- V A L O R E S -->
        
        <section class="valores">
            <div class="valores__col-images">
                <div class="valores__images">
                        <div class="valores__images-fort">
                            <img src="img/expo-fortnite.png" alt="Exposicion fortnite">
                        </div>

                        <img src="img/triangulo-svg.svg" class="valores__images-triangle">

                        <div class="valores__images-gaming">
                            <img src="img/sala-gaming.png" alt="Sala gaming" >
                        </div>
                </div>
            </div>

            <div class="valores__cont container">
                <div class="valores__row row">

                    <div class="valores__contenido col-md-10 col-lg-9 col-xl-10">
                        <div class="valores__texto my-4">
                            <h3 class="valores__texto-contorneado mb-3">Disfuta de la mejor experiencia</h3>
                            <h2 class="valores__titulo">Gaming y artística</h2>
                        </div>

                        <div class="valores__descriptivos">
                            <div class="valores__propiedades d-flex flex-wrap">
                                <div class="valores__tipo">
                                    <i class="icon-cama"></i>
                                    <h3 class="valores__titulo-icon">Habitaciones gaming</h3>
                                    <p class="valores__descriptivo">Con diferentes tipos de habitaciones, elige la que mejor se adapte a ti</p>
                                </div>

                                <div class="valores__tipo">
                                    <i class="icon-expo"></i>
                                    <h3 class="valores__titulo-icon">Sala de exposiciones</h3>
                                    <p class="valores__descriptivo">Exposiciones que se renuevan cada mes con contenido exclusivo y workshops</p>
                                </div>

                                <div class="valores__tipo">
                                    <i class="icon-diversion"></i>
                                    <h3 class="valores__titulo-icon">Diversión asegurada</h3>
                                    <p class="valores__descriptivo">Disfrutas de las diferentes salas que tenemos por todo el hotel y de su ambiente</p>
                                </div>

                                <div class="valores__tipo">
                                    <i class="icon-menu"></i>
                                    <h3 class="valores__titulo-icon">Menú especial</h3>
                                    <p class="valores__descriptivo">Una carta que te sorprenderá con los mejores platos de tus videojuegos favoritos</p>
                                </div>
                            </div>
                        </div> <!--descriptivos-->
                    </div><!--contenido-->

                </div><!--valores__row-->
            </div>

        </section><!--Valores-->

        <section class="hotel-portada">
            <div class="hotel-portada__separadores">
                <i class="icon-cuadrado"></i>
                <i class="icon-triangulo"></i>
            </div>

            <div class="hotel-portada__container container">
                <h2 class="hotel-portada__titulo container">Visita el hotel</h2>

                <div class="hotel-portada__contenido">
                    <div class="hotel-portada__img">
                        <div class="hotel-portada__img-uno col-md-8 col-lg-9">
                            <img src="img/restaurante-hotel.jpg" alt="Restaurante Geek Room">
                        </div>

                        <div class="hotel-portada__descripcion row g-0">
                            <div class="hotel-portada__img-dos col-md-7 col-lg-8">
                                <img src="img/prestige-room.jpg" alt="Prestige Room">
                            </div>

                            <div class="hotel-portada__textos col-md-4 col-lg-3">
                                <p class="hotel-portada__p">
                                    Descubre las instalaciones de nuestro hotel a fondo.
                                </p>
                                <p class="hotel-portada__p">
                                    Hecho para los amantes de los juegos y pasarlo bien en compañía
                                </p>
                                <p class="hotel-portada__p">
                                    ¡Te arrepentirás si no lo haces, no sabes lo que te pierdes!
                                </p>

                                
                                <a href="hotel.php" class="hotel-portada__btn">Visitar</a><!--btn-->
            
                            </div> <!--textos-->

                        </div>
                    </div> <!--img-->
                </div>
            </div>

            <div class="hotel-portada__separadores">
                <i class="icon-circulo"></i>
                <i class="icon-equis"></i>
            </div>
        </section><!--HOTEL-->

        <section class="proximo container">

            <h2 class="proximo__titulo">Próximas exposiciones</h2>

            <div class="row g-0">
                <div class="proximo__exposicion">
                    <div class="col-md-9 col-lg-8">
                        <div class="proximo__contenido">
                            <div class="proximo__portada">
                                <div class="proximo__img">
                                    <img src="img/crash-y-spyro.png" alt="Crash Bandicoot y Spyro">
                                </div>
                                <div class="proximo__fecha">
                                    <p class="proximo__p-fecha">03/08 - 05/09</p>
                                </div>
                            </div>

                            <div class="proximo__info">
                                <h3 class="proximo__titulo-expo">La creación de Crash Bandicoot y Spyro</h3>
                                <div class="proximo__descripcion d-none d-md-block">
                                    <p class="proximo__p">Cras non ex sed ipsum tincidunt varius. Sed rutrum ipsum aliquet fermentum fermentum. Duis tincidunt dictum tincidunt.</p>
                                    <p class="proximo__p">Nunc vulputate semper lorem, luctus volutpat est scelerisque at. Nulla tincidunt finibus leo. Duis ac vulputate sapien. Pellentesque efficitur, sapien eu rutrum sollicitudin, erat risus laoreet orci, vel ultrices justo sem ac enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--EXPO EN 8 BITS-->

                <div class="proximo__exposicion">
                    <div class="col-md-9 col-lg-8">
                        <div class="proximo__contenido">
                            <div class="proximo__portada">
                                <div class="proximo__img-shigeru">
                                    <img src="img/shigeru-miyamoto.png" alt="Shigeru Miyamoto">
                                </div>
                                <div class="proximo__fecha">
                                    <p class="proximo__p-fecha">10/09 - 20/10</p>
                                </div>
                            </div>

                            <div class="proximo__info">
                                <h3 class="proximo__titulo-expo">Shigeru Miyamoto y su recorrido por nintendo </h3>
                                <div class="proximo__descripcion d-none d-md-block">
                                    <p class="proximo__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit sem ac mollis vehicula. Donec eleifend mi vel elit feugiat, nec placerat metus egestas. Praesent et diam et nulla finibus finibus vel at libero.</p>
                                    <p class="proximo__p">Morbi eget quam et erat varius euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--EXPO TETSUYA-->
            </div>

            <a href="lista-exposiciones.php" class="proximo__btn">+ información</a>

        </section>



<?php include('footer.php'); ?>