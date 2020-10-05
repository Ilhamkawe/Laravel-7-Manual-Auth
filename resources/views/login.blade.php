<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="{{ route('log') }}" method="post">
            @method('POST')
            @csrf
            <h1>LOGIN</h1>
            <hr>
            <input type="text" placeholder="Username" name="username">
            <br>
            <input type="text" placeholder="Password " name="password">
            <br>
            <br>
            <p>Belum Buat akun ?<a href="{{ route('register') }}"> Register</a></p>
            <button>LOGIN</button>
        </form>
    </div>
</body>
</html>