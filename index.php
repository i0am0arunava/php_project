<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<%= csrfToken %>">
    <title>lms</title>
    <style>
        body {
  margin: 0px;
  /* font-family: "Courier New", Courier, monospace; */
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
  width: 100vw;
  height: 100vw;
  /* background: linear-gradient(30deg, #f09478, #e980a8, #b67890, #a15b76); */
  background-color: mintcream;
  background-size: 400% 400%;
  animation: gradient 10s ease infinite;
  /* height: 100vh; */
}

.login-container {
  display: flex;
  justify-content: center;
}

.login-ask {
  background: #f5deb2;
  padding: 20px;
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
  font-size: 1.2rem;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin: 3px;
  text-align: justify;
}
    </style>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons8-books-doodle-favicons/Web/icons8-books-doodle-16.png">
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
  <a href="/">
    <h1 class="text-4xl font-bold text-gray-800 mb-2 mt-4 border-b-2 py-3" style="background: rgb(248, 248, 159);display: flex; align-items: center; justify-content: center;text-shadow: 2px 2px 4px rgba(2, 2, 2, 0.4);">
        📙 Learning Management System
    </h1>
</a>
    <div class="login-container">
      <div class="login-ask">
        <h1>✍ Welcome to our Learning Platform!!! </h1>
        <h4><i>Join our community of educators and learners to explore and enhance your skills!</i></h4>
        <p>🚀 New to our platform? <a href="signup.php">Sign-up here</a></p>
        <p>🚀 Already part of our community? <a href="login.php">Sign-in</a></p>
        <footer>
    <section>
      <h3 class="text-sm italic font-bold mt-5"> Built with php</h3>
    </section>
</footer>
      </div>
    </div>
  </body>
</html>