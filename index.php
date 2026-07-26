<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Wise</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-stone-950 text-stone-400">
    
    <header class="bg-indigo-900 border-b-2 border-b-stone-900 shadow-lg shadow-gray-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-extrabold text-xl tracking-wider">Book Wise</div>
            <ul class="flex space-x-4">
                <li class="font-bold"><a href="/index.php">Explorar</a></li>
                <li class="font-bold"><a href="/meus-livros.php">Meus Livros</a></li>
            </ul>

            <ul>
                <li class="font-bold"><a href="/login.php">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg font-serif">

        <h1 class="text-xl font-bold py-4">Lista de Livros</h1>

        <div>
            <form action="" method="get">
                <input type="text" name="pesquisa" id="pesquisa" class="border-2 border-stone-800 bg-stone-900 rounded-md" placeholder="Pesquise um livro...">
                <button type="submit" class="bg-stone-400 border-2 border-stone-800 rounded-md text-stone-950 p-1">Pesquisar</button>
            </form>
        </div>
        

    </main>
    
    <footer>

    </footer>
</body>
</html>