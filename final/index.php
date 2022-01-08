<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebVR: Final</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
<!-- <div class="loading" id="js-loader"><div class="loader"></div></div> -->
    <figure>
        <div id="vrSpace">
        </div>
        <figcaption class="caption">2 MB file <h2  id="finalTitle">Rubik's Cube</h2></figcaption>
    </figure>
    <span class="anButtonG">
            <p class="instruction">Use the 'AUTO ROTATE' button to toggle the auto-rotation of the cube!</p>
            <div class="statusButtons"><p id='buttonStatus'>Auto Rotation Status: Rotating</p> <button class="anButton" id="rotate">Stop Auto Rotate</button></div>
            <div class="statusButtons"><p id='buttonStatus2'>Shuffle Animation Status: Not Playing</p> <button class="anButton" id="shuffle">Shuffle</button></div>
            <p class="instruction">Use the 'SHUFFLE' button to play an animation of the cube shuffling!</p>
    </span>
    <div class="container" id="container">
        <div class="colorPicker">
            <p>Change the background color of the model below!</p>
            <div id="codePen"><a href="https://codepen.io/leemark/pen/lpEHr" target="_blank">Code Pen Code</a></div>
            <br>
            <fieldset>
                <label for="r">R</label>
                <input type="range" min="0" max="255" id="r" step="1" value="240">
                <output for="r" id="r_out">240</output>
            </fieldset>

            <fieldset>
                <label for="g">G</label>
                <input type="range" min="0" max="255" id="g" step="1" value="240">
                <output for="g" id="g_out">240</output>
            </fieldset>

            <fieldset>
                <label for="b">B</label>
                <input type="range" min="0" max="255" id="b" step="1" value="240">
                <output for="b" id="b_out">240</output>
            </fieldset>

            <output id="hex">#f0f0f0</output>
        </div>
        <h2 class="credit"><a href="https://skfb.ly/6G6yn" target="_blank">"RUBIK'S CUBE"</a></h2>
        <p class="credit"> by FromSi is licensed under <a href="http://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons Attribution.</a></p>

    </div>
    <script src="../js/js.js" type="module"></script>
</body>
<?php include('../include/footer.php'); ?>
</html>


<!-- The main Three.js file
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js'></script>

This brings in the ability to load custom 3D objects in the .gltf file format. Blender allows the ability to export to this format out the box
<script src='https://cdn.jsdelivr.net/gh/mrdoob/Three.js@r92/examples/js/loaders/GLTFLoader.js'></script> -->