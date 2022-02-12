<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid19 variant list</title>
</head>
<body>
<h1>Covid19 variant list</h1>
    @if(Session::has('exito'))
        <p style="color: green;">{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p style="color: red;">{{Session::get('error')}}</p>
    @endif
    <p>*Updated January 28</p>
    <a href="{{route('variantes.create')}}"> Add variant</a>

<table>
    <thead>
        <tr>
            <th>Lineage</th>
            <th>Common countries</th>
            <th>Earlist date</th>
            <th>Dessignatded number</th>
            <th>Assignated number</th>
            <th>Description</th>
            <th>Who named</th>
            <th>Actions</th>

        </tr>
    </thead>
    <body>
        @foreach($variantes as $variante)
        <tr>
            <td>{{$variante->lineage}}</td>
            <td>{{$variante->common_countries}}</td>
            <td>{{$variante->earlist_date}}</td>
            <td>{{$variante->dessinagted_number}}</td>
            <td>{{$variante->assignated_number}}</td>
            <td>{{$variante->description}}</td>
            <td>{{$variante->who_named}}</td>
            <td><a href="{{route('variantes.edit', $variante->id)}}">Edit</a>
            <form method="post" action="{{route('variantes.destroy', $variante->id)}}">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>

            </form>
            </td>
        </tr>
        @endforeach
    </body>
</table>
</body>
</html>