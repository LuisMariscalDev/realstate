<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>



    <main class="contenedor seccion">
        <h1>Conoce acerca de nosotros</h1>

        <div class="contenedor contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/nosotros.webp" type="image/webp">
                    <source srcset="/build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="imagen nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eum aliquam nemo suscipit quisquam eius repellendus nesciunt voluptatem earum numquam provident sint odit architecto soluta culpa reprehenderit, dicta id officiis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et veniam est doloremque eum a illum nostrum ut laudantium mollitia esse? Nisi eius ut veniam, perferendis architecto asperiores nam veritatis. Veniam!
                    Neque cum a molestiae libero ex veritatis eveniet debitis voluptas expedita velit impedit necessitatibus doloribus harum fuga, aliquid exercitationem repudiandae asperiores? 
                </p>
            </div>
        </div>

        <section class="contenedor seccion">
            <h2>Más Sobre Nosotros</h2>
    
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
        </section>

    </main>


    <?php
        incluirTemplate('footer');
    ?>