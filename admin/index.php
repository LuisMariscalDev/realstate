<?php

    // Importar la conexión
    require '../includes/config/database.php';
    $db = conectarDB();

    // Escribir el Query
    $query = "SELECT * FROM propiedades";

    // Consultar la DB
    $resultadoConsulta = mysqli_query($db, $query);

    $resultado = $_GET['resultado'] ?? null;

    require '../includes/funciones.php';
    incluirTemplate('header');
?>



    <main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>
        <?php if( intval( $resultado) === 1 ): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>        
        <?php endif ?>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados-->
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td> <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"></td>
                    <td>$<?php echo $propiedad['precio']; ?></td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </main>


    <?php

        // Cerrar la conexión
        mysqli_close($db);

        incluirTemplate('footer');
    ?>