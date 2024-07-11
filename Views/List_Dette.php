
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <div class="text-xl font-semibold">Client: <span class="font-normal">Sidy Diop Balde</span></div>
            <div class="text-xl font-semibold">Numéro: <span class="font-normal">784316538</span></div>
        </div>
        <div class="mb-4">
            <label class="block text-lg font-semibold mb-2" for="status">Status:</label>
            <select id="status" class="block w-40 border-gray-300 rounded-md shadow-sm">
                <option>SOLDÉE</option>
                <option>NON SOLDÉE</option>
                <!-- Add other status options here -->
            </select>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-2 px-4">DATE</th>
                        <th class="py-2 px-4">MONTANT</th>
                        <th class="py-2 px-4">RESTANT</th>
                        <th class="py-2 px-4">PAIEMENT</th>
                        <th class="py-2 px-4">LIST-PAIEMENT</th>
                        <th class="py-2 px-4">ARTICLES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-200">
                        <td class="py-2 px-4">01/12/2024</td>
                        <td class="py-2 px-4">120000</td>
                        <td class="py-2 px-4">80000</td>
                        <td class="py-2 px-4 text-green-600">PAYER</td>
                        <td class="py-2 px-4 text-blue-600">LIST</td>
                        <td class="py-2 px-4 text-blue-600">VIEWS</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">01/12/2024</td>
                        <td class="py-2 px-4">120000</td>
                        <td class="py-2 px-4">65000</td>
                        <td class="py-2 px-4 text-green-600">PAYER</td>
                        <td class="py-2 px-4 text-blue-600">LIST</td>
                        <td class="py-2 px-4 text-blue-600">VIEWS</td>
                    </tr>
                    <tr class="bg-gray-200">
                        <td class="py-2 px-4">01/12/2024</td>
                        <td class="py-2 px-4">120000</td>
                        <td class="py-2 px-4">100000</td>
                        <td class="py-2 px-4 text-green-600">PAYER</td>
                        <td class="py-2 px-4 text-blue-600">LIST</td>
                        <td class="py-2 px-4 text-blue-600">VIEWS</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <div class="flex justify-center mt-6">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>
