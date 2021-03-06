<?php
require('db.php');
$login = 1;
if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $query = 'select * from users where email = "' . $email . '"';
    $result = mysqli_query($conn, $query);
    $str = '';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($password === $row['passkey']) {
                $str = "Successfully login.";
                $login = 1;
                setcookie("name",$row['name'],time()+(86400));
                setcookie("id",$row['id'],time()+86400);
                setcookie("login",$login,time() + (86400));
                header('Location: shop.php');
                exit();
            }
        }
    } else {
        $str =  "Incorrect Email or Password.";
        $login = 0;
    }

    if (empty($_POST['email'])) {
        $str = "Email is empty!";
        $login = 0;
    } else if (empty($_POST['password'])) {
        $str = "Password is empty!";
        $login = 0;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php') ?>
    <link rel="stylesheet" href="css/login.css">
    <title>Brismed | Login</title>
</head>

<body>
    <?php include('includes/navbar.php') ?>

    <main>
        <form class="login-card z-depth-1" action="<?php $_PHP_SELF ?>" method="POST">
            <h2>Login</h2>
            Use Your Registered Email
            <div class="input-field">
                <input id="email" type="email" class="validate" autofocus name="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
            </div>
            <?php if ($login == 0) { ?>
                <div class="red-text" style="margin-bottom: 10px;">
                    <?php echo $str ?>
                </div>
            <?php } ?>
            <button class="btn submit-btn z-depth-0 waves-effect" name="submit">
                Login
            </button>
            <br>
            <br>
            <span class="center">OR</span>
            <br>
            <br>
            <a href="signup.php" class="btn-flat teal-text waves-effect">
                Create new Account
            </a>
        </form>
    </main>

    <?php include_once('includes/scripts.php') ?>
</body>

</html>
