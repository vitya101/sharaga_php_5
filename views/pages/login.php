<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://cdn.tailwindcss.com"></script>
    <title>Вход</title>
</head>
<body class="h-screen flex items-center">
<button id="back" class="absolute bg-sky-700 top-10 left-10 px-7 py-3 text-white">Назад</button>
<form action="/controllers/login.controller.php" method="POST" class="m-auto grid gap-5 w-1/2 border p-10">
	<input name="login" class="border p-3" type="text" placeholder="Логин">
	<input name="pass" class="border p-3" type="password" placeholder="Пароль">
	<input class="bg-sky-400 p-3 text-white" type="submit" value="Войти">
</form>
<script>
    document.querySelector('#back').addEventListener("click", () => {
        window.history.back()
    })
</script>
</body>
</html>