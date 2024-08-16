<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="preco do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="teto solar"> teto solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Pelcula"> Pelcula
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value=Blindado"> Blindado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>