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
    <h2 class="text-lg font-semibold">Client: Sidy Diop Balde</h2>
    <p class="text-sm text-gray-600">Tel: +221 784316538</p>
  </div>
  
  <div class="p-6 space-y-4">
    <div class="flex items-center space-x-2">
      <label class="font-medium text-gray-700">REF:</label>
      <input type="text" value="ART2F" class="bg-gray-600 text-white px-3 py-1 rounded">
      <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">OK</button>
    </div>
    
    <div class="flex items-center space-x-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">llibelle:</label>
        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Prix:</label>
        <input type="number" value="2000" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Qte</label>
        <input type="number" value="4" class="mt-1 block w-20 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>
      <button class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 transition mt-6">OK</button>
    </div>
    
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-600">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">libelle</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Prix</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Qte</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Mnt</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <!-- Les lignes du tableau seront ajoutées dynamiquement ici -->
      </tbody>
    </table>
    
    <div class="flex justify-end items-center space-x-4">
      <span class="font-medium">Total:</span>
      <span class="text-xl font-bold text-red-600">40000FCFA</span>
    </div>
    
    <div class="flex justify-center">
      <button class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition transform hover:scale-105">
        ENREGISTRER
      </button>
    </div>
  </div>
</div>
</div>
</body>
</html>