<h1 class="text-xl font-bold py-6 mt-4">Lista de Livros</h1>

<!-- Barra de pesquisa -->
<form action="" method="get" class="w-full flex space-x-2">
    <input type="text" name="pesquisa" id="pesquisa" class="border-2 border-stone-800 bg-stone-900 rounded-md text-sm focus:outline-none px-2 py-1 w-full" placeholder="Pesquise um livro...">
    <button type="submit" class="bg-stone-400 border-2 border-stone-800 rounded-md text-stone-950 p-1">🔎</button>
</form>

<!-- Lista de livros -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    <!-- Loop de livros -->
    <?php foreach ($livros as $value) : ?>
        <!-- Card Livro-->
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3 px-3">
                    <img src="<?= $value['imagem']; ?>" alt="Capa do livro <?= $value['titulo']; ?>">
                </div>
                <div>
                    <p class="p-1"><a href="/livro?id=<?= $value['id']; ?>" class="font-semibold hover:underline"><?= $value['titulo']; ?></a></p>
                    <p class="p-1 text-xs italic"><?= $value['autor']; ?></p>
                    <p class="p-1 text-xs italic">⭐⭐⭐⭐⭐(3 Avaliações)</p>
                </div>

            </div>
            <div class="p-3">
                <p class="text-sm line-clamp-3"><?= $value['descricao']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>

</section>