<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion del clima</title>
</head>
<body>
    <h1>Clima actual en {{$weatherData['name']}}</h1>
    <p>Descripcion: {{ $weatherData['weather'][0]['description'] }}</p>
    <p>Temperatura: {{ $weatherData['main']['temp'] }} &#8451;</p>
    
</body>
</html>