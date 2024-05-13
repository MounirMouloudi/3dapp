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
    <link rel='stylesheet' type='text/css' href='/~mm2467@sussex.ac.uk/3dapp/assignment/css/x3dom.css'>
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
                <x3d id="cokex3d" width="500px" height="500px">
                    <scene>
                        <transform>
                            <inline nameSpaceName="cokex3d" mapDEFToID="true" onclick="animateModel();"
                                url="/~mm2467@sussex.ac.uk/3dapp/assignment/assets/x3d/coke.x3d"> </inline>
                        </transform>
                    </scene>
                </x3d>
                <x3d id="cokezerox3d" width="400px" height="400px" class="hidden">
                    <scene>
                        <transform>
                            <inline nameSpaceName="cokezerox3d" mapDEFToID="true" onclick="animateModel();"
                                url="/~mm2467@sussex.ac.uk/3dapp/assignment/assets/x3d/colazero.x3d"> </inline>
                        </transform>
                    </scene>
                </x3d>
                <x3d id="spritex3d" width="400px" height="400px" class="hidden">
                    <scene>
                        <transform>
                            <inline nameSpaceName="spritex3d" mapDEFToID="true" onclick="animateModel();"
                                url="/~mm2467@sussex.ac.uk/3dapp/assignment/assets/x3d/sprite.x3d"> </inline>
                        </transform>
                    </scene>
                </x3d>

                <!-- Model Control Buttons -->
                <div class="mt-2">
                    <a href="#" class="btn btn-outline-dark" onclick="toggleWireFrame()">Wire</a>
                    <a href="#" class="btn btn-outline-dark" onclick="cameraFront()">cameraFront</a>
                    <a href="#" class="btn btn-outline-dark" onclick="cameraTop()">cameraTop</a>
                    <a href="#" class="btn btn-outline-dark" onclick="cameraBack()">cameraBack</a>
                    <a href="#" class="btn btn-outline-dark" onclick="rotate()">Animate</a>
                    <a href="#" class="btn btn-outline-dark" onclick="stopAnimation()">stop</a>
                    <a href="#" class="btn btn-outline-dark" onclick="headLight()">Head Light</a>
                    <a href="#" class="btn btn-outline-dark" onclick="omniLight()">Omni Light</a>
                    <a href="#" class="btn btn-outline-dark" onclick="backLight()">Back Light</a>
                    <a href="#" class="btn btn-outline-dark" onclick="turnAllOff()">Turn All Off</a>
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
        function toggleWireFrame() {
            var cokex3d = document.getElementById('cokex3d');
            var fantax3d = document.getElementById('cokezerox3d');
            var costax3d = document.getElementById('spritex3d');

            cokex3d.runtime.togglePoints(true);
            cokex3d.runtime.togglePoints(true);

            cokezerox3d.runtime.togglePoints(true);
            cokezerox3d.runtime.togglePoints(true);

            spritex3d.runtime.togglePoints(true);
            spritex3d.runtime.togglePoints(true);
        }

        function cameraFront() {
            document.getElementById('cokex3d__View_FrontCamera').setAttribute('bind', 'true');
            document.getElementById('cokezerox3d__View_FrontCamera').setAttribute('bind', 'true');
            document.getElementById('spritex3d__View_FrontCamera').setAttribute('bind', 'true');
        }
        function cameraTop() {
            document.getElementById('cokex3d__View_TopCamera').setAttribute('bind', 'true');
            document.getElementById('cokezerox3d__View_TopCamera').setAttribute('bind', 'true');
            document.getElementById('spritex3d__View_TopCamera').setAttribute('bind', 'true');
        }

        function cameraBack() {
            document.getElementById('cokex3d__View_BackCamera').setAttribute('bind', 'true');
            document.getElementById('cokezerox3d__View_BackCamera').setAttribute('bind', 'true');
            document.getElementById('spritex3d__View_BackCamera').setAttribute('bind', 'true');
        }

        function showCoke() {
            document.getElementById('cokex3d').classList.remove('hidden');
            document.getElementById('cokezerox3d').classList.add('hidden');
            document.getElementById('spritex3d').classList.add('hidden');

            document.getElementById('model-1').classList.remove('hidden');
            document.getElementById('model-2').classList.add('hidden');
            document.getElementById('model-3').classList.add('hidden');
            n = 1;
        }

        function showZero() {
            document.getElementById('cokezerox3d').classList.remove('hidden');
            document.getElementById('cokex3d').classList.add('hidden');
            document.getElementById('spritex3d').classList.add('hidden');

            document.getElementById('model-2').classList.remove('hidden');
            document.getElementById('model-1').classList.add('hidden');
            document.getElementById('model-3').classList.add('hidden');
            n = 2;
        }

        function showSprite() {
            document.getElementById('spritex3d').classList.remove('hidden');
            document.getElementById('cokex3d').classList.add('hidden');
            document.getElementById('cokezerox3d').classList.add('hidden');

            document.getElementById('model-3').classList.remove('hidden');
            document.getElementById('model-1').classList.add('hidden');
            document.getElementById('model-2').classList.add('hidden');
            n = 3;
        }

        var spinning = false;

        function rotate() {
            spinning = !spinning;
            document.getElementById('cokex3d__Timer').setAttribute('enabled', spinning.toString());
            document.getElementById('cokezerox3d__Timer').setAttribute('enabled', spinning.toString());
            document.getElementById('spritex3d__Timer').setAttribute('enabled', spinning.toString());

        }

        function stopAnimation() {
            spinning = false;
            document.getElementById('cokex3d__Timer').setAttribute('enabled', spinning.toString());
            document.getElementById('cokezerox3d__Timer').setAttribute('enabled', spinning.toString());
            document.getElementById('spritex3d__Timer').setAttribute('enabled', spinning.toString());
        }


        var lightOn1 = true;
        var lightOn2 = true;
        var lightOn3 = true;

        function omniLight() {

            document.getElementById('cokex3d__LIGHT_LIGHT_Light').setAttribute('on', lightOn1.toString());
            document.getElementById('cokezerox3d__LIGHT_LIGHT_Light').setAttribute('on', lightOn1.toString());
            document.getElementById('spritex3d__LIGHT_LIGHT_Light').setAttribute('on', lightOn1.toString());

        }

        function headLight() {
            lightOn2 = !lightOn2
            document.getElementById('cokex3d__LIGHT_LIGHT_Light_1').setAttribute('on', lightOn2.toString());
            document.getElementById('cokezerox3d__LIGHT_LIGHT_Light_1').setAttribute('on', lightOn2.toString());
            document.getElementById('spritex3d__LIGHT_LIGHT_Light_1').setAttribute('on', lightOn2.toString());

        }
        function backLight() {
            lightOn3 = !lightOn3
            document.getElementById('cokex3d__LIGHT_LIGHT_Light_2').setAttribute('on', lightOn3.toString());
            document.getElementById('cokezerox3d__LIGHT_LIGHT_Light_2').setAttribute('on', lightOn3.toString());
            document.getElementById('spritex3d__LIGHT_LIGHT_Light_2').setAttribute('on', lightOn3.toString());

        }


        function turnAllOff() {
            document.getElementById('cokex3d__LIGHT_LIGHT_Light').setAttribute('on', 'false');
            document.getElementById('cokex3d__LIGHT_LIGHT_Light_1').setAttribute('on', 'false');
            document.getElementById('cokex3d__LIGHT_LIGHT_Light_2').setAttribute('on', 'false');

            document.getElementById('cokezerox3d__LIGHT_LIGHT_Light').setAttribute('on', 'false');
            document.getElementById('cokezerox3d__LIGHT_LIGHT_Light_1').setAttribute('on', 'false');
            document.getElementById('cokezerox3d__LIGHT_LIGHT_Light_2').setAttribute('on', 'false');

            document.getElementById('spritex3d__LIGHT_LIGHT_Light').setAttribute('on', 'false');
            document.getElementById('spritex3d__LIGHT_LIGHT_Light_1').setAttribute('on', 'false');
            document.getElementById('spritex3d__LIGHT_LIGHT_Light_2').setAttribute('on', 'false');
        }


    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="/~mm2467@sussex.ac.uk/3dapp/assignment/js/bootstrap.js"></script>
    <script type='text/javascript' src='https://www.x3dom.org/x3dom/release/x3dom.js'></script>
</body>

</html>