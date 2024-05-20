<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <nav>
                <div class="logo"><img src="assets/logo.jpg" alt=""/></div>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="#">Informasi Layanan</a></li>
                <li><a href="#">Kontak</a></li>
                <li><a class="active" href="login.php">Login</a></li>
            </ul>
                </div>
            </nav>
            </header>
        <main>
            <center>
            <div class="login">
                <form action="login-proses.php" method="POST">
                <h3 class="textlogin">LOGIN</h3>
                    <input class="input" type="text" name="username" id="" placeholder="ID">
                    <input class="input" type="password" name="password" id="" placeholder="Password">
                    <button class="submit"type="submit" name="login" value="login">LOGIN</button>
                </form>
                <div class=reg>
                    Tidak punya akun? <br><a href="register.php">register sekarang</a>
                </div>
            </div>
        </center>
        </main>
        <footer>
            &COPY; BULLET SAFE 2024
        </footer>
    </body>
</html>