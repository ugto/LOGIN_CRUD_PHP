<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Link Bootstrap5-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--Link login.css-->
  <link rel="stylesheet" href="style/registro.css">
  <title>El Rosario</title>
</head>
<body>
  <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Registro de Usuarios</h5>
              <form action="srv/registrar.php" method="post">

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required autofocus>
                  <label for="nombre">Nombre</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                  <label for="email">Email</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" require>
                  <label for="password">Password</label>
                </div>

                  <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
                </div>

                <a class="d-block text-center mt-2 small" href="index.php">Ya estas Registrado? Ingresa</a>

                <hr class="my-4">

                

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   <!--link Script Bootstrap5-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>