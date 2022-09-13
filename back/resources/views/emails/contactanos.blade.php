<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>
</head>
<body>
 <h1 style="text-align: center; text-decoration: underline">Correo electronico</h1>
 <h1>Información de Contacto<h1>
    <h2>Nombre:<h2> 
    <p style="text-align: center;">{{$contacto['name']}}<p>
    <h2>E-mail:<h2>
    <p style="text-align: center;">{{$contacto['correo']}}<p>
    <h2>Telefono:<h2>
    <p style="text-align: center;">{{$contacto['phone']}}<p>
    <h2>Mensaje:<h2>
    <p style="text-align: center;">{{$contacto['message']}}<p>
    <h2 style="text-align: center; text-decoration: underline">Gracias<h2>
    {{-- {(config('app.name'))} --}}
</body>
</html>