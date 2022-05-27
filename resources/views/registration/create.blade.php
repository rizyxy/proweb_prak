 <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
        <title>Document</title>
    </head> 
    <body>
        <div class="wrapper">
            <div class="left">
                <div class="left-element">
                    <h3 id="Logo">Chicco Swalayan</h3>
                    <div class="Intro">
                        <h2>Hello! Welcome to Chicco Swalayan</h2>
                        <p>Enjoy our huge collection of items</p>
                        <div class="SignUp" onclick="navigateTo('./')">
                            <p><b>Sign In</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="right-element">
                    <h2>Customer Sign In</h2>
                    <form action="/register" method="POST">
                        <div>
                            <input type="text" class="Username" name="username" placeholder="Username">
                        </div>
                        <div>
                            <input type="email" class="Email" name="email" placeholder="Email">
                        </div>
                        <div>
                            <input type="password" class="Password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="SignIn">
                            <p><b>Sign Up</b></p>
                        </button> 
                    <form>
                    <div id="adm-sign-in">
                        <a href="#">Admin Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>

function navigateTo(url) {
    window.location = url
}

</script>
