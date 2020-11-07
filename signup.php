<?php
    $login = 1;
    if(isset($_POST['submit'])){
        require('db.php');
        // echo $_POST['phone'];
        if(empty($_POST['name'])){
            $str = "Name is empty!!";
            $login = 0;
        }
        else if(empty($_POST['phone'])){
            $str = "Phone number is empty!!";
            $login = 0;
        }
        else if(empty($_POST['email'])){
            $str = "Email is empty!!";
            $login = 0;
        }
        else if(empty($_POST['password'])){
            $str = "Password is empty!!";
            $login = 0;
        }
        else{
            $email = trim($_POST['email']);
            $query = 'select * from users where email = "' . $email . '"';
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0){
                $str = "Email already in use!!";
                $login = 0;
            }
            else{
                $query = "insert into users (name,phone_number,email,passkey) values('".trim($_POST['name'])."',".trim($_POST['phone']).",'".trim($_POST['email'])."','".trim($_POST['password'])."');";
                $result = mysqli_query($conn, $query);
                $login = 1;
                setcookie("name",$row['name'],time()+(86400));
                setcookie("id",$row['id'],time()+86400);
                setcookie("login",$login,time() + (86400));
                header('Location: shop.php');
                exit();
            }
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
    <title>Brismed | Sign Up</title>
</head>

<body>
    <?php include('includes/navbar.php') ?>

    <main>
        <form class="login-card z-depth-1" method="POST" action= "<?php $PHP_SELF ?>" >
            <h2>Sign Up</h2>
            <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input id="name" type="text" class="validate" autofocus name="name">
                <label for="name">Name</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input id="phone" type="tel" class="validate" name="phone">
                <label for="phone">Phone Number</label>
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
            <?php if ($login == 0) { ?>
                <div class="red-text" style="margin-bottom: 10px;">
                    <?php echo $str ?>
                </div>
            <?php } ?>
            <button class="btn submit-btn z-depth-0 waves-effect" name="submit">
                Submit
            </button>
        </form>
    </main>

    <?php include_once('includes/scripts.php') ?>
</body>

</html>
