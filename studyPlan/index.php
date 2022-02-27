<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Independent Study | Project Plan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
    <div class="container">
        <h1>Project Plan Journal: Unity 2D</h1>
        <h5>Independent Study</h5>
        <p>Images/GIF/Videos still need to be added.</p>
        <div class="contain">
            <h2>Learning Unity</h2>
                <h3>Week 1</h3>
                <ul>
                    <li>Unity Core Essentials Tutorials</li>
                    <ul>
                        <li>Used Unity’s Learn system to learn basic game development skills</li>
                        <li>Learning the Unity software expanding on what was learned through friends</li>
                        <a href="https://learn.unity.com/u/btudesign" target="_blank"><button>Unity Core Essential Tutorial</button></a>
                    </ul>
                </ul>
                <h3>Week 2</h3>
                <ul>
                    <li>Finished Unity Core Essentials Tutorials</li>
                    <ul>
                        <li>Added custom scripts to the pachinko challenge game to reset the game and move the object before dropping.</li>
                        <pre>
void Update()
{
    if (Input.GetKeyDown(KeyCode.LeftArrow))
    {
        Vector3 position = this.transform.position;
        position.x--;
        this.transform.position = position;
    }
    if (Input.GetKeyDown(KeyCode.RightArrow))
    {
        Vector3 position = this.transform.position;
        position.x++;
        this.transform.position = position;
    }
    if (Input.GetKeyDown(KeyCode.DownArrow))
    {
        gameObject.AddComponent(typeof(Rigidbody2D));
    }
}
                        </pre>
                        <a href="https://idm311.btudesign.com/test01/"><button>Pachinko Challenge WebGL Build</button></a>
                        <a href="https://learn.unity.com/pathway/unity-essentials" target="_blank"><button>Unity Learn Profile</button></a>
                    </ul>
                </ul>
                <h3>Week 3</h3>
                <ul>
                    <li>Unity UI Core Tutorials</li>
                    <ul>
                        <li>Added own dropdown function to tutorial scene based on what I learned.</li>
                        <li>Added changing light intensity (based on what was learned from volume control).</li>
                        <a href="https://learn.unity.com/tutorial/get-started-with-user-interfaces" target="_blank"><button>UI Tutorial</button></a>
                        <a href="https://idm311.btudesign.com/test/"><button>World Space UI</button></a>
                    </ul>
                    <li>Particle System</li>
                    <ul>
                        <li>Started to look into a particle system to help enhance the game's player experience for Nature's Grave (Senior Project).</li>
                        <a href="https://learn.unity.com/tutorial/introduction-to-particle-systems#" target="_blank"><button>Particle System Tutorial</button></a>
                    </ul>
                </ul>
                <h3>Week 4</h3>
                <ul>
                    <li>Finish Researching Particle System: Trials vs Particles</li>
                    <ul>
                        <li>Decided to go with particles as the trail had a weird stretching and texturing issue.</li>
                        <li>The particle has more control and was able to recreate the desired effect closer to the initial idea.</li>
                    </ul>
                    <li>Start Sprite Sheet Creation</li>
                    <ul>
                        <li>Each “asset” is in a tile to create a material for the particle system to go off of.</li>
                    </ul>
                </ul>
            <h2>Asset Creation</h2>
                <h3>Week 5</h3>
                <ul>
                    <li>Particle Asset Refinement</li>
                    <ul>
                        <li>Adjusted the color of the cursor asset to fit with the player's color palette.</li>
                        <li>Finalize the player's feet particles</li>
                    </ul>
                </ul>
                <h3>Week 6</h3>
                <ul>
                    <li>Play Testing</li>
                    <ul>
                        <li>Particles works as intended as well as People seem to like the particles as it adds to the game experience</li>
                    </ul>
                    <li>Refine Player UI Vitals to look cleaner and be more visually accessible</li>
                    <ul>
                        <li>Trying out a flash/particle on the fill shapes of the stamina/hp to draw the player's attention when a change has been made</li>
                    </ul>
                </ul>
                <h3>Week 7</h3>
                <ul>
                    <li>Boss HP: Decided against creating a boss UI</li>
                    <ul>
                        <li>Due to feedback.</li>
                        <li>Lack of solution that was impactful and enhances the game.</li>
                        <li>Designs that were made didn't look like it fits with the game.</li>
                        <li>Some players expressed excitement over the lack of a health bar.</li>
                        <ul>
                            <li>This allows the boss to feel more intimidating.</li>
                            <li>Allows having more intriguing boss animations or visual effects through its behavior to indicate the current status of the boss.</li>
                        </ul>
                    </ul>
                </ul>
                <h3>Week 8</h3>
                <ul>
                    <li>Start of creating and designing icons for tutorial sections of the game.</li>
                    <ul>
                        <li><strong>Left Click</strong> Attack</li>
                        <li><strong>Left Click HOLD</strong> Charge Attack</li>
                        <li><strong>Right Click</strong> Grapple</li>
                        <li><strong>Space</strong> Dash</li>
                        <li><strong>WASD/Arrow Keys</strong> Move</li>
                        <li><strong>E</strong> Use health pack</li>
                        <li><strong>ESC</strong> Pause game</li>
                    </ul>
                    <li>Designed a simple charge bar based on user feedback to showcase if the player character is using the health pack or charging up for the area of effect (AOE) attack.</li>
                </ul>
                <h3>Week 9</h3>
                <ul>
                    <li>Created UI Tutorial Icons</li>
                </ul>
        </div>
    </div>
</body>
<?php include('../include/footer.php'); ?>
</html>