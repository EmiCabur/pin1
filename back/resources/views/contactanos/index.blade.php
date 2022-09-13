<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>
</head>
<body>
  <h1>Get in touch. We are hiring!</h1>
  <form action="{{route('contactanos.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <label for="">Nombre:
        <input type="text" name="name"><br>
    </label>
    @error('name')
      <p><strong>{{$message}}</strong></p>
    @enderror
    <label for="">Correo:
        <input type="text" name="correo"><br>
    </label>
    @error('correo')
    <p><strong>{{$message}}</strong></p>  @enderror
    <label for="">Telefono:
        
        <input type="text" name="phone"><br>
    </label>
    <label for="">Mensaje:
        
        <input type="text" name="message"><br>
    </label>
    @error('message')
    <p><strong>{{$message}}</strong></p>
    @enderror
    <button type="submit">Enviar</button>
  </form>

</body>
</html>