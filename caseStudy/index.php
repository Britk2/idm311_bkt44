<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebVR: Rubik's Cube | Case Study</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
    <div class="container">
        <h1>Case Study</h1>
        <div class="contain">
        <img src="cube.png" alt="rubiks cube 3D model">
        <h3>Overview</h3>
            <p>I am Britney Tu, a student studying UX and UI at Drexel University. This project was about experimenting applying 3D media on the web using THREE.js. I ended up going with a 3D model that a user can interact with. Overall I believe this project was useful with applying 3D media onto the web.</p>
        <h3>Context & Challenge</h3>
            <p>I specifically wanted to work with a 3D model and animation as I have little to no experience with working with one; especially applying it to the web. The project exist to expand on my existing knowledge of web development and apply it to WebVR with THREE.js. Knowing the idea of what I wanted to create, I had to just figure out how the particular 3D model I was using can be applied to existing example code.</p>
            <h4>Code/Dev</h4>
                    <!-- <img src="menu_img.png" alt="original drop down"> -->
                    <p>First issue I had was getting the animation to work. After playing around with several different animation functions with three.js I was able to get my 3D model of a rubix cube to animate.
                    <pre><code>
                            var animation = mixer.clipAction(model.animations[0]);
                            animation.setLoop( THREE.LoopOnce );
                            animation.play().reset();</code></pre></p>
                    <p>This piece of code allowed the animation to play and stop after once loop. The <strong class="code"><code>.reset();</code></strong> allows for future calls of the animation to be played on command 1 time as noted with <strong class="code"><code>.setLoop(THREE.LoopOnce);</code></strong></p>
                    <p>Afterwards I had to figure-out how to attach these buttons to the functions to trigger the animation and rotation I wanted to include in the build</p>
                    <ul>
                        <li>Shuffle Button currently only plays animation ONCE, needs to be adjusted to do it unlimited clicks of the button.</li>
                        <li>Properly update status for SHUFFLE; check for when the animation end after 1 LOOP</li>
                    </ul>
                    <p>The two points above I had the most trouble in since I wasn't able to figure out how long each animation was within the 3-D model. Eventually though I was able to figure out how to address this issue by using <strong class="code"><code>setTimeout();</code></strong> function. I then timed how long the animation is and had a function code to reset information as needed if the animation was fully played out. If the user clicked on the button before the animation finished, the information would be reset and any other associated data</p>
        <h3>Solution</h3>
            <p id="final">This build allows users to interact with the 3D object in multiple ways. They can toggle the auto rotation as well as the animation of the cube doing a simple shuffling of the cube. Below the interface, users can change the background color of the VR space to any color they wish to with the color picker included</p>
            
            <video
                controls
                preload
                class="demo">
                    <source src="https://media.btudesign.com/video/rubiks_demo.mp4" type="video/mp4" />
            </video>
            <div class="links">
                <a href="https://idm331.btudesign.com/final/" target="_blank">Rubiks WebVR Build</a>
                <br>
            </div>
        <h3>Results</h3>
            <p>This project was a success as I was able to have the 3D model appear and be interactable. Features include orbit rotation, toggle auto rotation, play animation, and change the background of the model with the color picker. I learned a lot with this project as I got to work with javaScript and how that relates to THREE.js</p>
    </div>
    </div>
</body>
<?php include('../include/footer.php'); ?>
</html>