@extends('layouts.app')

@section('content')

<table border = "1">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>ValorUnitario</th>
            <th>Codigo</th>
        </tr>
    </thead>

    <tbody>

    @foreach($productos as $producto)

        <tr>
            <td>{{$producto['id']}}</td>
            <td>{{$producto['Nombre']}}</td>
            <td>{{$producto['ValorUnitario']}}</td>
            <td>{{$producto['Codigo']}}</td>
        </tr>
        
    @endforeach
    </tbody>
</table><br>

<form action="{{url( 'productos ' )}}" method="post">

{{csrf_field()}}

<label>Nombre producto</label> <input type="text" required = "" placeholder = "Nombre" name = "Nombre" title = "Nombre"><br><br>
<label>ValorUnitario producto</label> <input type="text" required = "" placeholder = "ValorUnitario" name = "ValorUnitario" title = "ValorUnitario"><br><br>
<label>Codigo producto</label> <input type="text" required = "" placeholder = "Codigo" name = "Codigo" title = "Codigo"><br><br>
<input type="submit" value="Enviar" >

</form>
 
@endsection