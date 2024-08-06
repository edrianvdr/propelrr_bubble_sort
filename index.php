<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propelrr Assessment</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-6">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Bubble Sort and Median Finder</h1>
        <form action="index.php" method="post" class="space-y-4">
            <div>
                <label for="numbers" class="block text-gray-700 text-sm font-medium mb-1">Enter numbers separated by commas:</label>
                <input type="text" id="numbers" name="numbers" required
                    class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <input type="submit" value="Calculate"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </form>

        <?php
        include 'Sorter.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numbers = $_POST['numbers'];
            $array = array_map('intval', explode(',', $numbers)); // Convert string to array of integers

            $sorter = new Sorter($array);
            $sortedArray = $sorter->getSortedArray();
            $median = $sorter->getMedian();
            $largest = $sorter->getLargest();

            echo "<h2 class='text-xl font-semibold text-gray-800 mt-4'>Results:</h2>";
            echo "<p class='text-gray-700'>Sorted Array: " . implode(', ', $sortedArray) . "</p>";
            echo "<p class='text-gray-700'>Median: $median</p>";
            echo "<p class='text-gray-700'>Largest Value: $largest</p>";
        }
        ?>
    </div>
</body>
</html>
