<?php 
$database = json_decode(file_get_contents('database.json'), true);
$username_error = '';
$email_error = '';
$password_error = '';
$validation_errors = 0;
$new_user = [
    "username" => '',
    "email" => '',
    "password" => ''
];

if (isset($_POST['submit'])) { 
    // for ($i = 0; $i < count($database); $i++) {
    //     if ($_POST['username'] === $database[$i]['username']) {
    //         $validation_errors++;
    //         $username_error = 'That username is taken';
    //     } else {
    //         $new_user['username'] = $_POST['username'];
    //         $username_error = 'This logic stinks on ice!!';
    //     }
    // }
    foreach ($database as $value) {
        if ($_POST['username'] === $value['username']) {
            $validation_errors++;
            $username_error = 'That username is taken';
        } else {
            $new_user['username'] = $_POST['username'];
            $username_error = 'This logic stinks on ice!!';
        }
    }

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $new_user['email'] = $_POST['email'];
    } else {
            $validation_errors++;
            $email_error = 'Please enter a valid email';
    }

    if ($_POST['password'] === $_POST['repeat']) {
        $new_user['password'] = $_POST['password'];
    } else {
            $validation_errors++;
            $password_error = 'passwords must match';
    }
    
    // I gotta work on this

    // if ($validation_errors === 0) {
    //     file_put_contents('database.json', json_encode($new_user));
    // }
}
?>

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
    <title>Fileshare | Sign up</title>
</head>
<body>
    <nav>
        <h1>Fileshare</h1>
    </nav>

    <form class="signup-form" action="signup.php" method="POST">
        <h2>SIGN UP</h2>
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" placeholder="Select username" required>
            <?php echo "<p class=\"error\">" . $username_error . "</p>"; ?>
        </div>
        <div>
            <label for="email">Email : </label>
            <input type="text" name="email" placeholder="Enter email" required>
            <?php echo "<p class=\"error\">" . $email_error . "</p>"; ?>
        </div>
        <div>
            <label for="password">Password : </label>
            <input type="password" name="password" placeholder="Select Password" required>
            <br>
            <?php echo "<p class=\"error\">" . $password_error . "</p>"; ?>
            <br>
            <input type="password" name="repeat" placeholder="Repeat Password" required>
        </div>
        <button class="btn" type="submit" name="submit">SIGN UP</button>
        <p class="signup-p">Already a member? &nbsp;<a class="sign-up-link" href="index.php">Log in</a></p>
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