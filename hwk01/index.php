<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI-IM | HW01</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico">
</head>
<body>
<?php include('../include/header.php'); ?>
    <div class="container">
        <h1>Homework 01</h1>
        <div class="section">
            <a href="https://lookinar.com/gallery/" target="_blank"><button class="buttonCenter">Original Project</button></a>

            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FlBUR3k9lSojyXxtxrjMRoS%2FVR-Gallery%3Fnode-id%3D1%253A4%26scaling%3Dcontain%26page-id%3D0%253A1" allowfullscreen></iframe>

            <h2>WebGL/VR Headset</h2>
            <p class="center">Hover over images to view overlay.</p>
            <div class="webgl-img-sec">
                <div class="vrGallery1-L">
                    <img src="../img/VRGallery1-large.png" alt="VR Gallery Image Large 01">
                    <img src="../img/VRGallery1a-large.png" alt="VR Gallery Image Large 01" class="after">
                </div>
                <div class="vrGallery2-L">
                    <img src="../img/VRGallery2-large.png" alt="VR Gallery Image Large 02">
                    <img src="../img/VRGallery2a-large.png" alt="VR Gallery Image Large 02" class="after">
                </div>
            </div>

            <h2>Google Cardboard</h2>
            <p class="center">Hover over images to view overlay.</p>
            <div class="cardboard-img-sec">
                <div class="vrGallery1-S">
                    <img src="../img/VRGallery1-small.png" alt="VR Gallery Image Large 02">
                    <img src="../img/VRGallery1a-small.png" alt="VR Gallery Image Large 02" class="after">
                </div>
                <div class="vrGallery2-S">
                    <img src="../img/VRGallery2-small.png" alt="VR Gallery Image Large 02">
                    <img src="../img/VRGallery2a-small.png" alt="VR Gallery Image Large 02" class="after">
                </div>
            </div>
        </div>
    </div>

</body>
<?php include('../include/footer.php'); ?>
</html>