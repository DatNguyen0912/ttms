<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .success-page{
            max-width:300px;
            display:block;
            margin: 0 auto;
            text-align: center;
            position: relative;
            top: 50%;
            transform: perspective(1px) translateY(50%)
        }
        .success-page img{
            max-width:62px;
            display: block;
            margin: 0 auto;
        }

        .btn-view-orders{
            display: block;
            border:1px solid #47c7c5;
            width:100px;
            margin: 0 auto;
            margin-top: 45px;
            padding: 10px;
            color:#fff;
            background-color:#47c7c5;
            text-decoration: none;
            margin-bottom: 20px;
        }
        h2{
            color:#47c7c5;
            margin-top: 25px;

        }
        a{
            color: #47c7c5;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="success-page">
    <img  src="http://share.ashiknesin.com/green-checkmark.png" class="center" alt="" />
    <h2>Payment Successful !</h2>
    <p>We have received your message, please wait for our approval</p>
    <a href="bill.php" class="btn-view-orders">View Orders</a>
    <a href="order.php">Continue Shopping</a>
    </div>
    </div>
</body>
</html>