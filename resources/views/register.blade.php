<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{route('store')}}" method="POST">
        @if($errors->any()) 
        <h1>Silahkan masukan akun anda</h1>
        <h1 style="color: red; ">{{$errors->first()}}</h1>
        @endif
        @csrf
        <label for="name">Nama :</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email : </label>
        <input type="email" placeholder="Masukan email" id="email" name="email"><br>
        <label for="password">Password : </label>
        <input type="password" placeholder="Masukan password" id="password" name="password"><br>
        <button class="submit">Submit</button>
    </form>
</body>
</html>