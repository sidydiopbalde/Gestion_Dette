<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Suivie Dette</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-bold">Client: <?= $nom ?? '' ?> <?= $prenom ?? '' ?></h1>
            <p class="text-lg text-red-500">Numéro: <?=  $tel ?? '' ?></p>
        </div>
        <div class="mb-4">
        <form method="POST" action="dette">
            <label for="filter">Filtrer les dettes:</label>
            <select id="filter" name="filter" onchange="this.form.submit()">
                <option value="non_soldes" <?= $filter == 'non_soldes' ? 'selected' : '' ?>>Non soldées</option>
                <option value="soldes" <?= $filter == 'soldes' ? 'selected' : '' ?>>Soldées</option>
            </select>
            <input type="hidden" name="dette" value="<?= $tel ?? '' ?>">
            <input type="hidden" name="page" id="page" value="<?= $page ?>">
        </form>
        </div>
        <table class="table-auto w-full mb-4">
            <thead>
                <tr class="bg-gray-300">
                    <th class="py-2 px-4">DATE</th>
                    <th class="py-2 px-4">MONTANT</th>
                    <th class="py-2 px-4">RESTANT</th>
                    <th class="py-2 px-4">PAIEMENT</th>
                    <th class="py-2 px-4">LIST-PAIEMENT</th>
                    <th class="py-2 px-4">ARTICLES</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($dette)):?>
                    <?php foreach ($dette as $det): ?>
                        <tr class="bg-gray-200">
                            <td class="py-2 px-4"><?= $det->date_dette ?? ''?></td>
                            <td class="py-2 px-4"><?= $det->montantDette ?? ''?></td>
                            <td class="py-2 px-4"><?= $det->montantRestant ?? ''?></td>
                            <form action="payer" method="post">
                                <td class="py-2 px-4 text-green-600"><button name="payer"  type="submit" value="<?=$det->id ?? ''?>" <?= $det->montantRestant == 0 ? 'disabled' : '' ?> class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">PAYER</button></td>
                            </form>
                            <form action="list_paiement" method="post">
                            <td class="py-2 px-4 text-blue-600"><button name="list_paiement" type="submit" value="<?=$det->id ?? ''?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">LIST</button></td>
                            </form>
                            <form action="product" method="post">
                            <td class="py-2 px-4 text-blue-600"><button name="product" type="submit" value="<?=$det->id ?? ''?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">VIEWS</button></td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="py-2 px-4 text-center">Aucune dette trouvée.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
     
        <!-- Pagination -->
        <!-- <div class="flex  items-center">
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Précédent</button>
            <span>Page 1 de 10</span>
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Suivant</button>
        </div> -->

        <div class="flex justify-between items-center">
            <?php if (($page > 1)): ?>
                <a href="?page=<?= $page - 1 ?? '' ?>" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Précédent</a>
            <?php else: ?>
                <span class="bg-gray-300 text-white font-bold py-2 px-4 rounded cursor-not-allowed">Précédent</span>
            <?php endif; ?>

            <span>Page <?= $page ?? '' ?> de <?= $totalPages ?? '' ?></span>

            <?php if ($page < $totalPages): ?>
                <a href="?page=<?= $page + 1 ?>" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Suivant</a>
            <?php else: ?>
                <span class="bg-gray-300 text-white font-bold py-2 px-4 rounded cursor-not-allowed">Suivant</span>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
