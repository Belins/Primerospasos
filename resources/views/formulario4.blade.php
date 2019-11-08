<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{route('FormularioR4')}}" method="post">
    @csrf
    Nombre:<input type="text" name="nombre" value="{{old('nombre')}}"><br>@if ($errors->has('nombre'))
    <h3>{{$errors->first('nombre')}}</h3>@endif
    Apellido: <input type="text" name="apellido" value="{{old('apellido')}}"><br>@if ($errors->has('apellido'))
    <h3>{{$errors->first('apellido')}}</h3>@endif
    Email: <input type="text" name="email" value="{{old('email')}}"><br>@if ($errors->has('email'))
    <h3>{{$errors->first('email')}}</h3>@endif
    Teléfono: <input type="text" name="telefono" value="{{old('telefono')}}"><br>@if ($errors->has('telefono'))
    <h3>{{$errors->first('telefono')}}</h3>@endif
    dni: <input type="text" name="dni" value="{{old('dni')}}"><br>@if ($errors->has('dni'))
    <h3>{{$errors->first('dni')}}</h3>@endif
    <input type="submit" value="Enviar">
</form>

</body>
</html>