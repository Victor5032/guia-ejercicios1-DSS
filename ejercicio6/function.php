<?php
    // Función para autocompletar numero
    function agregar_ceros ($numero, $largo = 0) {
        return str_pad($numero, $largo, '0', STR_PAD_LEFT);
    }
?>
