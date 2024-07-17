<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debt's Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-4xl">
        <h2 class="text-2xl font-semibold text-center mb-4">Debt's Products</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-100">
                <thead>
                   
                    <tr class="bg-gray-300 text-gray-700">
                        <th class="py-3 px-4 text-left">libelle</th>
                        <th class="py-3 px-4 text-left">ref</th>
                        <th class="py-3 px-4 text-left">prix unitaire</th>
                        <th class="py-3 px-4 text-left">Quantite</th>
                        <th class="py-3 px-4 text-left">Montant</th>
                    </tr>
                  
                </thead>
                <tbody>
                <?php if($products):?>
                    <?php foreach ($products as $prod): ?>
                    <tr class="bg-gray-200">
                        <td class="py-2 px-4"><?=$prod->libelle ?? ''?></td>
                        <td class="py-2 px-4"><?=$prod->ref ?? ''?></td>
                        <td class="py-2 px-4"><?=$prod->prix_unitaire ?? ''?></td>
                        <td class="py-2 px-4"><?=$prod->quantite ?? ''?></td>
                        <td class="py-2 px-4"><?=$prod->total_mont_art ?? ''?></td>
                        
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="6" class="py-2 px-4 text-center">Aucun Article.</td>
                    </tr>
                <?php endif; ?>
                 
                </tbody>
            </table>
        </div>
        <div class="flex justify-between items-center mt-4">
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Precedent</button>
            <span>Page 1 de 10</span>
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Suivant</button>
        </div>
    </div>
</body>
</html>
