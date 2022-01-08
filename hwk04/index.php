<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebVR: 3D Object | HW04</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
    <div class="container" id="container">
        <h1>Homework 04</h1>
        <figure>
            <div id="vrSpace"></div>
            <p class="caption">2 MB file</p>
        </figure>
        <h2 class="credit"><a href="https://skfb.ly/6G6yn" target="_blank">"RUBIK'S CUBE"</a></h2>
        <p class="credit"> by FromSi is licensed under <a href="http://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons Attribution.</a></p>

    </div>
    <!-- basic cube -->
        <!-- <script src="https://threejs.org/build/three.js"></script>
        <script src="../js/threeJS.js"></script> -->
    <script src="js/cube_gltf.js" type="module"></script>
</body>
<?php include('../include/footer.php'); ?>
</html>