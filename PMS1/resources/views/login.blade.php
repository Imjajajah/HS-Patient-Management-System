<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syncore Medical Hospital</title>
    <link rel="icon" href="/build/assets/syncore.png">

    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">

</head>


<body>
    <div class="login-UI">
        <div class="login-logo">
            <img src="/images/logo.png" alt="Logo" class="login-logo">
            <div class="text-container">
                <h1 class="logo-text">SYNCORE</h1>
                <h2 class="tagline">Care at the core</h2>
            </div>
        </div>

        <div class="center-logo">
            <img src="/images/logo.png" alt="Syncore Logo" class="logo">
        </div>

        <div class="center-text">
            <h1>Hello, User!</h1>
        </div>

        <div class="login-container">


        <form action="/login/process" method="POST">
            @csrf
            <input type="text" placeholder="Username" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <a href="#">Forgot Password?</a> | <a href="#">Need help?</a>
    </div>

    </div>
</body>

</html>
