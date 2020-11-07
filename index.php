<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php') ?>
    <link rel="stylesheet" href="css/index.css">
    <title>Brismed</title>
</head>

<body>
    <?php include('includes/navbar.php') ?>
    <main>
        <div id="parallax" style="position: relative;">
            <div class="parallax__center">
                <!-- <img class="logo_bhilai" src="Webp.net-resizeimage.png" alt=""> -->
                <div class="white-text caption" style="margin: 0px auto">
                    <span class="flow-text" style="margin: 0px auto 3px auto;">Get medication delivered to wherever you are on the go!</span>
                    <h1 style="margin: 0px auto 3px auto; font-size: 3.3em; font-weight: bold;font-family: 'Damion', cursive;">Brismed</h1>
                </div>
            </div>
            <div style="position:absolute; bottom: 120px; width: 100%; text-align: center;">
                <!-- <a class="btn-large btn waves-effect" href="index.php" style="margin: 7.5px;"><i class="left material-icons">move_to_inbox</i>Make Complaint</a>; -->
                <a class="btn-large btn waves-effect" style="margin: 7.5px;" id="signinbutton2" href="login.php"><i class="fa fa-sign-in left" aria-hidden="true"></i>Sign in</a>
                <!-- <div style="width:100%;">
                    <p class="flow-text white-text signin" style="text-align:center !important;margin: 0px auto 3px auto; font-size:1.1rem;font-family: 'Caveat', cursive;">Sign in to make your complaint</p>
                </div> -->
            </div>
        </div>

        <div class="container">
            <!-- About Us stuff here -->
        </div>
    </main>

    <!-- TODO: add hero image credit
    Photographer:Alexey Sokolov https://photos.icons8.com/photographers/alexey-sokolov
    -->

    <?php include_once('includes/scripts.php') ?>
</body>

</html>
