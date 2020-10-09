<?php 

//Array de nombres
    $personas = array(
        "Sara", "Pepe", "María", "Juan", "Francisco", "Pedro", "Eva",
        "Lola", "María del Carmen", "Inés", "Yolanda", "Esther", "Manuel", "Miguel",
        "David", "José", "Hugo", "Luís"
    );

    $nombre = $_GET["nombre"];
    $sugerencia = "";

    if($nombre !== ""){
        $nombre = strtolower($nombre);
        $cantidadDeCaracteres = strlen($nombre);

        foreach($personas as $persona){
            $nombreEnServidor = substr($persona, 0, $cantidadDeCaracteres);

            if(stristr($nombre, $nombreEnServidor) !== false){
                if($sugerencia === ""){
                    $sugerencia = $persona;
                }else{
                    $sugerencia .= ", $persona";
                }
            }
        }

        echo $sugerencia == "" ? "No fue encontrado" : $sugerencia;
    }

?>