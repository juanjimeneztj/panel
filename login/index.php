<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="../_assets/css/normalize.css">
        <link rel="stylesheet" href="../_assets/css/gsweb.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="../_assets/css/login.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <title>Login</title>

    </head>
    <body class="login">
        <div class="panel-login">
            <form name="LoginForm" method="post">
                <h2>Account Login</h2>
                <div class="form-group">
                    <input type="text" placeholder="Enter Your Username/Email" name="inf_username" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Password" name="inf_pwd" required>
                    <i class="fas fa-key"></i>
                </div>
                <div class="form-group">
                    <button type="submit" name="btnlogin">Log in</button>
                </div>
            </form>
        </div>
    </body>
</html>