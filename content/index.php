<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varon Estudio</title>
    <link rel="icon" href="#">
    <!-- include general css -->
    <?php include '../include/include-css.php';?>

    <!-- link css -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<!-- Include Navbar-->
<?php include '../include/navbar.php';?>

<body>

    <div class="row row-fondo-varon">
        <div class="col-sm-8 offset-sm-2">
            <div class="container">


                <h1 class="titulo-varon">
                    Varon

                </h1>
                <h1 class="titulo-studio">
                    Studio
                </h1>
                <h3 class="thinkcreate">
                    think + create + act
                </h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div id="carrouselloco">
                <div class="slide-item">
                    <img src="../imagen/index/nasbi.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../imagen/index/nasbi.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../imagen/index/nasbi.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../imagen/index/nasbi.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../imagen/index/nasbi.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../imagen/index/nasbi.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../imagen/index/nasbi.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../imagen/index/nasbi.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="row contenedor-marcas">
        <div class="col-12 text-center">
            <img src="../imagen/index/pasarela.png" alt="">
        </div>
    </div>

    <div class="row row-fondo-varon-2">
        <div class="col-sm-10 offset-sm-2">
            <div class="container">

                <h2 class="titulo-adn">
                    ADN
                </h2>

                <h2 class="titulo-creemos">
                    Creemos en la <br>
                    <div class="rayablanca"></div> individualidad <br> de cada marca
                </h2>
            </div>
        </div>
        <div class="col-sm-4 offset-sm-6 mb-5">
            <div class="rayaverdemix"></div>
            <h3 class="actuamos">
                Actuamos en función de <br> tu marca,por eso decimos <br> think+create+act
            </h3>
        </div>

        <div class="w-100" style="
        height: 425px;
    "></div>

        <div class="col-2 offset-sm-2">
            <h2 class="titulo-nuestro">
                NUESTRO
            </h2>

            <h2 class="titulo-talento">
                TALENTO
            </h2>
        </div>
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="porfolio" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="Branding-tab" data-toggle="pill" href="#Branding" role="tab" aria-controls="Branding" aria-selected="true">BRANDING</a>
                <a class="nav-link" id="BTL-tab" data-toggle="pill" href="#BTL" role="tab" aria-controls="BTL" aria-selected="false">BTL</a>
                <a class="nav-link" id="Production-tab" data-toggle="pill" href="#Production" role="tab" aria-controls="Production" aria-selected="false">PRODUCTION</a>
                <a class="nav-link" id="UX/UI-tab" data-toggle="pill" href="#UX-UI" role="tab" aria-controls="UX/UI" aria-selected="false">UX / UI</a>
                <a class="nav-link" id="Web Site-tab" data-toggle="pill" href="#Web-Site" role="tab" aria-controls="Web Site" aria-selected="false">WEB SITE</a>
            </div>
        </div>
        <div class="col-6">
            <div class="tab-content" id="porfolio">
                <div class="tab-pane fade show active" id="Branding" role="tabpanel" aria-labelledby="Branding-tab">
                    1</div>
                <div class="tab-pane fade" id="BTL" role="tabpanel" aria-labelledby="BTL-tab">2</div>
                <div class="tab-pane fade" id="Production" role="tabpanel" aria-labelledby="Production-tab">3
                </div>
                <div class="tab-pane fade" id="UX-UI" role="tabpanel" aria-labelledby="UX/UI-tab">4</div>
                <div class="tab-pane fade" id="Web-Site" role="tabpanel" aria-labelledby="Web Site-tab">5</div>
            </div>
        </div>
    </div>

</body>

<?php include '../include/footer.php';?>

<!-- Include General JS -->
<?php include '../include/include-js.php';?>

</html>