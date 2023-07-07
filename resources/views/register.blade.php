<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <main class="container align-center p-5">
        <form action="/validarRegistro" method="post">
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
                <label for="userInput">Nombre</label>
                <input type="text" id="userInput" name="name" required aurocomplete="disable">
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </main>
</body>
</html>