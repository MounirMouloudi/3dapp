<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>My Coca Cola Brand</title>
    <style>
        .brand-h1 {
            font-family: "Lobster", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 48px;
            color: #c8102e;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .brand-h2 {
            font-family: "Prompt", sans-serif;
            font-weight: 300;
            font-style: normal;
            color: #c8102e;
            font-size: 32px;
            letter-spacing: 1px;
            margin-top: 18px;
        }

        .brand-h3 {
            font-family: "Maven Pro", sans-serif;
            font-optical-sizing: auto;
            font-size: 24px;
            color: #c8102e;
            font-weight: 700;
            text-transform: uppercase;
            margin-top: 20px;
            margin-left: 8px;
        }
    </style>

    <link rel="stylesheet" href="/~mm2467@sussex.ac.uk/3dapp/assignment/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500&family=Lobster&family=Open+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500&family=Lobster&family=Open+Sans:wght@300;400;500;600&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500&family=Lobster&family=Maven+Pro:wght@400..900&family=Open+Sans:wght@300;400;500;600&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <!-- No need to use the component in here to solve the problem of loading files -->
    <?php include 'components/navbar.php'; ?>

    <!-- Content -->
    <div class="">
        <!-- Hero section -->
        <div class="bg-body-tertiary hero-container p-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-text">
                        <h1 class="display-4 text-danger font-weight-bold mb-2">
                            Coca Cola
                            Great Britain
                        </h1>
                        <h2 class="h2 font-weight-semibold text-secondary mb-4">
                            Founded in 1886 Dr John S Pemberton
                        </h2>
                        <p class="lead">
                            The Coca Cola Company is the world's leading manufacturer, marketer and distributor of
                            non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="/~mm2467@sussex.ac.uk/3dapp/assignment/assets/images/hero.jpg"
                        alt="hero image">
                </div>
            </div>
        </div>

    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card mb-2">
                    <img class="card-img-top" src="/~mm2467@sussex.ac.uk/3dapp/assignment/assets/images/cocabrand.png"
                        alt="coca cola brand">
                    <div class="card-body">
                        <h5 class="card-title text-2xl font-bold "><?php echo $data[0]['modelSubtitle'] ?></h5>
                        <p class="card-text mb-4"><?php echo $data[0]['modelDescription'] ?></p>
                        <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste"
                            class="btn btn-danger">Visit Page</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-2">
                    <img class="card-img-top" src="/~mm2467@sussex.ac.uk/3dapp/assignment/assets/images/cokezero.webp"
                        alt="Fanta">
                    <div class="card-body">
                        <h5 class="card-title text-2xl font-bold "><?php echo $data[1]['modelSubtitle'] ?></h5>
                        <p class="card-text mb-4"><?php echo $data[1]['modelDescription'] ?></p>
                        <a href="https://www.coca-cola.com/gb/en/brands/fanta" class="btn btn-danger">Visit Page</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-2">
                    <img class="card-img-top"
                        src="/~mm2467@sussex.ac.uk/3dapp/assignment/assets/images/spritedisplay.png" alt="Sprite">
                    <div class="card-body">
                        <h5 class="card-title text-2xl font-bold "><?php echo $data[2]['modelSubtitle'] ?></h5>
                        <p class="card-text mb-4"><?php echo $data[2]['modelDescription'] ?></p>
                        <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-danger">Visit Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php include 'components/footer.php'; ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="/~mm2467@sussex.ac.uk/3dapp/assignment/js/bootstrap.css"></script>
</body>

</html>