<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php') ?>
    <link rel="stylesheet" href="css/shop.css">
    <title>Brismed</title>
</head>

<body>
    <?php include('includes/navbar.php') ?>
    <main style="margin-top: 80px;">
        <div class="container">
            <ul id="medicine-list" class="collection">

            </ul>
        </div>

        <div class="center-align" style="margin: 50px auto;">
            <a href="#" class="btn btn-large waves-effect">Return</a>
        </div>
    </main>

    <template id="medicine-template">
        <li class="collection-item avatar">
            <i class="fas fa-pills circle teal"></i>
            <span class="medicine-name">Medicine Name</span>
            <span class="green-text price">$ 100</span>

            <p>
                <span class="blue-text company">Brismed Pharmaceuticals</span><br>
                <span class="mfg"></span><br>
                <span class="exp"></span>
            </p>
            <div class="secondary-content price-container">
                <input class="quantity-input" value="0" min="0" placeholder="Qty" type="number">
                <span class="max black-text"></span>
            </div>
        </li>
    </template>

    <?php include_once('includes/scripts.php') ?>
    <script src="js/return.js"></script>
</body>

</html>
