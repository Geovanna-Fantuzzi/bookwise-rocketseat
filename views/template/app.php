<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Wise</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-400">

    <!-- Cabeçalho -->
    <header class="bg-indigo-900 border-b-2 border-b-stone-900 shadow-lg shadow-gray-900 px-8">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-extrabold text-xl tracking-wider">Book Wise</div>
            <ul class="flex space-x-4">
                <li class="font-bold"><a href="/" class="hover:underline">Explorar</a></li>
                <li class="font-bold"><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>

            <ul>
                <li class="font-bold"><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Corpo da página -->
    <main class="mx-auto max-w-screen-lg font-serif space-y-6 px-8  mb-4 lg:px-0">

       <?php require "views/{$view}.view.php"; ?>

    </main>

    <footer>

    </footer>
</body>

</html>