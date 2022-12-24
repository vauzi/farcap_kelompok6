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
        <thead>
            <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Cerita</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aspirasis as $aspirasi)    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset($aspirasi->photo) }}" alt=""></td>
                    <td>{{ $aspirasi->cerita }}</td>
                    <td>
                        @if ($aspirasi->status == false)
                            Belum Dibaca
                        @else
                            Sudah Dibaca
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('aspirasi.update',$aspirasi->id) }}" method="post">
                            @csrf
                            <button type="submit">Detail</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>