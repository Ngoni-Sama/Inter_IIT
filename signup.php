<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php') ?>
    <link rel="stylesheet" href="css/login.css">
    <title>MedicoRx | Sign Up</title>
</head>

<body>
    <?php include('includes/navbar.php') ?>

    <main>
        <form class="login-card z-depth-1" method="POST">
            <h2>Sign Up</h2>
            <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input id="name" type="text" class="validate" autofocus name="name">
                <label for="name">Name</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">vpn_key</i>
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Password</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input id="phone" type="tel" class="validate" name="phone">
                <label for="phone">Phone Number</label>
            </div>
            <button class="btn submit-btn z-depth-0 waves-effect" name="submit">
                Submit
            </button>
        </form>
    </main>

    <?php include_once('includes/scripts.php') ?>
</body>

</html>