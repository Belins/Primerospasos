<!DOCTYPE html>
<html>
<head>
	<title>Recojer Datos</title>
</head>
<body>
    @foreach ($idiomas as $idioma)
        <p>{{$idioma->saludo}} {{$nombre." ".$apellido}}</p>
    @endforeach
</html>