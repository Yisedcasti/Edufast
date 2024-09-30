<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/inicio2.css">
    <title>Login</title>
</head>
<body>
    <header class="navbar navbar-expand-lg bg-body-tertiary containernav shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2" href="#">
                <img src="../imagenes/logo.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                <span class="text-white">EDUFAST</span>
            </a>

            <!-- Boton Responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto fs-5">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Index</a>
                        </li>
                </div>
            </div>
        </div>
    </header>

    <main class="main-container">
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <img src="https://blogcomparasoftware-192fc.kxcdn.com/wp-content/uploads/2022/08/gestion-escolar-1024x640.jpg" alt="">
                
            </div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header><h1>INICIAR SESIÓN</h1></header>
                   <form action="validar.php" method="post">
                    <div class="input-field">
                    <input type="number" class="input" id="usuario" name="usuario" required>
                    <label for="usuario">Usuario</label>
                    </div>
                    <div class="input-field">
                    <input type="password" class="input" id="pass" name="pass" required>
                    <label for="pass">Password</label>
                    </div>
                    <div class="input-field">
                    <input type="submit" class="submit" value="Sign Up">
                    </div>
                    </form>

                </div>  
            </div>
        </div>
    </div>
</div>
</main>
</body>
</html>