<div class="navbar-fixed">
    <nav class="teal">
        <div class="nav-wrapper">

            <a href="./" class="brand-logo" style="padding-left:20px; font-family: 'Damion', cursive;"> MedicoRx
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="./">Home</a></li>
                <li><a href="./shop.php">Order Medicines</a></li>
                <li><a href="order.php">Order History</a></li>
                <li><a href="mobile.html">About Us</a></li>
                <?php if (!isset($_COOKIE['login'])) : ?>
                    <li><a href="login.php" class="waves-effect black white-text btn-flat btn-small">Login</a></li>
                <?php else : ?>
                    <li><a href="logout.php" class="waves-effect black white-text btn-flat btn-small">Logout</a></li>
                <?php endif; ?>

            </ul>
        </div>

        <?php if (basename($_SERVER['PHP_SELF']) === 'shop.php') { ?>
            <div class="nav-content white">
                <form>
                    <div class="input-field">
                        <input placeholder="Search" id="search" type="search" style="padding: 5px 50px; border-bottom: 1px solid #9e9e9e;" value="" oninput ="showsuggestions()">
                        <label class="label-icon" for="search">
                            <i class="material-icons black-text">search</i>
                        </label>
                        <i class="material-icons" onclick="clear()">close</i>
                    </div>
                </form>
            </div>
        <?php } ?>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <?php if (isset($_COOKIE['login'])) {
        if ($_COOKIE['login'] == 1) { ?>
            <h6 style="background-color:aquamarine; padding-top : 15px; padding-bottom:20px; padding-left: 25px; ">Hello, <?php echo $_COOKIE['name'] ?></h6>
            <li><a href="./">Home</a></li>
            <li><a href="./shop.php">Order Medicines</a></li>
            <li><a href="order.php">Order History</a></li>
            <hr>
            <li><a href="">About Us</a></li>
            <li><a href="logout.php" class="waves-effect btn-flat teal white-text btn-small">Logout</a></li>
        <?php } else { ?>
            <h6 style="background-color:aquamarine; padding-top : 15px; padding-bottom:20px; padding-left: 25px; ">Hello, Guest</h6>
            <li><a href="./">Home</a></li>
            <li><a href="./shop.php">Order Medicines</a></li>
            <li><a href="order.php">Order History</a></li>
            <hr>
            <li><a href="">About Us</a></li>
            <li><a href="login.php" class="waves-effect btn-small">Login</a></li>
        <?php }
        } else { ?>
        <h6 style="background-color:aquamarine; padding-top : 15px; padding-bottom:20px; padding-left: 25px; ">Hello, Guest</h6>
        <li><a href="./">Home</a></li>
        <li><a href="./shop.php">Order Medicines</a></li>
        <li><a href="order.php">Order History</a></li>
        <hr>
        <li><a href="">About Us</a></li>
        <li><a href="login.php" class="waves-effect btn-flat teal white-text btn-small">Login</a></li>
    <?php }  ?>
</ul>