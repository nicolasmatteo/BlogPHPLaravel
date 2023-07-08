<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main class="container align-center p-5">
        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label for="emailInput">Email</label>
                <input type="email" id="emailInput" name="email" required aurocomplete="disable">
            </div>
            <div class="mb-3">
                <label for="passwordInput">Password</label>
                <input type="password" id="passwordInput" name="password" required>
            </div>
            <div class="mb-3">
                <input type="checkbox" id="rememberCheck" name="remember">
                <label for="rememberCheck">Mantener sesion iniciada</lable>
            </div>
            <div class="mb-3">
                <label for="emailInput">name</label>
                <input type="text" id="nameInput" name="name" required aurocomplete="disable">
            </div>
            <div>
                <p>No tenes cuenta? <a href="/registrarse">Registrarse</a></p>
            <button type="submit">Registrarse</button>
        </form>
    </main>
</body>
</html>