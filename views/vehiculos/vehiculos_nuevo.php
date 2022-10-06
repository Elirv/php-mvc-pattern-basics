<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data ["titulos"]; ?></title>
</head>
<body>
    <h2></h2>

    <form id="new" name="new" method="GET" action="" autocomplete="off">
        Car registration: <input type="text" id="placa" name="palca"/><br>
        Name: <input type="text" id="marca" name="marca"/><br>
        Model: <input type="text" id="modelo" name="modelo"/><br>
        Year: <input type="text" id="anio" name="anio"/><br>
        Color: <input type="text" id="color" name="color"/><br>

        <button id="save" name"save" type="submit">Save</button>
    </form>


</body>
</html>
<?php //echo $data ["titulos"]; ?>