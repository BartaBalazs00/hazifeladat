<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szerkeszt</title>
</head>
<body>
<h1>Edit Hazifeladat</h1>
    <form method='POST' action="{{ route('hazifeladatok.update', $hazifeladat->id) }}">
        @method('PUT')
        @csrf
        <div>
            URL:<br>
            <a href="{{ $hazifeladat->url }}"><p>{{ $hazifeladat->url }}</p></a>
        </div>
        <div>
            Szöveges értékelés:<br>
            <input type="text" name="szoveges" value="{{ $hazifeladat->szoveges}}">
        </div>
        <div>
            pontszám:<br>
            <input type="number" name="pontszam" value="{{ $hazifeladat->pontszam}}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
</body>
</html>