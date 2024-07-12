<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>



    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

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

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="imagen anuncio">
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
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="imagen anuncio">
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
    </main>


    <?php
       incluirTemplate('footer');
    ?>