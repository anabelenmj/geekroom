<?php 
$active = 'reserva';
include('header.php'); ?>


<div class="reserva__bg">
<img src="img/triangulo-simple.svg" class="d-none d-md-flex reserva__bg-uno">

<article class="reserva container">    

    <section class="reserva__datos-personales col-lg-10 col-xl-8">
        <h2 class="reserva__titulo">Datos personales</h2>

        <div class="reserva__contenido">
            <form action="contacto.php" method="post" class="reserva__formulario">
                <label class="reserva__tipo">
                    <p class="reserva__label"><span>Nombre</span></p>
                    <div class="reserva__input">
                        <input type="text" id="nombre" name="Nombre" maxlength="60" class="reserva__campo"/>
                    </div>
                </label>

                <label class="reserva__tipo">
                    <p class="reserva__label"><span>Apellidos</span></p>
                    <div class="reserva__input">
                        <input type="text" id="apellidos" name="Apellidos" class="reserva__campo"/>
                    </div>
                </label>

                <label class="reserva__tipo">
                    <p class="reserva__label"><span>DNI</span></p>
                    <div class="reserva__input">
                        <input type="text" id="dni" name="DNI" class="reserva__campo"/>
                    </div>
                </label>

                <label class="reserva__tipo">
                    <p class="reserva__label"><span>Código postal</span></p>
                    <div class="reserva__input">
                        <input type="text" id="cp" name="Código postal" class="reserva__campo"/>
                    </div>
                </label>

                <label class="reserva__tipo">
                    <p class="reserva__label"><span>Teléfono</span></p>
                    <div class="reserva__input">
                        <input type="text" id="tlf" name="Teléfono" class="reserva__campo"/>
                    </div>
                </label>

                <label class="reserva__tipo">
                    <p class="reserva__label"><span>E-mail</span></p>
                    <div class="reserva__input">
                        <input type="text" id="email" name="E-mail" class="reserva__campo"/>
                    </div>
                </label>
            </form>
        </div>
        
    </section>

    <hr>

    <section class="reserva__datos-alojamiento col-lg-10 col-xl-8">
        <h2 class="reserva__titulo">Datos alojamiento</h2>

        <div class="reserva__contenido">
            <form action="contacto.php" method="post" class="reserva__formulario">
                <label class="reserva__tipo">
                    <p class="reserva__label"><span>Fecha de entrada</span> </p>
                    <div class="reserva__input">
                        <input type="date" id="fechaentrada" name="Fecha de entrada" class="reserva__campo"/>
                    </div>
                </label>

                <label class="reserva__tipo">
                    <p class="reserva__label"><span>Fecha de salida</span> </p>
                    <div class="reserva__input">
                        <input type="date" id="fechaentrada" name="Fecha de entrada" class="reserva__campo"/>
                    </div>
                </label>
                
            </form>
        </div>
        
    </section>

    <div class="reserva__boton">
        <input type="submit" value="Reservar" class="reserva__boton" />
    </div>

</article>

<img src="img/triangulo-simple.svg" class="d-none d-md-flex reserva__bg-dos">
</div>


<?php include('footer.php'); ?>