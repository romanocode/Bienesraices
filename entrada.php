<?php

    require 'includes/funciones.php';
    incluirTemplate('header');

?>


    <main class="contenedor seccion contenido-centrado">
          <h1>Guía para la decoracion de tu hogar</h1>

          

          <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
          </picture>

          <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
          
          <div class="resumen-propiedad">
          

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus, velit mollitia consectetur voluptatum omnis accusamus repellat quasi iure labore animi modi incidunt pariatur necessitatibus porro temporibus distinctio? Quis, dolore rerum.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo cumque ad nostrum voluptas aliquam numquam expedita tempore mollitia qui nihil architecto commodi quibusdam? Debitis nulla officia porro vitae atque.</p>
          </div>
                
    </main>

<?php

   
    incluirTemplate('footer');

?>