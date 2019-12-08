<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php') ?>
    <link rel="stylesheet" href="css/login.css">
    <title>MedicoRx | Login</title>
</head>

<body>
    <?php include('includes/navbar.php') ?>

    <main>
        <form class="login-card z-depth-1">
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
            <button class="btn z-depth-0 waves-effect">
                Submit
            </button>
        </form>
    </main>

    <?php include_once('includes/scripts.php') ?>
</body>

</html>