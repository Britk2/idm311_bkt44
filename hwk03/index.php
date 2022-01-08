<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebVR: 360 Image | HW03</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- link to frame work https://pannellum.org/ -->
    <link rel="stylesheet" href="../css/pannellum.css">
    <script type="application/javascript" src="../js/pannellum.js"></script>
    <link rel="preload" as="image" href="../img/goldengate.jpg" />
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
    <div class="container">
        <h1>Homework 03</h1>

        <div id="vrWrap">
            <div id="vrCanvas"></div>
        </div>
        <script type="application/javascript">
            pannellum.viewer('vrCanvas',{
                "type": "equirectangular",
                "showControls": true,
                "panorama": "../img/fortpoint.jpg",
                "autoRotate": 0,
                "autoLoad": true,
                "compass":true,
                "title":"360 Image of Fort Point, San Francisco",
                "author":"Pixexid",
                "hotSpotDebug": true,
                "hotSpots": [{
                    "pitch": -2, // up and down
                    "yaw": 139, // left and right
                    "type": "info",
                    "text": "About Fort Point, San Francisco, CA",
                    "URL": "https://www.nationalparks.org/explore-parks/fort-point-national-historic-site"
                },{
                    "pitch": 67, // up and down
                    "yaw": -136, // left and right
                    "cssClass": "bridge-hotspot",
                    "createTooltipFunc": hotspot,
                    "createTooltipArgs": "This is the Golden Gate Bridge",
                },{
                    "pitch": 34, // up and down
                    "yaw": 59.8, // left and right
                    "cssClass": "sky-hotspot",
                    "createTooltipFunc": hotspotImg,
                    "createTooltipArgs": "../img/goldengate.jpg",
                    "clickHandlerFunc": displayImageFunc
                },{
                    "pitch": -2.2, // up and down
                    "yaw": -20, // left and right
                    "cssClass": "video-hotspot",
                    "createTooltipFunc": hotspotVideo,
                    "createTooltipArgs": "../vid/fortpointHD.mp4",
                }]
            });

            // Hotspot Tool Tip Creation

            function hotspot(hotSpotDiv, args){
                hotSpotDiv.classList.add('custom-tooltip');
                var span = document.createElement('span');
                span.innerHTML = args;
                hotSpotDiv.appendChild(span);
                span.style.width = span.scrollWidth + 'px';
                span.style.marginLeft = -(span.scrollWidth - hotSpotDiv.offsetWidth)/2+'px';
                span.style.marginTop = -span.scrollHeight - 12 + 'px';
            }
            
            // Hot Spot Display Img

            function displayImageFunc(hotSpotDiv, args){
                
            }

            function hotspotImg(hotSpotDiv, args){
                hotSpotDiv.classList.add('custom-tooltip-img');
                var span = document.createElement('span');
                span.innerHTML = "<img id=\"imgID\" src='" + args + "' alt='Image of the Golden Gate Bridge'>";
                hotSpotDiv.appendChild(span);
                span.style.width = span.scrollWidth + 'px';
                span.style.marginLeft = -(span.scrollWidth - hotSpotDiv.offsetWidth)/2+'px';
                span.style.marginTop = -span.scrollHeight - 12 + 'px';
            }

            function hotspotVideo(hotSpotDiv, args){
                hotSpotDiv.classList.add('custom-tooltip-video');
                var span = document.createElement('span');
                span.innerHTML = "<video id=\"vidID\" src='" + args + "' controls> </video>";
                hotSpotDiv.appendChild(span);
                span.style.width = span.scrollWidth + 'px';
                span.style.marginLeft = -(span.scrollWidth - hotSpotDiv.offsetWidth)/2+'px';
                span.style.marginTop = -span.scrollHeight/2 + 'px';

                let vidObj = document.querySelector('#vidID');
                vidObj.addEventListener('mouseout', (event) => {
                    vidObj.pause();
                })
            }
        </script>
    </div>
</body>
<?php include('../include/footer.php'); ?>
</html>