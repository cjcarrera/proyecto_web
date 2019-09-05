<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
        
    }
</style>


</head>
<body>
    <center><h1>CUERPO DE AGENTES DE CONTROL METROPOLITANO DE QUITO</h1></center><br>
    <h2>Registre sus datos personales</h2>
    <form action="controlador\controlador.php" method="post">
    Cedula: <input type = "number" name = "txtci" ><br><br>
    Nombre: <input type = "text" name = "txtnombre"><br><br>
    Apellido: <input type = "text" name = "txtapellido"><br><br>
    Direccion:  <input type = "text" name = "txtdireccion" placeholder="Ingrese direccion"><br><br>
    Genero: <input type="radio" name="sexo" Value="M" checked>Masculino
            <input type="radio" name="sexo" Value="F">Femenino 
    <br>
    <br>

    Provincia: <Select Name "provincia">
    <option value="Pichincha" selected>Pichincha</option>
    <option value="Imbabura" selected>Imbabura</option>
    <option value="Cotopaxi" selected>Cotopaxi</option>
    
    </Select>

    <br>
    <br>
    Canton: <Select Name "canton">
    <option value="Quito" selected>Quito</option>
    <option value="Carcelen" selected>Carcelen</option>
    <option value="Guamani" selected>Guamani</option>
    
    </Select>
    
    <br>
    <br>
    Idiomas 
    <br> <input type="checkbox" name ="Idioma" value = "Espaniol" checked>Espaniol
    <br> <input type="checkbox" name ="Idioma" value = "Ingles">Ingles
    <br> <input type="checkbox" name ="Idioma" value = "Portugues">Portugues
    <br> <input type="checkbox" name ="Idioma" value = "Frances">Frances
    
    <center><input type="submit" value ="aceptar">


    </form>
    <?
    include ("controlador\controlador.php");
    

    echo "Nombre: $txtci";
    ?>
</body>
</html>