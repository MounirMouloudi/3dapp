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

        .hidden {
            display: none;
        }

        .block {
            display: block;
        }

        .full-height {
            min-height: 60vh;
        }

        .center-items {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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
    <div class="container mt-4 full-height">
        <div class="row">
            <div class="col-md-6 center-items">
                <!-- Title and Buttons for Models -->
                <div class="hero-text">
                    <h1 class="display-4 text-danger font-weight-bold mb-2">
                        Coca Cola Great Britain
                    </h1>
                </div>

                <div class="mb-2 mt-4">
                    <div class="btn-group" role="group" aria-label="Model selection">
                        <button onclick="showCoke()" type="button" class="btn btn-primary">Coca Cola</button>
                        <button onclick="showZero()" type="button" class="btn btn-primary">Cola Diet</button>
                        <button onclick="showSprite()" type="button" class="btn btn-primary">Sprite</button>
                    </div>
                </div>



                <!-- 3D Models -->
                <x3d id="div1" width="500px" height="500px">
                    <scene>
                        <transform>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                                url="../assets/x3d/coke.x3d"> </inline>
                        </transform>
                    </scene>
                </x3d>
                <x3d id="div2" width="400px" height="400px" class="hidden">
                    <scene>
                        <transform>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                                url="../assets/x3d/colazero.x3d"> </inline>
                        </transform>
                    </scene>
                </x3d>
                <x3d id="div3" width="400px" height="400px" class="hidden">
                    <scene>
                        <transform>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                                url="../assets/x3d/sprite.x3d"> </inline>
                        </transform>
                    </scene>
                </x3d>

                <!-- Model Control Buttons -->
                <div class="mt-2">
                    <a href="#" class="btn btn-outline-dark" onclick="toggleWireFrame(1)">Wire</a>
                    <a href="#" class="btn btn-outline-dark" onclick="rotateModel()">left</a>
                    <a href="#" class="btn btn-outline-dark" onclick="cameraFront()">cameraFront</a>
                </div>
            </div>


            <div class="col-md-6 center-items">
                <?php for ($i = 0; $i < count($data); $i++) { ?>
                    <!-- Description -->
                    <div class="description mt-4 hidden" id="model-<?php echo $i + 1; ?>">
                        <h1><?php echo $data[$i]['x3dModelTitle'] ?></h1>
                        <h4><?php echo $data[$i]['modelSubtitle'] ?></h4>
                        <p>
                            <?php echo $data[$i]['modelDescription'] ?>
                        </p>
                    </div>
                <?php } ?>
            </div>



        </div>
    </div>




    <!-- footer -->
    <?php include 'components/footer.php'; ?>

    <script>
        window.onload = function () {
            document.getElementById('model-1').classList.remove('hidden');
        }
        let n = 1;
        function toggleWireFrame(number) {
            var x3dElement = document.getElementById('div' + n);

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

        function showCoke() {
            document.getElementById('div1').classList.remove('hidden');
            document.getElementById('div2').classList.add('hidden');
            document.getElementById('div3').classList.add('hidden');

            document.getElementById('model-1').classList.remove('hidden');
            document.getElementById('model-2').classList.add('hidden');
            document.getElementById('model-3').classList.add('hidden');
            n = 1;
        }

        function showZero() {
            document.getElementById('div2').classList.remove('hidden');
            document.getElementById('div1').classList.add('hidden');
            document.getElementById('div3').classList.add('hidden');

            document.getElementById('model-2').classList.remove('hidden');
            document.getElementById('model-1').classList.add('hidden');
            document.getElementById('model-3').classList.add('hidden');
            n = 2;
        }

        function showSprite() {
            document.getElementById('div3').classList.remove('hidden');
            document.getElementById('div1').classList.add('hidden');
            document.getElementById('div2').classList.add('hidden');

            document.getElementById('model-3').classList.remove('hidden');
            document.getElementById('model-1').classList.add('hidden');
            document.getElementById('model-2').classList.add('hidden');
            n = 3;
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

<!-- 
<x3d id="wire" width="400px" height="400px">
                        <scene>
                            <Switch whichChoice="0" id='SceneSwitch'>
                                <transform id="modelTransform1">
                                    <inline nameSpaceName="model1" mapDEFToID="true" onclick="animateModel();"
                                        url="../assets/x3d/coke.x3d"></inline>
                                </transform>
                                <transform id="modelTransform2">
                                    <inline nameSpaceName="model2" mapDEFToID="true" onclick="animateModel();"
                                        url="assets/x3d/colazero.x3d"></inline>
                                </transform>
                                <transform id="modelTransform3">
                                    <inline nameSpaceName="model3" mapDEFToID="true" onclick="animateModel();"
                                        url="/assets/x3d/sprite.x3d"></inline>
                                </transform>
                            </Switch>
                        </scene>
                    </x3d> -->