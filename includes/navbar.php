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
                <li><a href="collapsible.html">Reminder</a></li>
                <li><a href="mobile.html">About Us</a></li>
                <li><a href="mobile.html">Login</a></li>
            </ul>
        </div>
        <?php if(basename($_SERVER['PHP_SELF'])==='shop.php'){?>
            <div class="nav-content">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" style="padding: 5px 50px;" required>
                        <label class="label-icon" for="search">
                            <i class="material-icons">search</i>
                        </label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        <?php }
        ?>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <li><a href="./">Home</a></li>
    <li><a href="./shop.php">Order Medicines</a></li>
    <li><a href="">Reminder</a></li>
    <li><a href="">About Us</a></li>
</ul>