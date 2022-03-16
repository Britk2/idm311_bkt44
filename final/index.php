<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI-IM: Final</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
<div class="container" id="container">
        <h1>Final</h1>
        <div class="section">
        <p>To reset the experience, hit the "R" key.</p>
        <p>This file is about 49 MB</p>
        </div>
<div id="unity-container" class="unity-desktop">
      <canvas id="unity-canvas" width=960 height=600></canvas>
      <div id="unity-loading-bar">
        <div id="unity-logo"></div>
        <div id="unity-progress-bar-empty">
          <div id="unity-progress-bar-full"></div>
        </div>
      </div>
      <div id="unity-mobile-warning">
        WebGL builds are not supported on mobile devices.
      </div>
      <div id="unity-footer">
        <div id="unity-webgl-logo"></div>
        <div id="unity-fullscreen-button"></div>
        <div id="unity-build-title">IDM311-Final-GasStation</div>
      </div>
    </div>
    <script>
      var buildUrl = "Build";
      var loaderUrl = buildUrl + "/beta-v2.loader.js";
      var config = {
        dataUrl: buildUrl + "/beta-v2.data",
        frameworkUrl: buildUrl + "/beta-v2.framework.js",
        codeUrl: buildUrl + "/beta-v2.wasm",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "BTuDesign",
        productName: "IDM311-Final-GasStation",
        productVersion: "0.1",
      };

      var container = document.querySelector("#unity-container");
      var canvas = document.querySelector("#unity-canvas");
      var loadingBar = document.querySelector("#unity-loading-bar");
      var progressBarFull = document.querySelector("#unity-progress-bar-full");
      var fullscreenButton = document.querySelector("#unity-fullscreen-button");
      var mobileWarning = document.querySelector("#unity-mobile-warning");

      // By default Unity keeps WebGL canvas render target size matched with
      // the DOM size of the canvas element (scaled by window.devicePixelRatio)
      // Set this to false if you want to decouple this synchronization from
      // happening inside the engine, and you would instead like to size up
      // the canvas DOM size and WebGL render target sizes yourself.
      // config.matchWebGLToCanvasSize = false;

      if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        container.className = "unity-mobile";
        // Avoid draining fillrate performance on mobile devices,
        // and default/override low DPI mode on mobile browsers.
        config.devicePixelRatio = 1;
        mobileWarning.style.display = "block";
        setTimeout(() => {
          mobileWarning.style.display = "none";
        }, 5000);
      } else {
        canvas.style.width = "960px";
        canvas.style.height = "600px";
      }
      loadingBar.style.display = "block";

      var script = document.createElement("script");
      script.src = loaderUrl;
      script.onload = () => {
        createUnityInstance(canvas, config, (progress) => {
          progressBarFull.style.width = 100 * progress + "%";
        }).then((unityInstance) => {
          loadingBar.style.display = "none";
          fullscreenButton.onclick = () => {
            unityInstance.SetFullscreen(1);
          };
        }).catch((message) => {
          alert(message);
        });
      };
      document.body.appendChild(script);
    </script>
    <h2>Interactable Objects</h2>
    <p>
        <ul>
          <li>Player Movement
                <ul>
                <li>WASD or arrow keys to move</li>
                <li>Right-click and drag to rotate camera</li>
                </ul>
            </li>
            <li>Bus Stop
                <ul>
                <li>Select one of three choices to change time of day.</li>
                <li>Lighting changes based on time of day selected</li>
                <li>Different music plays based on choice</li>
                </ul>
            </li>
            <li>Vending Machine
                <ul>
                <li>Interacting with the vending machine plays various SFX</li>
                <li>Cash inserting, items dropping, and coin change.</li>
                </ul>
            </li>
            <li>ATM
                <ul>
                <li>Interact with the ATM to adjust the account balance.</li>
                <li>SFX plays when pressing different buttons on the UI</li>
                <li>Balance value is saved throughout the experience until page is refreshed or "R" is used.</li>
                </ul>
            </li>
            <a href="../caseStudy"><button>Case Study</button></a>
        </ul>
    </p>

</div>
</body>
<?php include('../include/footer.php'); ?>
</html>


<!-- The main Three.js file
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js'></script>

This brings in the ability to load custom 3D objects in the .gltf file format. Blender allows the ability to export to this format out the box
<script src='https://cdn.jsdelivr.net/gh/mrdoob/Three.js@r92/examples/js/loaders/GLTFLoader.js'></script> -->