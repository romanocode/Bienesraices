<?php

require_once __DIR__ . '/app.php';

function incluirTemplate( $nombre, $inicio = false) {
    include TEMPLATES_URL . "/{$nombre}.php";
}