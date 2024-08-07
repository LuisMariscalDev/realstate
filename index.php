<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem saepe velit mollitia, ipsa alias atque, iure architecto cumque commodi provident minus deserunt eum soluta illum nobis quos doloremque laborum magni.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono dinero" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem saepe velit mollitia, ipsa alias atque, iure architecto cumque commodi provident minus deserunt eum soluta illum nobis quos doloremque laborum magni.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem saepe velit mollitia, ipsa alias atque, iure architecto cumque commodi provident minus deserunt eum soluta illum nobis quos doloremque laborum magni.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="imagen anuncio casa">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo Fluvial</h3>
                    <p>Excelente oportunidad de compra en una de las mejores colonias de Vallarta</p>
                    <p class="precio">$4,000,000.00</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono carro">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitacion">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--.anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="imagen anuncio casa">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de Lujo</h3>
                    <p>Excelente oportunidad de compra en una de las mejores colonias de Vallarta</p>
                    <p class="precio">$3,800,000.00</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono carro">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitacion">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--.anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="imagen anuncio casa">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Excelente oportunidad de compra en una de las mejores colonias de Vallarta</p>
                    <p class="precio">$4,500,000.00</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono carro">
                            <p>2</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitacion">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--.anuncio-->
        </div><!--.contenedor-anuncio-->

        <div class="alinear-derecha">
            <a class="boton-verde" href="anuncios.html">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Te ayudamos a cumplir tus sueños</h2>
        <p>Llena el formulario y un vendedor se comunicará contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo">Contactar</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="imagen anuncio">
                    </picture>
                </div><!--.imagen-->
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito el: <span>03/07/2024</span> por: <span>Fernanda Wolburg</span></p>
                        <p>Consejor para construir una terraza en el techo de tu casa al menor costo con los mejores materiales</p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="imagen anuncio">
                    </picture>
                </div><!--.imagen-->
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para la decoración de tu hogar</h4>
                        <p>Escrito el: <span>03/07/2024</span> por: <span>Fernanda Wolburg</span></p>
                        <p>Crea el ambiente perfectos en todos los espacios de tu casa con estos sencillos pasos</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal me dio un trato excelente, así como en todo el proceso de selección y compra de la propiedad.
                </blockquote>
                <p>- Luis Mariscal</p>
            </div>
        </section>
    </div>

    <?php
        incluirTemplate('footer');
    ?>