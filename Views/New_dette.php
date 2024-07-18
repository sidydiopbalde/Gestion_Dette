<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Espace Boutique - Connexion</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
<div class="bg-white rounded-lg shadow-lg max-w-md w-full">
  <div class="bg-gray-200 p-4 rounded-t-lg">
    <h2 class="text-lg font-semibold">Client: maman Sokhna</h2>
    <p class="text-sm text-gray-600">Tel: 772559074</p>
  </div>
  
  <div class="p-6 space-y-4">
    <div class="flex items-center space-x-2">
      <form action="nouvelle" method="post">
        <label class="font-medium text-gray-700">REF:</label>
        <input type="text" value="" name="ref" class="bg-gray-600 text-white px-3 py-1 rounded">
        <button type="submit"  class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">OK</button>
        <div class="text-red-500"><?=$error_ref ?? ''?></div>
      </form>
    </div>
    
    <form action="nouvelle" method="post">
    <div class="flex items-center space-x-4">

       <div>
        <label class="block text-sm font-medium text-gray-700">libelle:</label>
        <input type="text" name="libelle" value="<?=$articles['libelle'] ?? ''?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Prix:</label>
        <input type="number" name="prix" value="<?=$articles['prix'] ?? ''?>" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Qte</label>
        <input type="text" value="" name="quantite" class="mt-1 block w-20 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <button class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 transition mt-6">OK</button>
    </div>
    <div class="text-red-500"><?=$error_qte ?? ''?></div>
  </form>
    
    <table class="max-w-full divide-y divide-gray-200">
      <thead class="bg-gray-600">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">libelle</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Prix</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Qte</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Mnt</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
      <?php if(!empty($panier)):?>
    
        <?php foreach($panier as $article):?>
          <tr>
            <td><?= $article['libelle'] ?? ''?></td>
            <td><?= $article['prix'] ?? '' ?></td>
            <td><?= $article['quantite'] ?? ''?></td>
            <td><?= $article['montant'] ?? ''?></td>
          </tr>
            <?php endforeach?>
        <?php endif?>
        <!-- Les lignes du tableau seront ajoutées dynamiquement ici -->
    
      </tbody>
    </table>
    
    <div class="flex justify-end items-center space-x-4">
      <span class="font-medium">Total:</span>
      <span class="text-xl font-bold text-red-600"><?=$montantTotalArticle ?? ''?></span>
    </div>
    
    <div class="flex justify-center">
      <button class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition transform hover:scale-105">
        <a href="nouvelle">

          ENREGISTRER
        </a>
      </button>
    </div>
  </div>
</div>
</div>
</body>
</html>