<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Edit variant</title>
    <a href="{{route('variantes.index')}}">Back to list </a>
</head>
<body>
    <h1>Editar variante<te</h1>
    @if(Session::has('exito'))
        <p style="color: green;">{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p style="color: red;">{{Session::get('error')}}</p>
    @endif
    <form method="post" action="{{route('variantes.update', $variante->id)}}">
    @csrf
    @method('put')
        <label>Lineage</label>
        <input type="text" name="lineage" value="{{$variante->lineage}}">
        <br/>
        <label>Common countries</label>
        <textarea name="common_countries" rows="6">{{$variante->common_countries}}</textarea>
        <br/>
        <label>Earliest day</label>
        <input type="text" name="earliest_date" value="{{$variante->earliest_date}}"> 
        <br/>
        <label>Designated number</label>
        <input type="text" name="designated_number" value="{{$variante->designated_number}}"> 
        <br/>
        <label>Assigned_number</label>
        <input type="text" name="assigned_number" value="{{$variante->assigned_number}}">
        <br/>
        <label>Description</label>
        <textarea name="description" rows="6">{{$variante->description}}</textarea>
        <br/>
        <label>Who name</label>
        <input type="text" name="who_name" value="{{$variante->who_name}}">
        <br/>
        <button type="subnit">Update</button>
    </form>
</body>
</html>