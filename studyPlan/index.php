<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Independent Study | Project Plan</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico">
</head>
<body>
<?php include('../include/header.php'); ?>
    <div class="container" id="top">
        <h1>Project Plan Journal: Unity 2D</h1>
        <h5>Independent Study</h5>
        <!-- <p>Images/GIF/Videos still need to be added.</p> -->
        <div class="contain">
            <h2>Learning Unity</h2>
                <h3>Week 1</h3>
                <ul>
                    <li>Unity Core Essentials Tutorials</li>
                    <ul>
                        <li>Used Unity’s Learn system to learn basic game development skills</li>
                        <li>Learning the Unity software expanding on what was learned through friends</li>
                        <a href="https://learn.unity.com/pathway/unity-essentials" target="_blank"><button>Unity Core Essential Tutorial</button></a>
                    </ul>
                </ul>
                <h3>Week 2</h3>
                <ul>
                    <figure>
                        <img src="../img/pachinko.png" alt="Screenshot of the Pachinko Game">
                        <figcaption>Screenshot of the Pachinko Game</figcaption>
                    </figure>
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
                        <a href="https://learn.unity.com/u/btudesign" target="_blank"><button>Unity Learn Profile</button></a>
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
                    <figure>
                        <img src="../img/light-title.png" alt="UI Core: Word Space Example. Opening Menu.">
                        <img src="../img/light-menu.png" alt="UI Core: Word Space Example. Opening Menu.">
                        <figcaption>UI Core: Word Space Example. Opening Menu.</figcaption>
                    </figure>
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
                    <figure>
                        <img src="../img/NGParticles.gif" alt="Initial Particle Example">
                        <figcaption>Initial Particle Example</figcaption>
                        <img src="../img/trialrenderer.gif" alt="Trail Renderer Example">
                        <figcaption>Trail Renderer Example</figcaption>
                    </figure>
                    <li>Start Sprite Sheet Creation</li>
                    <ul>
                        <li>Each “asset” is in a tile to create a material for the particle system to go off of.</li>
                    </ul>
                    <figure>
                        <div class="flexIMG">
                            <div class="flexItem"><img class="smallerIMG" src="../img/pointerParticle.png" alt="Initial Cursor Particle">
                        <figcaption>Initial Cursor Particle</figcaption></div>
                            <div class="flexItem"><img class="smallerIMG" src="../img/playerParticle.png" alt="Initial Trail Particle">
                        <figcaption>Initial Trail Particle</figcaption></div>
                        </div>
                    </figure>
                </ul>
            <h2>Asset Creation</h2>
                <h3>Week 5</h3>
                <ul>
                    <li>Particle Asset Refinement</li>
                    <ul>
                        <li>Adjusted the color of the cursor asset to fit with the player's color palette.</li>
                        <li>Finalize the player's feet particles</li>
                    </ul>
                    <figure>
                        <div class="flexIMG">
                            <div class="flexItem"><img class="smallerIMG" src="../img/PFX_cursor.png" alt="First Pass Cursor">
                            <figcaption>First Pass Cursor</figcaption></div>
                            <div class="flexItem"><img class="smallerIMG" src="../img/PFX_cursor_particle.png" alt="First Pass Cursor Particle">
                            <figcaption>First Pass Cursor Particle</figcaption></div>
                            <div class="flexItem"><img class="smallerIMG" src="../img/PFX_player_trail.png" alt="First Pass Trail Particle">
                            <figcaption>First Pass Trail Particle</figcaption></div>
                        </div>
                        <img src="../img/particles.gif" alt="Particle Example GIF">
                        <figcaption>Particle Example GIF</figcaption>
                    </figure>
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
                    <figure>
                        <img src="../img/Player-Vitals-Mockup.png" alt="Initial Player Vitals">
                        <figcaption>Initial Cursor Particle</figcaption>
                        <img src="../img/ingame_ui.png" alt="Refined UI Vitals">
                        <figcaption>Refined UI Vitals</figcaption>
                    </figure>
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
                    <figure>
                        <img src="../img/bossHP_test_segmentBar.png" alt="Boss Vitals Examples 1">
                        <img src="../img/bossHP_test_segmented.png" alt="Boss Vitals Examples 2">
                        <img src="../img/boss-bone.png" alt="Boss Vitals Examples 3">
                        <img src="../img/unknown.png" alt="Boss Vitals Examples 4">
                        <img src="../img/bossHP_test_border.png" alt="Boss Vitals Examples 5">
                        <figcaption>Boss Vitals Examples</figcaption>
                    </figure>
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
                    <figure>
                        <img src="../img/charge.png" alt="Player Charge Bar for Attack">
                        <figcaption>Player Charge Bar for Attack</figcaption>
                    </figure>
                <h3>Week 9</h3>
                <ul>
                    <li>Created Tutorial Icons + a demonstration in engine</li>
                    <ul>
                        <li>Has collider to so player can't walk through the stone</li>
                        <li>Plans to have particle effect disappear upon using the control as if “absorbing” the knowledge from the spirits</li>
                    </ul>
                    <figure>
                        <div class="flexIMG">
                            <div class="flexItem"><img class="smallerIMG" src="../img/UI_tutorial_loreText.png" alt="Tutorial Lore Text Icon">
                            <figcaption>Lore Text Icon</figcaption></div>
                            <div class="flexItem"><img class="smallerIMG" src="../img/UI_tutorial_leftClick2.png" alt="Left Click Icon">
                            <figcaption>Left Click Icon</figcaption></div>
                            <div class="flexItem"><img class="smallerIMG" src="../img/UI_tutorial_rightClick2.png" alt="Right Click Icon">
                            <figcaption>Right Click Icon</figcaption></div>
                            <div class="flexItem"><img class="smallerIMG" src="../img/UI_tutorial_rock.png" alt="Tutorial Rock">
                            <figcaption>Tutorial Rock</figcaption></div>
                            <div class="flexItem"><img class="smallerIMG" src="../img/UI_tutorial_ground.png" alt="Ground Around Rock">
                            <figcaption>Ground Around Rock</figcaption></div>
                        </div>
                        <img src="../img/tutorial-icon-examples.gif" alt="Tutorial Example GIF">
                        <figcaption>Tutorial Example</figcaption>
                    </figure>
                </ul>
                <h3>Week 10</h3>
                <ul>
                    <li>Level Refinement for better game experience.</li>
                    <ul>
                        <li>Area 1: All basic controls (dash, grapple, attack) are in the linear path of the player forcing them to use the controls. This ensures any new player may learn how to play within the environment</li>
                        <li>Area 2: Encourages players to explore more of the level before reaching the area’s boss. Moving the location of the Lung Tree Boss hopefully helps achieve this goal.</li>
                    </ul>
                    <li>Minor refinements for the Beta of the game.</li>
                    <ul>
                        <li>Taking notes of what needs to be refined during the next term.</li>
                    </ul>
                    <figure>
                        <img src="../img/area1.png" alt="Initial Area 1">
                        <figcaption>Initial Area 1</figcaption>
                        <img src="../img/Untitled_Artwork.png" alt="Sketch for Tutorial Layout">
                        <figcaption>Sketch for Tutorial Layout</figcaption>
                        <img src="../img/tutorial.png" alt="First Pass Tutorial In Game">
                        <figcaption>First Pass Tutorial In Game</figcaption>
                        <img src="../img/area2.png" alt="Initial Area 2">
                        <figcaption>Initial Area 2</figcaption>
                        <img src="../img/area2-change1.png" alt="Area 2 Change Suggestion">
                        <figcaption>Area 2 Change Suggestion</figcaption>
                        <img src="../img/area2-change2.png" alt="Area 2 In Game">
                        <figcaption>Area 2 In Game</figcaption>
                    </figure>
                </ul>
                <h2>Conclusion</h2>
                <p>Overall, I have learned a lot with this more focused study with creating Unity 2D UI and assets.  Knowing general formats and the creation process for UI elements as well as particle effects have helped enhance and fine tune the player’s experience. If I were to have more time to work on creating more UI elements, I would look into how to make a basic mini map system as there was some player feedback on wanting one. I would also like to learn more level design to give a better flow in all the levels that are present as I am currently not fully satisfied with what we have. However, I am proud of the work I have done so far.</p>
        </div>
        <div class="back-to-top-wrapper">
            <a href="#top" class="back-to-top-link" aria-label="Scroll to Top">^</a>
        </div>
    </div>
</body>
<?php include('../include/footer.php'); ?>
</html>