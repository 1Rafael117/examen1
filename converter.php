<?php
$tipoConversion = $_POST['medida'];
$entrada = $_POST['entrada'];

if (empty($entrada)){

    echo "<h1>No haz ingresado ningun valor</h1>";

} else {
    if ( $tipoConversion != 4 && $entrada < 0 ){
        echo "<h1>Ingresa un valor positivo, por favor</h1>";
        $textoBoton = "Regresar";
    }else{
        switch ( $tipoConversion ){
            case 1:
                $resultado = $entrada / 29.574;
                $unidad = "mililitros";
                $newunidad = "onzas";
                break;

            case 2:
                $resultado = $entrada * 1.894;
                $unidad = "metros";
                $newunidad = "yardas";
                break;

            case 3:
                $resultado = $entrada / 454;
                $unidad = "gramos";
                $newunidad = "libras";
                break;

            case 4:
                $resultado = $entrada * (9/5) + 32;
                $unidad = "grados Celcius";
                $newunidad = "grados Farenheit";
                break;

            case 5:
                $resultado = $entrada / 1.609;
                $unidad = "kilometros";
                $newunidad = "millas";
                break;

            case 6:
                $resultado = $entrada * .038;
                $unidad = "peso MXN";
                $newunidad = "libras";
                break; 

            default:
                break;
        }

        echo "<h1>" .$entrada. " " .$unidad. "equivale a <b>" .round($resultado,3). " " .$newunidad. "</b> </h1>";
    }

}

?>








