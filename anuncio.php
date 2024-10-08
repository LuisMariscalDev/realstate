<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>



    <main class="contenedor seccion contenido-centrado">
        <h1>Lujosa villa al lado del mar</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">

            <img src="build/img/destacada.jpg" alt="imagen casa en venta">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$2,700,000</p>
            
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

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cupiditate, impedit ipsum ad deleniti hic ex nulla ullam inventore ut, ipsam aperiam tempora pariatur accusamus perspiciatis modi dolor, culpa aut?
                Aliquam vitae doloremque mollitia debitis ducimus nisi? A ducimus sunt ut omnis quam, aut natus atque explicabo voluptas distinctio laborum placeat quae fugiat quisquam cupiditate eius id eum. Rem, recusandae.
                Quaerat molestiae pariatur vel, iure nisi debitis est. Eaque, facilis ipsam. Eius debitis placeat vel neque itaque quos quas sunt, deserunt nesciunt eveniet alias aperiam, aliquam ipsam sed quis animi!
            </p>
            <p>
                Itaque nisi commodi, sequi distinctio tempora cum laboriosam magnam adipisci ea porro sint placeat, esse quia recusandae cumque voluptates consequatur at harum inventore quisquam iure? Dolorum suscipit ea magnam eum.
                At quibusdam placeat minus maiores. Itaque iure molestias dolore dicta similique dolorum, aspernatur dignissimos quaerat asperiores saepe aliquid non facilis quia laboriosam provident ad repellendus doloremque modi totam. Eligendi, soluta?
            </p>
        </div>
    </main>


    <?php
        incluirTemplate('footer');
    ?>