<?php

    require 'includes/funciones.php';
    incluirTemplate('header');

?>


    <main class="contenedor">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                    
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque fugiat ipsum nam numquam nemo non laboriosam mollitia accusantium, possimus molestiae, dolorem doloribus quisquam error hic iste adipisci debitis similique at!</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis illum voluptatem, repellendus enim quos optio aliquam commodi esse nam veniam. Facere explicabo eius natus ullam excepturi ut cum, vel iusto.</p>
            </div>
        </div>

           <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nulla exercitationem ad id ipsam veritatis iste aspernatur architecto, perferendis nesciunt a reprehenderit pariatur beatae deleniti dolores repudiandae ducimus aliquam qui.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nulla exercitationem ad id ipsam veritatis iste aspernatur architecto, perferendis nesciunt a reprehenderit pariatur beatae deleniti dolores repudiandae ducimus aliquam qui.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nulla exercitationem ad id ipsam veritatis iste aspernatur architecto, perferendis nesciunt a reprehenderit pariatur beatae deleniti dolores repudiandae ducimus aliquam qui.</p>
            </div>
        </div>

                
    </main>

<?php

   
    incluirTemplate('footer');

?>