<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Home</title>
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
                <a class="nav-link" href="{{ url('/caracteristicas') }}" >Caracteristicas</a>
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
      <div class="container py-4">

      <div class="p-5 mb-4 bg-light rounded-3 border-bottom">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Criptomoneda</h1>
          <p class="col-md-8 fs-4">Es dinero digital. Eso significa que no hay monedas ni billetes físicos — todo es en línea. Usted puede transferirle una  criptomoneda a alguien en internet sin un intermediario, como un banco.</p>
        </div>
      </div>
      
      <div class="videoyt bg-light rounded-3 border-bottom">
        <div class="container-fluid py-2">
          <h1 class="fw-bold text-center">Que son y como funcionan?</h1>
          <div class="ratio ratio-16x9 mr-3 ml-3">
            <iframe src="https://www.youtube.com/embed/6zL6ODDFCAs" title="Que son y como funcionan" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      
      <div class="topcripto mt-5">
        <h1 class="fw-bold text-center mb-4">Top 3 criptomonedas</h1>
      <div class="top1 row border-bottom mb-5">
        <div class="col-md-9">
          <h1 class="fw-bold">BitCoin</h1>
          <p class="fs-4 text-justify">Seguramente el Bitcoin sea la criptodivisa o criptomoneda de la que más has oído hablar. La razón de la fama de esta moneda digital es que es la pionera. En 2008 fue creada por varias personas bajo el nombre de Satoshi Nakamoto. Por supuesto, en su lanzamiento no tenía el valor que posee ahora y la mayoría tampoco podía llegar a pensar que alcanzaría estos datos.</p>
          <a class="btn btn-outline-success mb-2" href="https://www.coindesk.com/price/bitcoin" target="_blank">Mas informacion</a>
        </div>
        <div class="col-md-3">
          <img src="bitcoin.svg" class="img-fluid text-center mx-5" alt="">
        </div>
      </div>


      <div class="top2 row border-bottom mb-5" >
        <div class="col-md-9">
          <h1 class="fw-bold">Etherium</h1>
          <p class="fs-4 text-justify"> Podríamos representarla como un gran ordenador que está repartido en múltiples ordenadores a la vez y trabaja de forma simultánea. Esta red de computación permite ejecutar aplicaciones en esta red distribuida y las operaciones se alimentan con la divisa de la red, el ether (ETH).</p>
          <a class="btn btn-outline-success mb-2" href="https://www.coindesk.com/price/ethereum" target="_blank">Mas informacion</a>
        </div>
        <div class="col-md-3">
          <img src="ETH.svg" class="rounded-circle img-fluid text-center mx-5" alt="">
        </div>
      </div>


      <div class="top3 row border-bottom mb-5">
        <div class="col-md-9">
          <h1 class="fw-bold">Binance Coin</h1>
          <p class="fs-4 text-justify">es la criptomoneda oficial del criptoexchange Binance, cuyo nombre es un acrónimo compuesto de las palabras “binary” y “finance”.
            Esta moneda de Binance nació para soportar las transacciones dentro de la propia plataforma de Binance. En esta línea, los desarrolladores del Exchange tratan de aumentar la importancia de su token a través de proyectos relacionados con la Blockchain que puedan ser financiados por los propios usuarios con Binance coins.</p>
          <a class="btn btn-outline-success mb-2" href="https://coinmarketcap.com/currencies/binance-coin/" target="_blank">Mas informacion</a>
        </div>
        <div class="col-md-3">
          <img src="Binance_Coin.svg" class="rounded-circle img-fluid text-center mx-5" alt="">
        </div>
      </div>


      </div>

      <div class="integrantes text-center mt-5">
        <h1 class="fw-bold">Integrantes:</h1>
        <h3 class="display-5">Stephanie Paola Cruz Lazo</h3>
        <h3 class="display-5">Luis Jose Arias Reyes</h3>
        <h3 class="display-5">Jeremy Ernesto Aguilar Saravia</h3>
        <h3 class="display-5">Luis Ernesto Gomez Escobar</h3>
      </div>


    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>