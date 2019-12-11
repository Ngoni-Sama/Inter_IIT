<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('includes/head.php'); ?>
    <title>MedicoRx | My Orders</title>

    <style>
        .collection-item {
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
        <ul id="order-list" class="collection with-header">
            <li class="collection-header">
                <h4>My Orders</h4>
            </li>
        </ul>
    </div>

    <template id="list-item">
        <li class="collection-item waves-effect">
            <div style="flex-grow: 1;">
                <div class="grey-text">Order ID: <span class="order-id">29382361</span></div>
                Status: <span class="status">Delivered on Dec 11, 19</span>
            </div>

            <span class="green-text bold">₹<span class="amount">200</span></span><br>
        </li>
    </template>

    <?php include_once('includes/scripts.php'); ?>
    <script src="js/my-orders.js"></script>
</body>

</html>