<h1 class="text-2xl mt-4"><?= $data['titulo'] ?></h1>

<section class="mt-4">

    <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">

        <div class="flex">

            <div class="px-3">
                <img src="<?= $data['imagem']; ?>" alt="Capa do livro <?= $data['titulo']; ?>">
            </div>

            <div class="space-y-1">
                <div class="text-xs italic"><?= $data['autor'] ?></div>
                <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliações)</div>
                <div class="text-sm mt-2"><?= $data['descricao'] ?></div>
            </div>

        </div>

    </div>

</section>