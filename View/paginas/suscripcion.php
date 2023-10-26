<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="/proyecto2/view/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>
<body>
<!-- Hola qué tal, te recuerdo que la web es de uso libre -->
<!-- usala para lo que desees y no olvides suscribirte a AlexCG Design -->
<!-- Web hecha por AlexCG Design, si te sirvió la plantilla por favor entra a AlexCG Design -->
<!-- ->>>> https://www.youtube.com/alexcgdesign <<<<- -->
    <form action="suscrip.php" method="post">
        <div class="form">
            <h1>Formulario de contacto</h1>
            <div class="grupo">
                <input type="text" name="nombre" id="" required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="" required><span class="barra"></span>
                <label>Email</label>
            </div>
            <div class="grupo">
                <input type="text" name="asunto" id="" required><span class="barra"></span>
                <label>Asunto</label>
            </div>
            <div class="grupo">
                <textarea name="mensaje" id="" rows="3" required></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>
            <button type="submit">Suscribete</button>
        </div>
    </form>
</body>
</html>