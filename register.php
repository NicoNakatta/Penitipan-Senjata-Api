<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
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
                <li><a href="login.php">Login</a></li>
            </ul>
                </div>
            </nav>
            </header>
        <main>
            <center>
            <div class="regist">
                    <form action="register-proses.php" method="POST">
                <h3 class="textregist">REGISTER</h3>
                    <input class="register" type="text" name="username" id="" placeholder="ID">
                    <input class="register" type="password" name="password" id="" placeholder="Password">
                    <input class="register" type="password" name="confpass" id="" placeholder="Konfirmasi Password">
                    <input class="register" type="email" name="email" id="" placeholder="Email">
                    <button class="submit" type="submit" name="register">REGISTER</button>
                </form>
            </div>
            </center>
        </main>
        <footer>
            &COPY; BULLET SAFE 2024
        </footer>
    </body>
</html>