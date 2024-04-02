<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    </head>
    <body>
        <div class="center">
            <h1>Sitarisa</h1>
            @error('name')
                <h3 style="text-align: center; color: red; margin-top: 16px;">{{ $message }}</h3>
            @enderror
            <form method="post" action="/login">
                @csrf
                <div class="txt_field">
                    <input type="text" name="name" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <a href="/"><center>Kembali ke halaman utama</center></a>
                <br>
                <input type="submit" value="Login">
            </form>
            <br>
        </div>
    </body>
</html>
