<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Fileshare | Log in</title>
</head>
<body>
    <nav>
        <h1>Fileshare</h1>
    </nav>

    <form class="login-form" action="index.php" method="POST">
        <h2>LOG IN</h2>
        <p class="error-output"></p>
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" required>
        </div>
        <button class="btn" type="submit" name="submit">LOG IN</button>
        <p class="login-p">Not a member? &nbsp;<a class="sign-up-link" href="signup.php">Sign up</a></p>
        </p>
    </form>





    <footer class="attribution">
        <p>
          Challenge by 
          <a href="https://github.com/vanguardkras" target="_blank">Max</a>
        &nbsp;
          Coded by 
          <a href="https://www.frontendmentor.io/profile/Mick-2097">Mick</a>
        </p>
      </footer>
    <script src="script.js"></script>
</body>
</html>