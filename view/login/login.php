<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="public/img/favicon.png" sizes="any">
    <title>SMIEP</title>
    <link rel="stylesheet" type="text/css" href="public/styleslogin.css">
</head>

<body>
        <div class="header__superior">
            <div class="logo">
                <img src="../../img/favicon.png" alt="">
            </div>
            <div class="contenedor">
            <section class="titulito">
                <h1 class="title">S.M.I.E.P</h1>
                <h3 class="nameEmp">Software de Manejo de Inventarios para Empresas Pequeñas</h3>
                <h3 class="nameEmp2">Software de Manejo <br>de Inventarios <br>para Empresas Pequeñas</h3>
            </section>
</div>
        
        </div>
    <div class="contenedor1">
    <div class="content">
        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h2>Ingresar</h2>
            <form action="../../controller/loginCtrl.php" method="POST" id="forma" name="forma">
                <p>
                    <label>Email</label>
                    <input type="email" id="email" name="email" required />
                </p>
                <p>
                    <label>Nombre Usuario</label>
                    <input type="text" id="userName" name="userName" required />
                </p>
                <p>
                    <label>Password</label>
                    <input type="password" id="pass" name="pass" required />
                </p>
                <p>
					<button name="ingresar" id="btn" type="submit" value="validar" />
						Validar
					</button>
				</p>
            </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>© S.M.I.E.P | 2022 <a href="#">Acerca de S.M.I.E.P</a></p>
    </footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/js" src="public/js/login.js"></script>
</body>

</html>