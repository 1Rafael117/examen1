<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulario</title>
  </head>
  <body>
    <h1 class="text-center mt-5">Conversor</h1>

    <form method="POST" action="converter.php">
    <input type="number" placeholder="1" id="entrada" name="entrada">
    <label for="entrada">Convertir:</label>
    
    <select class="form-select" id="medida" name="medida">
        <option value="1">mililitros a onzas</option>
        <option value="2">metros a yardas</option>
        <option value="3">gramos a libras</option>
        <option value="4">celcius a farenheit</option>
        <option value="5">kilometros a millas</option>
        <option value="6">pesos(MXN) a libras</option>

    </select>
    <label for="medida">tipo de unidad:</label>
    <input type="submit" value="convertir"></imput>


    <br><br>
         <a class="btn btn-primary" href="formulario.php" role="button">Conversor</a>
         <a class="btn btn-primary" href="creditos.php" role="button">Creditos</a>
         <a class="btn btn-danger" href="index.php" role="button">Inicio</a>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>