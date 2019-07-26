<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Email Sent When Order Is Placed.</h1>

        Order ID: {{$order->id}} <br>
        Order Email: {{$order->billing_email}} <br>
        Order Billing Name: {{$order->billing_name}} <br>
        Order Total: €{{($order->total)}}
</body>
</html>