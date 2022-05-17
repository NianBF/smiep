<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="public/img/favicon.png" sizes="any">
    <title>SMIEP</title>
    <link rel="stylesheet" type="text/css" href="public/stylesLogin.css">
</head>

<body>
    <div class="headerSmiep">
        <header>
            <figure class="icon"><img src="public/img/favicon.png" alt="Logo SMIEP" width="200rem"></figure>
            <section>
                <h1 class="title">S.M.I.E.P</h1>
                <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
            </section>
        </header>
    </div>
    <div class="contenedor">
        <div class="login">
            <h2>Login</h2>
            <form action="../../controller/loginCtrl.php" method="POST" id="forma" name="forma">
                <div class="elemento">
                    <label for="usuario">Email</label>
                    <input type="txt" id="email" name="email" required />
                </div>
                <div class="elemento">
                    <label for="userName">Nombre de Usuario</label>
                    <input type="txt" id="userName" name="userName" required />
                </div>
                <div class="elemento">
                    <label for="password">Password</label>
                    <input type="password" id="pass" name="pass" required />
                </div>
                <div class="elemento">
                    <input name="ingresar" id="btn" type="submit" value="validar" />
                </div>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>© S.M.I.E.P | 2022 <a href="#">Acerca de S.M.I.E.P</a></p>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/js" src="public/js/login.js"></script>
</body>

</html>