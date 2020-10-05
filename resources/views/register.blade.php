<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <form action="{{ route('regis') }}" method="post">
            @csrf
            @method('post')
            <h1>Register</h1>
            <hr>
            <input name ="name" type="text" placeholder="Name">
            <br>
            <input name="email" type="text" placeholder="Email">
            <br>
            <input name="password" type="password" placeholder="Password ">
            <br>
            <input name="password_confirmation" type="password" placeholder="Password Confirmation">
            <br>
            <br>
            <p>Sudah Punya Akun ?<a href="{{ route('login') }}"> Login</a></p>
            <button>Daftar</button>
        </form>
    </div>
</body>
</html>