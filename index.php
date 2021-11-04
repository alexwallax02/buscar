
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Busca</title>
</head>
<body>

    <div class="principal">

        <h2 class="texto">Busca funcionarios por nome ou e-mail</h2>
        <form action="busca.php" method="post">
            <label>Digite seu E-mail*</label>
            <input type="text" name="email" placeholder="E-mail">
            <br />
            <label>Digite sua busca*</label>
            <input type="text" name="busca" placeholder="Busca">
            <br />
            <input type="submit" name="Enviar" >
        </form>

    </div><!--principal-->

</body>
</html>