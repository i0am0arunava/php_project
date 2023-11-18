<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional CSS for box shadow and input style */
        .custom-box {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-input {
            border: 1px solid #e5e7eb;
        }
    </style>
</head>

<body class="bg-gray-100">

    <div class="max-w-md mx-auto my-10 bg-white p-8 rounded shadow-md custom-box">
    <img src="https://superblog.supercdn.cloud/site_cuid_clbaherx5941821ml5d9gt506f/images/logo-ooolab-1686735396309.jpg"
                alt="Logo">
        <form action="add_user.php" method="post" class="space-y-4">
            <div>
                <label for="fname" class="block mb-1">First Name:</label>
                <input type="text" id="fname" name="fname" class="w-full rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500 custom-input">
            </div>
            <div>
                <label for="lname" class="block mb-1">Last Name:</label>
                <input type="text" id="lname" name="lname" class="w-full rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500 custom-input">
            </div>
            <div>
                <label for="email" class="block mb-1">Email ID:</label>
                <input type="email" id="email" name="email" class="w-full rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500 custom-input">
            </div>
            <div>
                <label for="password" class="block mb-1">Password:</label>
                <input type="password" id="password" name="password" class="w-full rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500 custom-input">
            </div>
            <button class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Submit</button>
        </form>
        <a href="login.php" class="block text-center mt-4 text-blue-500 hover:underline">Login</a>
        <hr class="my-6">
        <!-- Other forms or links -->
    </div>

</body>

</html>
