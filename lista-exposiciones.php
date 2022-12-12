<?php 
$active = 'lista-exposiciones';
include('header.php'); ?>

<article class="list-expo">

    <div class="list-expo__textos">
        <h1 class="list-expo__titulo-principal">Exposiciones</h1>
        <div class="list-expo__categoria">
            <ul class="list-expo__lista">
                <li class="list-expo__li"><a href="#pasadas">Pasadas</a></li>
                <li class="list-expo__li"><a href="#actual">Actual</a></li>
                <li class="list-expo__li"><a href="#proximas">Próximas</a></li>
            </ul>
        </div>
    </div>

    <section id="actual" class="list-expo__actual container-md">
        <div class="col-12 col-lg-10">
            <a href="exposicion-actual.php" class=" list-expo__actual-contenido">
                <div class="list-expo__actual-img">
                    <img src="img/personajes-expo.png" alt="Personajes Uncharted y The Last Of Us"> 
                </div>

                <div class="list-expo__actual-descripcion">
                    <h2 class="list-expo__actual-titulo">Actual</h2>
                    <div class="list-expo__actual-info">
                        <h3 class="list-expo__actual-info-titulo">El arte de Uncharted y The Last Of Us</h3>
                        <p class="list-expo__actual-info-fecha">02/05/2022 - 06/06/2022</p>
                    </div> 
                </div>

                <a href="exposicion-actual.php" class="list-expo__btnmas">+ info</a>
            </a>
        </div>
    </section><!--ACTUAL-->


    <section id="proximas" class="list-expo__prox container-fluid container-lg">
        <div class="row">
            <h2 class="list-expo__prox-titulo">próximas</h2>
            <div class="col-md-6 g-0">
                <!--SHIGERU-->
                <div class="list-expo__prox-contenido">
                    <div class="list-expo__prox-img">
                        <img src="img/shigeru-miyamoto.png" alt="Shigeru Miyamoto"> 
                    </div>

                    <a href="404.php" class="list-expo__prox-descripcion">
                        
                        <div class="list-expo__prox-info">
                            <h3 class="list-expo__prox-info-titulo">Shigeru Miyamoto y su recorrido por nintendo</h3>
                            <p class="list-expo__prox-info-fecha">05/08/2022 - 10/09/2022</p>
                        </div> 
                    </a>
                </div>
            </div>

            <div class="col-md-6 g-0 d-none d-md-block">
                <!--CRASH-->
                <div class="list-expo__prox-contenido">
                    <div class="list-expo__prox-img-dos">
                        <img src="img/crash-y-spyro.png" alt="Crash Bandicoot y Spyro"> 
                    </div>

                    <a href="404.php" class="list-expo__prox-descripcion">                
                        <div class="list-expo__prox-info">
                            <h3 class="list-expo__prox-info-titulo">La creación de Crash Bandicoot y Spyro</h3>
                            <p class="list-expo__prox-info-fecha">05/08/2022 - 10/09/2022</p>
                        </div> 
                    </a>
                </div>
            </div>
        </div><!--contenido futuras-->

        <a href="#" class="list-expo__mas d-none">
            <div class="list-expo__palitos">
                <div></div>
                <div></div>
            </div>
            <p class="list-expo__mas-p d-none d-md-flex">Ver más</p>
        </a>

    </section><!--PROXIMAS-->

    <section id="pasadas" class="list-expo__pasadas container-fluid container-lg">
        <div class="row">
            <h2 class="list-expo__pasadas-titulo">pasadas</h2>
            <div class="col-md-6 g-0">
                <!--BITS-->
                <div class="list-expo__pasadas-contenido">
                    <div class="list-expo__pasadas-img">
                    </div>

                    <a href="404.php"  class="list-expo__pasadas-descripcion">                
                        <div class="list-expo__pasadas-info">
                            <h3 class="list-expo__pasadas-info-titulo">La evolución del arte en 8 bit</h3>
                            <p class="list-expo__pasadas-info-fecha">05/08/2022 - 10/09/2022</p>
                        </div> 
                    </a>
                </div>
            </div>

            <div class="col-md-6 g-0 d-none d-md-block">
                <!--TETSUYA-->
                <div class="list-expo__pasadas-contenido">
                    <div class="list-expo__pasadas-img-dos">
                        <img src="img/tetsuya-nomura.png" alt="Tetsuya Nomura"> 
                    </div>

                    <a href="404.php"  class="list-expo__pasadas-descripcion">                
                        <div class="list-expo__pasadas-info">
                            <h3 class="list-expo__pasadas-info-titulo">Tetsuya Nomura y la saga Kingdom Hearts</h3>
                            <p class="list-expo__pasadas-info-fecha">05/08/2022 - 10/09/2022</p>
                        </div> 
                    </a>
                </div>    
            </div>
        </div><!--contenido pasadas-->

        <a href="#" class="list-expo__mas d-none">
            <div class="list-expo__palitos">
                <div></div>
                <div></div>
            </div>
            <p class="list-expo__mas-p d-none d-md-flex">Ver más</p>
        </a>

    </section><!--PASADAS-->

</article>

<?php include('footer.php'); ?>