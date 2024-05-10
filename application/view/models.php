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

    <link rel="stylesheet" href="../../../3dapp/assignment/css/bootstrap.css" />
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
    <link rel='stylesheet' type='text/css' href='../../../3dapp/assignment/css/x3dom.css'>
    </link>
</head>

<body>
    <?php include 'components/navbar.php'; ?>
    <!-- Navbar -->


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
                    </div>
                    <x3d id="wire" width="400px" height="400px">
                        <scene>
                            <Switch whichChoice="0" id='SceneSwitch'>
                                <transform id="modelTransform">
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                                        url="../assets/x3d/cokeloca.x3d"> </inline>
                                </transform>
                                <transform>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                                        url="assets/x3d/fanta.x3d"> </inline>
                                </transform>
                                <transform>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                                        url="/assets/x3d/sprite.x3d"> </inline>
                                </transform>
                            </Switch>
                        </scene>
                    </x3d>
                </div>

                <div class="col-md-6">
                    <a href="#" class="btn btn-outline-dark" onclick="toggleWireFrame()">Wire</a>
                    <a href="#" class="btn btn-outline-dark" onclick="rotateModel()">left</a>
                    <a href="#" class="btn btn-outline-dark" onclick="cameraFront()">cameraFront</a>
                </div>



            </div>
        </div>

    </div>


    <!-- footer -->
    <?php include 'components/footer.php'; ?>

    <script>
        function toggleWireFrame() {
            var x3dElement = document.getElementById('wire');

            x3dElement.runtime.togglePoints(true);
            x3dElement.runtime.togglePoints(true);
        }

        function animateModel() {
            if (document.getElementById('wire').getAttribute('enabled') != 'true')
                document.getElementById('wire').setAttribute('enabled', 'true');
            else
                document.getElementById('wire').setAttribute('enabled', 'false');
        }

        function rotateModel(direction) {
            var transform = document.getElementById('modelTransform');
            var currentRotation = transform.getAttribute('rotation');
            if (!currentRotation) {
                // Set a default rotation if none exists
                transform.setAttribute('rotation', '0 1 1 0');
                currentRotation = '0 1 1 0';
            }
        }

        function cameraFront() {
            document.getElementById('model__CameraFront').setAttribute('bind', 'true');
        }

        function cameraLeft() {
            document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="../../../3dapp/assignment/js/bootstrap.js"></script>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
</body>

</html>