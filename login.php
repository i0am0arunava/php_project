<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>
        <form action="check.php" method="post" class="space-y-4">
            <div>
                <label for="email" class="block mb-1">Email:</label>
                <input type="email" id="email" name="email" class="w-full border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block mb-1">Password:</label>
                <input type="password" id="password" name="password" class="w-full border rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500">
            </div>
            <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300 w-full">Login</button>
        </form>
        <!-- Display flash messages -->
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<hr class="my-4 border-t">';
            echo '<div class="bg-red-300 text-red-900 p-4 rounded-lg">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']); // Clear the message after displaying
        }
        ?>
    </div>

</body>

</html>
