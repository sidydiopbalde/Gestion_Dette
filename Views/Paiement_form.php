<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procéder au paiement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
   <?php  if(isset($det)) :?>
    <?php foreach($det as $de) : ?>
    <?php if($de->id == $id_dette) : ?>
        <?php
            $sidy = $de;
            break;
        ?>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>

    <div class="bg-white shadow-lg rounded-lg p-6 w-120">
        <h2 class="text-center font-bold text-xl mb-6">Procéder au paiement</h2>
        <div class="bg-gray-100 p-4 rounded-lg shadow-inner mb-4">
          
            <div class="flex justify-between mb-2">
                <span class="font-semibold">Montant:</span>
                <span class="bg-gray-300 px-2 py-1 rounded"><?=$de->montantDette ?? ''?></span>
            </div>
            <div class="flex justify-between mb-2">
                <span class="font-semibold">Mnt Versé:</span>
                <span class="bg-gray-300 px-2 py-1 rounded"><?=$de->montantVerse ?? ''?></span>
            </div>
            <div class="flex justify-between">
                <span class="font-semibold">Mnt Rest:</span>
                <span class="bg-gray-300 px-2 py-1 rounded"><?=$de->montantRestant ?? ''?></span>
            </div>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow-inner">
        <form action="payer" method="post">
            <div class="flex justify-between mb-2">
                <span class="font-semibold">Montant:</span>
                <input type="text" name="montant_paye" class="bg-white border border-gray-300 px-2 py-1 rounded focus:outline-none focus:border-gray-500" placeholder="enter somme">
                <p class="text-red-500"><?= $error ?? ''?></p>
            </div>
       

                <button name="ok" type="submit" class="w-full bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4 focus:outline-none focus:shadow-outline">
                    OK
                </button>
            </form>
        </div>
    </div>
</body>

</html>
