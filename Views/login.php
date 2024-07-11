
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Espace Boutique - Connexion</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
    <div class="bg-white shadow-md rounded-lg w-full max-w-sm p-8">
      <h2 class="text-2xl font-bold text-center">Bienvenue sur Votre Space Boutique</h2>
      <form class="mt-4">
        <div class="mb-4">
          <label for="login" class="block text-gray-700">Login:</label>
          <input type="text" id="login" name="login" class="form-input w-full mt-1 border rounded-md shadow-sm">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700">Password:</label>
          <input type="password" id="password" name="password" class="form-input w-full mt-1 border rounded-md shadow-sm">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none">Se Connecter</button>
      </form>
    </div>
  </div>
</body>
</html>