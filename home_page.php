<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Boxes</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional styles for the moving line */
        .moving-line-container {
            overflow: hidden;
            white-space: nowrap;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgb(236, 153, 0);
            padding: 10px;
            margin-bottom: 20px;
        }

        .moving-line {
            display: inline-block;
            color: #000000;
            animation: moveLine 10s linear infinite;
        }

        @keyframes moveLine {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Additional styles for the navbar */
        .navbar {
            background-color: #1a202c;
            padding: 1rem;
            width: 100%;
            position: absolute;
            top: 50px;
            /* Adjust the top position to give space for the moving line */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-logo img {
            max-height: 40px;
            /* Adjust the max-height as needed */
        }

        .navbar a {
            text-decoration: none;
            color: #ffffff;
            margin-right: 1rem;
            transition: color 0.3s ease-in-out;
        }

        .navbar a:hover {
            color: #58ed8c;
        }

        /* Additional styles for image box container */
        .image-box-container {
            display: flex;
            justify-content: center;
            /* Center the image boxes horizontally */
            align-items: center;
            flex-wrap: wrap;
            /* Allows boxes to wrap to the next line if the width is not enough */
            min-height: 100vh;
        }

        /* Additional styles for image box hover effect */
        .image-box {
            position: relative;
            cursor: pointer;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 300px;
            /* Adjusted box width */
            margin: 5px;
            /* Adjusted margin to reduce the gap */
        }

        .image-box:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="font-sans bg-white min-h-screen relative">

    <!-- Moving Line with Welcome Message -->
    <div class="moving-line-container text-lg">
        <div class="moving-line">
            Hello! Welcome to this awesome webpage. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </div>
    </div>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-logo">
            <img src="https://superblog.supercdn.cloud/site_cuid_clbaherx5941821ml5d9gt506f/images/logo-ooolab-1686735396309.jpg"
                alt="Logo">
        </div>
        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>

    <!-- Image Box Container -->
    <div class="flex items-center justify-center flex-wrap min-h-screen">

        <!-- Box for the first image -->
        <div class="image-box p-2 rounded-lg shadow-2xl relative"> <!-- Adjusted padding -->
            <img src="https://pathfinder-wpupload.s3.ap-south-1.amazonaws.com/wp-content/uploads/2020/11/18142220/courseimg3.png"
                alt="create course" > <!-- Adjusted width -->
                <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto optio nihil quod iste ducimus, neque vitae accusant
                                </p>
            <div class="flex items-center justify-center mt-2">
                <!-- Wrap the button in an <a> tag -->
                <a href=""
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded inline-block">Create</a>
            </div>
        </div>
        




        <!-- Box for the second image -->

        <div class="image-box p-2 rounded-lg shadow-2xl relative">
            <img src="https://pathfinder-wpupload.s3.ap-south-1.amazonaws.com/wp-content/uploads/2020/11/18142218/courseimg1.png"
                alt="create course" >
                <p class="mt-4 text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto optio nihil quod iste ducimus, neque vitae accusant
                                </p>
                <div class="flex items-center justify-center mt-2">
                    <!-- Wrap the button in an <a> tag -->
                    <a href=""
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded inline-block">Create</a>
                </div>
        </div>

        <!-- Box for the third image -->
        <div class="image-box p-2 rounded-lg shadow-2xl relative">
            <img src="https://pathfinder-wpupload.s3.ap-south-1.amazonaws.com/wp-content/uploads/2020/11/18142219/courseimg2.png"
                alt="Course Image 2" >
            <p class="mt-4 text-gray-700">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto optio nihil quod iste ducimus, neque vitae accusant
            </p>
            <div class="flex items-center justify-center mt-2">
                <!-- Wrap the button in an <a> tag -->
                <a href=""
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded inline-block">Create</a>
            </div>
        </div>

    </div>


</body>

</html>