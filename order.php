<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php'); ?>
    <title>Brismed | My Orders</title>

    <style>
        .collection-item,
        .collection-header {
            display: flex;
            align-items: center;
        }

        .bold {
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php include_once('includes/navbar.php'); ?>

    <div class="container" style="max-width: 800px;">
        <ul id="list" class="collection with-header">
            <li class="collection-header">
                <div style="flex-grow: 1">
                    <h4>Order #<span class="order-id">723812</span></h4>
                    Status: <span class="status">Delivered on Dec 11, 19</span> <br> <br>
                    <a href="return.php" class="btn waves-effect teal white-text btn-flat">
                        Return Medicines
                    </a>
                </div>
                <div class="green-text bold">
                    ₹<span class="grand-total">20000</span>
                </div>
            </li>
        </ul>
    </div>

    <template id="list-item">
        <li class="collection-item avatar waves-effect">
            <div style="flex-grow: 1">

                <i class="fas fa-pills circle teal"></i>
                <div class="medicine-name">Medicine Name</div>
                <p>
                    <span class="green-text">
                        ₹ <span class="price">100</span>
                    </span>
                    &ThickSpace; Quantity:
                    <span class="quantity">10</span> <br>
                    <span class="blue-text company">ABC Pharmaceuticals</span><br>
                    Mfg: <span class="mfg">10/11/19</span><br>
                    Exp: <span class="exp">10/11/20</span>
                </p>
            </div>

            <div class="bold green-text">
                ₹<span class="net-price">1000</span>
            </div>
        </li>
    </template>

    <?php include_once('includes/scripts.php'); ?>
    <script src="js/order.js"></script>
</body>

</html>
