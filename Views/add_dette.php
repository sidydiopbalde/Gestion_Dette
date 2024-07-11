
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Client</title>
    <!-- Ajoutez ici le lien vers le fichier CSS de Tailwind -->
    <!-- Exemple : -->
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> 
</head>
<body class="bg-gray-100">
    <div class="max-w-md mx-auto p-4 bg-white rounded shadow">
        <h1 class="text-2xl font-semibold mb-4">Formulaire Client</h1>
        <form>
            <div class="mb-4">
                <label for="clientName" class="block text-sm font-medium text-gray-700">Nom du client</label>
                <input type="text" id="clientName" name="clientName" class="mt-1 p-2 w-full border rounded">
            </div>
            <div class="mb-4">
                <label for="phoneNumber" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" class="mt-1 p-2 w-full border rounded">
            </div>
            <!-- Ajoutez d'autres champs ici (référence, prix, quantité, etc.) -->
            <div class="mb-4">
                <label for="itemReference" class="block text-sm font-medium text-gray-700">Référence de l'article</label>
                <input type="text" id="itemReference" name="itemReference" class="mt-1 p-2 w-full border rounded">
            </div>
            <!-- ... autres champs ... -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                ENREGISTRER
            </button>
        </form>
        <p class="mt-4 text-gray-600">Total : 40000fCFA</p>
    </div>
</body>
</html>
