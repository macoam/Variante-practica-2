<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Crear variante</title>
    <a href="{{route('variantes.index')}}">Back to list </a>
</head>
<body>
    
    <h1>Crear varinate</h1>
    <form method="post" action="{{route('variantes.store')}}">

    @csrf
        <label>Lineage</label>
        <input type="text" name="lineage">
        <br/>
        <label>Common countries</label>
        <textarea name="common_countries" rows="6"></textarea>
        <br/>
        <label>Earliest day</label>
        <input type="text" name="earliest_date">
        <br/>
        <label>Designated number</label>
        <input type="text" name="designated_number">
        <br/>
        <label>Assigned_number</label>
        <input type="text" name="assigned_number">
        <br/>
        <label>Description</label>
        <textarea name="description" rows="6"></textarea>
        <br/>
        <label>Who name</label>
        <input type="text" name="who_name">
        <br/>
        <button type="subnit">Save new variant</button>
    </form>
</body>
</html>