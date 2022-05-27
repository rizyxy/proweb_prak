<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/cart.css">
        <link rel="script" href="/js/system.js">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <div class="navbar">
            <a id="logo">Chicco</a>
            <a href="./main">Home</a>
            <a id="active" href="./cart">Cart</a>
            <a href="#" id="logout">Logout</a>
        </div>
        <p id="status">Cart is Empty</p>
        <div class="button" onclick="navigateTo('./main')">
            <p>Shop Now</p>
        </div>
    </body>
</html>
<script>

    function navigateTo(url) {
        window.location = url
    }
    
</script>
