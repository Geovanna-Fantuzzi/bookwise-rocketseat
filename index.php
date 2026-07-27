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
                <li class="font-bold"><a href="/index.php" class="hover:underline">Explorar</a></li>
                <li class="font-bold"><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>

            <ul>
                <li class="font-bold"><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg font-serif space-y-6">

        <h1 class="text-xl font-bold py-6 mt-4">Lista de Livros</h1>

        <form action="" method="get" class="w-full flex space-x-2">
            <input type="text" name="pesquisa" id="pesquisa" class="border-2 border-stone-800 bg-stone-900 rounded-md text-sm focus:outline-none px-2 py-1 w-full" placeholder="Pesquise um livro...">
            <button type="submit" class="bg-stone-400 border-2 border-stone-800 rounded-md text-stone-950 p-1">🔎</button>
        </form>

        <section class="space-y-4">
            <!-- Card Livro-->
            <div class="w-1/3 p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">imagem</div>
                    <div>
                        <div class="font-semibold">Titulo</div>
                        <div class="text-xs italic">Autor</div>
                        <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliações)</div>
                    </div>

                </div>
                <div class="text-sm">Descrição</div>
            </div>
        </section>

    </main>

    <footer>

    </footer>
</body>

</html>