<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>



    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
        </picture>

        <h2>Complete el formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">Correo Electrónico</label>
                <input type="email" placeholder="example@correo.com" id="email">

                <label for="tel">Teléfono</label>
                <input type="tel" placeholder="Tu telefono" id="tel">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" placeholder=""></textarea>
            </fieldset>
            
            <fieldset>
                <legend>Información sobre la propiedad</legend>
                
                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" selected disabled>--Seleccionar--</option>
                    <option value="vender">Vender</option>
                    <option value="comprar">Comprar</option>
                </select>

                <label for="cantidad">Precio o Presupuesto:</label>
                <input type="number" min="0" placeholder="$$$" id="cantidad">
                
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contactar" type="radio" placeholder="Tu telefono" id="contactar-telefono">

                    <label for="contactar-email">Correo Electrónico</label>
                    <input name="contactar" type="radio" placeholder="example@correo.com" id="contactar-email">
                </div>

                <p>En caso de elegir teléfono, por favor indique la fecha y hora para contactarlo</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="16:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>


    <?php
        incluirTemplate('footer');
    ?>