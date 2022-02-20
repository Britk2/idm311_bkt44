<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI-IM | HW03</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
    <div class="container" id="container">
        <h1>Homework 03</h1>
        <div class="section">
        <p>To reset the experience, hit the "R" key.</p>
        <p>This file is about 36 MB</p>
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
      var loaderUrl = buildUrl + "/hw03-v1.loader.js";
      var config = {
        dataUrl: buildUrl + "/hw03-v1.data",
        frameworkUrl: buildUrl + "/hw03-v1.framework.js",
        codeUrl: buildUrl + "/hw03-v1.wasm",
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

    <h2>Interactions Planning To Add</h2>
    <h3>Interactive Objects</h3>
        <p>
            <ul>
                <li>Vending Machine</li>
                <li>Bus Stop Signs</li>
                <li>ATM Machine</li>
            </ul>
        </p>

    <h3>System Controls</h3>
        <p>
            <ul>
                <li><strong>(Overlay)</strong> When interacting with a vending machine, a pop up will show up. This will allow a user to select from a few options of "drinks" that is accompanied by a sound effect.</li>
                <li><strong>(Text Overlay)</strong> The bus stop signs when interacted with will change the lighting within the environment. Some text will show up in front of the camera to tell the player this has happened.</li>
                <li><strong>(World Space)</strong> When interacting with an ATM, a UI will show up in front of the ATM to increase and decrease a number.</li>
            </ul>
        </p>

</div>

</body>
<?php include('../include/footer.php'); ?>
</html>