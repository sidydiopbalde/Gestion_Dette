<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Paiement Par Dette</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white shadow-md w-100 rounded-lg p-4">
    <h2 class="text-center font-bold text-xl mb-4">LIST PAIEMENT PAR DETTE</h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-200 text-gray-600 text-left">DATE</th>
                <th class="py-2 px-4 bg-gray-200 text-gray-600 text-left">MONTANT(FCFA)</th>
            </tr>
        </thead>
        <tbody>
            <?php if($paiements):?>
            <?php foreach($paiements as $pai) :?>
            <tr class="bg-gray-100">
                <td class="py-2 px-4"><?=$pai->date ?? ''?></td>
                <td class="py-2 px-4"><?=$pai->montant_verse ?? ''?></td>
            </tr>
            <?php endforeach;?>
            <?php else: ?>
                    <tr>
                        <td colspan="6" class="py-2 px-4 text-center">Aucun paiement effectué.</td>
                    </tr>
               
            <?php endif;?>
        </tbody>
    </table>

    <!-- <div class="flex justify-between items-center mt-4">
        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Precedent
        </button>
        <span>Page 1 de 10</span>
        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Suivant
        </button>
    </div> -->
</div>

</body>
</html>
