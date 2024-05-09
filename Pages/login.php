<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylea.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>Login Page</title>
</head>   
<body>
    <div class="input">
        <h1>LOGIN</h1>
        <form action="logins.php" method="POST">
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <a href="index.php">
                <button type="submit" name="login" class="btn-input">Login</button>
            </a>
            <div class="bottom">
                <p>Belum punya akun?
                    <a href="regis.php">Register disini</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>