<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>    
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portafolio">Portafolio</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <h1>Home</h1>
    Bienvenido <?php echo $nombre ?? "Invitado" ?>
</body>
</html>