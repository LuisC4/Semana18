<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 120%">
          <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Criptomonedas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/caracteristicas') }}" >Caracteristicas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{ url('/view2') }}" >Link 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/view3') }}" >Link 3</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </header>

        <div class="container mt-3">
            <div class="p-5 mb-4 bg-light rounded-4">
                <div class="container-fluid py-5">
                  <h1 class="text-center display-5 fw-bold">Caracteristicas Criptomonedas</h1>
                  <img src="view1.jpg" class="img-fluid" alt="...">
                  <h2 class="mt-4">Como funcionan?</h2>
                  <p class="fs-5 text-justify">- Para poder hacer un intercambio, cada usuario debe tener una clave criptográfica y el sistema permite descontar la cantidad de bitcoin a quien compra y aumentar la cantidad de bitcoin de la cuenta de quien vende. <br>
                    - No tiene intermediarios al realizar un cobro o pago. Puede contar con varias cuentas y tiene un funcionamiento ininterrumpido las 24 horas. <br>
                    - Hay que tener en cuenta que la moneda y la clave asociada al código criptográfico deben ser verificadas para su ejecución
                </p>
                <h2 class="mt-5">Caracteristicas comunes?</h2>
                  <p class="fs-5 text-justify">- El único respaldo de esa moneda son los algoritmos tecnológicos los cuales, hasta el momento y aunque existe el riesgo, no han podido ser penetrados. <br>
                    - Estas criptomonedas no pueden ser intervenida ni las cuentas pueden ser congeladas. No es necesario revelar la identidad al hacer negocios. <br>
                    - Es posible encontrar una alta volatilidad de su precio por su carácter especulativo y su movimiento fluctúa por oferta y demanda.
                </p>

                  
                </div>
              </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>