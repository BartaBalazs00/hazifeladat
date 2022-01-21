<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listázás</title>
</head>
<body>
    <p>
        <a href="{{ route('hazifeladatok.create') }}">házifeladat feltöltése</a>
    </p>
<table>
        <tr>
            <th>url</th>
            <th>Szoveges</th>
            <th>pontszam</th>
        </tr>
    @foreach ($hazifeladatok as $hazifeladat)
        <tr>
            <td>
                <a href="{{ route('hazifeladatok.show', $hazifeladat->id) }}">{{ $hazifeladat->url }}</a>
            </td>
            <td>{{ $hazifeladat->szoveges }}</td>
            <td>{{ $hazifeladat->pontszam }}</td>
            <td>
                <form action="{{route('hazifeladatok.destroy', $hazifeladat->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
                </form>
            </td>
            <td>
                <form action="{{route('hazifeladatok.edit'm $hazifeladat->id)}} method='POST'">
                    @csrf
                    @method('POST')
                    <button type="submit">Értékelés</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>