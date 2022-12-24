<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>{{ $aspirasi->name }}</td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><img src="{{ asset($aspirasi->photo) }}" alt=""></td>
        </tr>
        <tr>
            <td>Cerita</td>
            <td>{{ $aspirasi->cerita }}</td>
        </tr>
    </table>
</body>
</html>