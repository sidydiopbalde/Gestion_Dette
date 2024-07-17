
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Template</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="grid grid-cols-2 gap-6">
        <!-- Form Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <form action="Client_SuivieDette" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nom">Nom</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?= isset($old['nom']) ? htmlspecialchars($old['nom']) : '' ?>" id="nom" type="text" name="nom" >
                    <?php if (isset($errors['nom'])): ?>
                        <p class="text-red-500 text-xs italic"><?= $errors['nom'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="prenom">Prenom</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?= isset($old['prenom']) ? htmlspecialchars($old['prenom']) : '' ?>" id="prenom" type="text" name="prenom" >
                    <?php if (isset($errors['prenom'])): ?>
                        <p class="text-red-500 text-xs italic"><?= $errors['prenom'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?= isset($old['email']) ? htmlspecialchars($old['email']) : '' ?>" id="email" type="email" name="email" >
                    <?php if (isset($errors['email'])): ?>
                        <p class="text-red-500 text-xs italic"><?= $errors['email'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tel">Tel</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?= isset($old['tel']) ? htmlspecialchars($old['tel']) : '' ?>" id="tel" type="tel" name="tel" >
                    <?php if (isset($errors['tel'])): ?>
                        <p class="text-red-500 text-xs italic"><?= $errors['tel'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">Photo</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="photo" type="file" name="photo" >
                    <?php if (isset($errors['photo'])): ?>
                        <p class="text-red-500 text-xs italic"><?= $errors['photo'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
                        
        <!-- Details Section -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
        <form action="Client_SuivieDette" method="post">
     
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="search-tel">TEL</label>
                <div class="flex">
                    <input class="shadow appearance-none border rounded-l w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="search-tel" type="tel" name="phone"  placeholder="Enter Tel">
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-r focus:outline-none focus:shadow-outline">OK</button>
                </div>
                <p class="text-red-500"><?= $error ?? ''?></p>
            </div>
            </form>
            <div class="flex justify-between mb-4">
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Client</button>
                <form action="nouvelle" method="post">
                    <button name="nouvelle" value="<?=$clients->id ?? ''?>" type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Nouvelle</button>
                </form>
                <form action="dette" method="post">
                <button name="dette" value="<?=$clients->telephone ?? ''?>" type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Dette</button>
                </form>
            </div>
            <div class="mb-4">
                <div class="w-20 h-32 bg-gray-300 flex items-center justify-center rounded-full text-gray-700">
                <?php if ($clients ?? ''): ?>
                        <img src="http://www.sidy.diop.balde.sn:8010/IMG/<?= $clients->photo ?? '' ?>" alt="Client Photo" class="rounded-full">
                    <?php else: ?>
                        PHOTO
                    <?php endif; ?>
                    </div>
            </div>
          
            <?php if(isset($clients)):?>
            <div class="mb-4">
                <p><strong>Nom:</strong>  <?=  $clients->nom ?? ''?> </p>
                <p><strong>Prenom:</strong><?= $clients->prenom ?? ''?></p>
                <p><strong>Email:</strong>  <?= $clients->email ?? ''?> </p>
                <p><strong>Tel:</strong> <?= $clients->telephone ?? ''?></p>
            </div>
            <div class="mb-4">
                <p><strong>Total Dette:</strong> <?= $clients->totalDette ?? 0?> FCFA</p>
                <p><strong>Montant Versé:</strong><?= $clients->montantVerse ?? 0?> FCFA</p>
                <p><strong>Montant Restant:</strong><?= ($clients->totalDette ?? 0 - $clients->montantVerse ?? 0 ) ?? 0?> FCFA</p>
            </div>
            <?php endif;?>
        </div>

    </div>
    </div>
</body>
</html>

