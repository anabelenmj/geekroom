<?php 
$active = 'exposicion-actual';
include('header.php'); ?>

<article class="expo">
    <section class="expo__portada">
        <div class="expo__contenido">
            <div class="expo__titulos">
                <h2 class="expo__titulo-uno">El arte de</h2>
                <h1 class="expo__titulo-dos">Uncharted & The last of us</h1>
            </div>
            
            <img src="img/personajes-expo.png" alt="Personajes Uncharted y The Last Of Us" class="expo__png">
            
            <div class="expo__flecha">
                <i class="icon-flecha"></i>
                <i class="icon-flecha d-none d-lg-block"></i>
            </div>
        </div>
    </section>

    <div class="expo__bg-uncharted"></div>

    <section class="expo__uncharted">
        <div class="expo__info container">
            <h2 class="expo__titular">Adéntrate de lleno en las aventuras de Nathan Drake</h2>

            <div class="expo__text-img d-md-flex">
                <div class="expo__text col-md-8">
                    <p class="expo__parrafo">Uncharted es una serie de videojuegos creada por Naughty Dog que empezó en 2007. Actualmente está compuesta por 4 diferentes capítulos: Uncharted: El tesoro de Drake (2007); Uncharted: El reino de los ladrones (2009); Uncharted: La traición de Drake (2011); Uncharted: El desenlace del ladrón (2016).</p>
                    <p class="expo__parrafo">Se trata de un videojuego de acción y aventuras en el que tiene diferentes acertijos y puzles que resolver para poder avanzar en la historia. El personaje principal es Nathan Drake.</p>
                </div>

                <div class="expo__uncharted-png col-md-4">
                    <img src="img/modelado-uncharted.png" alt="Modelado 3D personajes Uncharted">
                </div>
            </div>
        </div>

        <div class="expo__datos-interes container">
            <div class="expo__datos col-md-4">
                <h2 class="expo__titular">Datos de interés</h2>
                <div class="expo__text">
                    <p class="expo__parrafo">Si eres un amante del arte en todas sus formas, no puedes perderte esta experiencia. Podrás ver desde la creación y evolución de sus personajes, historias de los tesoros, concept art, modelados 3D, animaciones, cinemáticas... </p>
                    <p class="expo__parrafo">Tendrás la oportunidad de poder acceder a contenido exclusivo del videojuego y de la película recientemente estrenada.</p>
                </div>
            </div>

            <div class="expo__slide col-md-7">
                <div id="carouselUncharted" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-slide="next"  data-slide-to="2">
                        <img class="d-block w-100" src="img/concept-uncharted-uno.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="img/concept-uncharted-dos.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="img/concept-uncharted-tres.jpg" alt="Third slide">
                        </div>
                    </div>

                    <div class="carousel-caption">
                        <p class="carousel__p">Trabajo de iluminación en "Uncharted 4: El desenlace del Ladrón" por Matt Morgan</p>
                    </div>



                    <a class="carousel-control-prev" href="#carouselUncharted" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselUncharted" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    
                </div>
            </div>

    </section><!--UNCHARTED-->

    <section class="expo__artista container">
        <div class="expo__nombre">
            <h2 class="expo__nombre-uno">Bruce</h2>
            <i class="icon-triangulo d-none d-md-flex"></i>
            <h2 class="expo__nombre-dos">Straley</h2>
        </div>

        <i class="icon-triangulo d-md-none"></i>

        <div class="expo__contenido-bruce">
            <i class="icon-cuadrado"></i>
            <div class="expo__bruce">
                <div class="expo__bruce-img">
                    <div class="expo__bruce-jpg">
                        <img src="img/bruce-straley.jpg" alt="Bruce Straley">
                    </div>
                    <p class="expo__bruce-cargo">Director de juego | artista | diseñador</p>
                </div>

                <div class="expo__bruce-text d-md-block">
                    <p class="expo__bruce-p">Straley formó parte de Naughty Dog durante 18 años. El primer título en el que trabajó fue Crash Team Racing como artista de texturas.</p>
                    <p class="expo__bruce-p">De ahí también colaboró en el desarrollo de la trilogía Jak and Daxter hasta llegar a ser el codirector artístico de Uncharted: El tesoro de Drake y posteriormente el director de Uncharted 2: El reino de los ladrones, Uncharted 4: El desenlace del ladrón y también The Last of Us</p>
                    <p class="expo__bruce-p">Su carrera ha estado ligada a los videojuegos durante 28 años y ha formado parte del equipo de 15 títulos distintos</p>
                </div>
            </div>
            <i class="icon-circulo"></i>
        </div>

        <button class="expo__leer-mas" onclick="buttonClick()">
            <p class="d-md-none">Leer</p>
            <i class="icon-equis"></i> 
            <p class="d-md-none">más</p>
        </button>

    </section> <!--BRUCE-->

    <div class="expo__bg-tlou"></div>

    <section class="expo__tlou">
        <div class="expo__info container">
            <div class="expo__tlou-historia col-md-8">
                <h2 class="expo__titular">Conoce la historia de Ellie y los infectados</h2>
                <p class="expo__parrafo">Al igual que Uncharted, The Last Of Us ha sido otros de los videojuegos de éxito de la famosa compañía Naughty Dog y su director Bruce Straley. Fue lanzado en 2013 y distribuido por Sony Computer Entertainment para la consola Play Station 3.</p>
                <p class="expo__parrafo">The Last Of Us es un videojuego de terror, acción y aventura que describe las vivencias de dos de sus protagonistas Ellie y Joel, supervivientes de una pandemia en Estados Unidos que provoca la mutación de los seres humanos en criaturas caníbales.</p>
            </div>

            <div class="expo__tlou-png">
                <img src="img/ellie.png" alt="Ellie The Last Of Us">
                <div class="expo__tlou-modelado">
                    <img src="img/modelado-tlou.png" alt="Modelado 3D chasqueador The Last Of Us">
                    <img src="img/modelado-tlou-dos.png" alt="Modelado 3D personajes Uncharted">
                </div>
            </div>
        </div>

        <div class="expo__datos-interes container">
            <div class="expo__datos col-md-4">
                <h2 class="expo__titular">Datos de interés</h2>
                <p class="expo__parrafo">Podrás ver los diferentes procesos de modelado y riggin de los infectados y chasqueadores, modelado de armas y personajes junto a los diferentes concept arts previos...</p>
                <p class="expo__parrafo">Habrá un apartado dedicado a la banda sonora del videojuego creada por Gustavo Santaolalla y un previo adelanto de su adaptación a la película que se lanzará en Junio de 2023</p>
            </div>

            <div class="expo__slide col-md-7">
                <div id="carouselTLOU" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-slide="next"  data-slide-to="2">
                        <img class="d-block w-100" src="img/concept-tlou-uno.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="img/concept-tlou-dos.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="img/concept-tlou-tres.jpg" alt="Third slide">
                        </div>
                    </div>

                    <div class="carousel-caption">
                        <p class="carousel__p">Concept Art de "The Last Of Us: Part II" por Florent Lebrun</p>
                    </div>

                    <a class="carousel-control-prev" href="#carouselTLOU" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselTLOU" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    
                </div>
            </div>

        </div>
    </section><!--TLOU-->

    <section class="expo__workshop container-md">
        <h2 class="expo__workshop-titulo">Workshop</h2>

        <div class="expo__martin d-md-flex">
            <div class="col-md-9">
                <div class="expo__martin-contenido">

                    <div class="expo__martin-portada">

                        <div class="expo__martin-img">
                            <img src="img/fondo-taller-martin.jpg" alt="Fondo de Workshop Martin Teichmann">
                            <img src="img/martin-teichmann.png" alt="Martin Teichmann">
                        </div>

                        <div class="expo__martin-personal">
                            <p class="expo__martin-nombre">Martin Teichmann</p>
                            <p class="expo__martin-cargo">Environment Artist de Naughty Dog</p>
                        </div>

                    </div>

                    <div class="expo__martin-info">
                        <h3 class="expo__titulo">Cómo crear un entorno para videojuegos: herramientas y forma de trabajo</h3>
                        <div class="expo__fecha">
                            <p class="expo__dias">9 - 10 </p>
                            <p class="expo__mes">/04</p>
                        </div>
                    </div>

                </div>
            

                <div class="expo__detalles">
                    <div class="expo__plazas">
                        <i class="icon-plazas"></i>
                        <h4 class="expo__aforo">Plazas</h4>
                        <p>Aforo limitado (max. 15)</p>
                    </div>

                    <div class="expo__precio">
                        <i class="icon-moneda"></i>
                        <h4 class="expo__aforo">Precio</h4>
                        <ul clas="expo__ul">
                            <li>Alojados en hotel: <strong>GRATIS</strong></li>
                            <li>No alojados en hotel: <strong>35€</strong></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div><!--MARTIN-->

        <div class="expo__frank">
            <div class="col-md-9">
                <div class="expo__frank-contenido">

                    <div class="expo__frank-portada">

                        <div class="expo__frank-img">
                            <img src="img/fondo-taller-frank.jpg" alt="Fondo de Workshop Frank Tzeng">
                            <img src="img/frank-tzeng.png" alt="Frank Tzeng">
                        </div>

                        <div class="expo__frank-personal">
                            <p class="expo__frank-nombre">Frank Tzeng</p>
                            <p class="expo__frank-cargo">Environment Artist de Naughty Dog</p>
                        </div>

                    </div>

                    <div class="expo__frank-info">
                        <h3 class="expo__titulo">Fundamentos principales de modelado 3D para videojuegos AAA</h3>
                        <div class="expo__fecha">
                            <p class="expo__dias">9 - 10 </p>
                            <p class="expo__mes">/04</p>
                        </div>
                    </div>

                </div>

                <div class="expo__detalles col-md-9">
                    <div class="expo__plazas">
                        <i class="icon-plazas"></i>
                        <h4 class="expo__aforo">Plazas</h4>
                        <p>Aforo limitado (max. 15)</p>
                    </div>

                    <div class="expo__frank-precio">
                        <i class="icon-moneda"></i>
                        <h4 class="expo__frank-aforo">Precio</h4>
                        <ul clas="expo__frank-ul">
                            <li>Alojados en hotel: <strong>GRATIS</strong></li>
                            <li>No alojados en hotel: <strong>35€</strong></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div><!--FRANK-->

    </section>

</article>

<script>

    const boton = $('.expo__leer-mas');
    const cajaTexto = $('.expo__bruce-text-disp');

    function buttonClick () {
        boton.click(function() {
            cajaTexto.slideToggle('fast');
        });
}  

$('.carousel').carousel({
  interval: 2000
})

</script>

<?php include('footer.php'); ?>