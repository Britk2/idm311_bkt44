<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebVR: Alpha Animation | HW05</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
<!-- <div class="loading" id="js-loader"><div class="loader"></div></div> -->
    <div class="container" id="container">
        <h1>Homework 05</h1>
        <h2>Alpha Build: Basic Animation</h2>
        <h3 id='buttonStatus'>Status: Normal</h3>
        <figure>
            <div id="vrSpace"></div>
            <p class="caption">2 MB file</p>
            <p class="caption">Use the 'ROTATE' button below to pause the auto-rotation of the cube!</p>
            <span class="anButtonG">
                <!-- <button class="anButton" id="shuffle">Shuffle</button> -->
                <button class="anButton" id="rotate">Rotate</button>
            </span>
        </figure>
        <h2 class="credit"><a href="https://skfb.ly/6G6yn" target="_blank">"RUBIK'S CUBE"</a></h2>
        <p class="credit"> by FromSi is licensed under <a href="http://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons Attribution.</a></p>

    </div>
    <script src="../js/main_gltf.js" type="module"></script>
</body>
<?php include('../include/footer.php'); ?>
</html>


<!-- The main Three.js file
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js'></script>

This brings in the ability to load custom 3D objects in the .gltf file format. Blender allows the ability to export to this format out the box
<script src='https://cdn.jsdelivr.net/gh/mrdoob/Three.js@r92/examples/js/loaders/GLTFLoader.js'></script> -->