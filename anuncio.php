<?php

    require 'includes/funciones.php';
    incluirTemplate('header');

?>


    <main class="contenedor seccion contenido-centrado">
          <h1>Casas en Venta frente al bosque</h1>

          <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
          </picture>

          <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p>4</p>
                        </li>
                    </ul>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus, velit mollitia consectetur voluptatum omnis accusamus repellat quasi iure labore animi modi incidunt pariatur necessitatibus porro temporibus distinctio? Quis, dolore rerum.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo cumque ad nostrum voluptas aliquam numquam expedita tempore mollitia qui nihil architecto commodi quibusdam? Debitis nulla officia porro vitae atque.</p>
          </div>
                
    </main>
<?php

   
    incluirTemplate('footer');

?>