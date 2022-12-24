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
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>
                        @if ($user->is_admin == true)
                            Admin
                        @else
                            Masyarakat
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('users.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <button type="submit">Ubah Admin</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>