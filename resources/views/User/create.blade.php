<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('aspirasi.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="cerita">Cerita</label>
            <textarea name="cerita" id="cerita" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>