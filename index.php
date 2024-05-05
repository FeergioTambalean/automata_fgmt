<?php

function isScientificNumber($word)
{
    // Regular expression to match scientific notation
    $pattern = '/^[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?$/';
    return preg_match($pattern, $word);
}

$word = '';

if (isset($_POST['submit'])) {
    $word = $_POST['word'];

    if (isScientificNumber($word)) {
        echo '<div id="alert-1" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">';
        echo '<svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>';
        echo '<span class="sr-only">Info</span>';
        echo '<div class="ml-3 text-sm font-medium">';
        echo 'The word \'' . $word . '\' is a valid scientific number.';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<div id="alert-1" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">';
        echo '<svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>';
        echo '<span class="sr-only">Info</span>';
        echo '<div class="ml-3 text-sm font-medium">';
        echo 'The word \'' . $word . '\' is not a valid scientific number.';
        echo '</div>';
        echo '</div>';
    }
}
?>
<html>
<head>
    <title>Scientific Number Acceptor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="bg-white">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Scientific Number Acceptor</h2>
            <form method="POST" action="" class="space-y-8">
                <div>
                    <label for="word" class="block mb-2 text-sm font-medium text-gray-900">Enter a number:</label>
                    <input type="text" id="word" name="word" class="block p-3 w-full text-sm text-gray-900 bg-stone-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Ex. 3.14e5 or -6.022e23" value="<?php echo $word; ?>" required>
                </div>
                <button type="submit" name="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-green-600 sm:w-fit hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300">Check</button>
            </form>
        </div>
    </section>
    <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-green-50 border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6">
    <span class="text-sm text-blacks-500 sm:text-center">Feergio Given Majesti Tambalean_221011060026
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-green-900 sm:mt-0">
        <li>
            <a href="https://wa.me/6285298728557" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>
</body>
</html>