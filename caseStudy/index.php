<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI-IM | Case Study</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico.png">
</head>
<body>
<?php include('../include/header.php'); ?>
    <div class="container">
        <h1>Case Study</h1>
        <div class="contain">
        <img src="" alt="Town Bus Stop Hero IMG">
        <h3>Overview</h3>
            <p>I am Britney Tu, a student studying UX and UI at Drexel University. This project was about experimenting applying 3D media on the web using THREE.js. I ended up going with a 3D model that a user can interact with. Overall I believe this project was useful with applying 3D media onto the web.</p>
        <h3>Context & Challenge</h3>
            <p>I took this class to learn more about unity and how to create games. I wanted to go more in depth with game design and general programing within games that Unity was the choice to go with.</p>
            <p>This class was offered as an elective and it gave me the opportunity to further develop my skills as a designer within the field. The goals of the class was to give a basic understanding of UI designing and developing in Unity which aligned with my own goals to do the same. It was about a 10 week long course which by the end of it I would create a simple experience with three interactable objects within the world that would enhance the user experience.</p>
            <p>Once this experience is completed, it will prove to me, my peers, and future employers that I have the skills to make interactable UI within Unity.</p>
        <h3>Process and Insight</h3>
                <p>As this project is to highlight the skills I have learned in the class, it is intended to be used as a portfolio piece. The project will be presented within a webpage using WebGL to allow easier ways to distribute the project as well as to allow users to interact with the world themselves on their own PC.</p>
                <p>For the general design, I have chosen a town environment from Unity Asset Store to be able to focus on creating the interaction based on a predetermined space. From here I selected three objects to create user interactions from: ATM, Vending Machine, and Bus Stop. Based on these objects I came up with three potential interactions.</p>
                <ul>
                    <li>Menu on top of the vending machine.</li>
                        <ul>
                            <li>When interacting with a vending machine, a pop up will show up. This will allow a user to select from a few options of "drinks" that are accompanied by a sound effect.</li>
                        </ul>
                    <li>Text status update on sign.</li>
                        <ul>
                            <li>The bus stop signs when interacted with will change the lighting within the environment. Some text will show up on the sign to indicate there was a status update..</li>
                        </ul>
                    <li>Menu on top of the ATM.</li>
                        <ul>
                            <li>When interacting with an ATM, a UI will show up in front of the ATM to increase and decrease a number.</li>
                        </ul>
                </ul>
                <p>From here I set out to customize the environment to fit the class requirements. I blocked off areas of the map to ensure the users can't stray too far away from the interactable objects. I also removed some built in objects with readable text so as to not distract the player from the core goal of the project making it easier to highlight what I want to within the environment.</p>
            <h4>Prototype</h4>
                <p>Once the environment was made ready I started to create the base interactions of the scene. I started with the vending machine as I thought it was the simplest as it was only to play SFX upon hitting buttons, it doesn't change the world directly or have a need to save any information. If I was able to create this basic interaction with the vending machine without any errors, it can show at the minimum that I was able to create an interactable object with an interactable menu.</p>
            <h4>Code/Dev</h4>
                    <!-- <img src="menu_img.png" alt="original drop down"> -->
                <p>One aside from the interactions I wanted to add as per requirement of the class, I included a built-in way to reset the game experience without having the user refresh their browser. I went with using the “R” key as it represents “restart”, “reset”, etc.</p>
                <ul><pre>
void Update()
{
if (Input.GetKeyDown(KeyCode.R))
{
    SceneManager.LoadScene(SceneManager.GetActiveScene().name); // loads current scene
}
}
                </pre></ul>
        <h3>Solution</h3>
            <p id="final">The following link is to the finished product and a description of the various interaction within the environment.</p>
            <ul>
                <li>Player Movement</li>
                    <ul>
                        <li>WASD or arrow keys to move</li>
                        <li>Right-click and drag to rotate camera</li>
                    </ul>
                <li>Bus Stop</li>
                    <ul>
                        <li>Select one of three choices to change time of day.</li>
                        <li>Lighting changes based on time of day selected</li>
                        <li>Different music plays based on choice</li>
                    </ul>
                <li>Vending Machine</li>
                    <ul>
                        <li>Interacting with the vending machine plays various SFX</li>
                        <li>Cash inserting, items dropping, and coin change.</li>
                    </ul>
                <li>ATM</li>
                    <ul>
                        <li>Interact with the ATM to adjust the account balance.</li>
                        <li>SFX plays when pressing different buttons on the UI</li>
                        <li>Balance value is saved throughout the experience until the page is refreshed or "R" is used.</li>
                    </ul>
                <a href="../final" target="_blank"><button>Unity UI Final Project</button></a>
            </ul>
        <h3>Results</h3>
            <p>Overall I am happy with the work I did for the class. I learned a general flow of how to set up a UI within Unity within a 3D environment. In the future, if I had more time to work on this environment, I would add more effect, volume control, and more that would help with the user experience when being within the world.</p>
    </div>
    </div>
</body>
<?php include('../include/footer.php'); ?>
</html>