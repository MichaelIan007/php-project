<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Playstation Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/quiz-styling.css" />
    <script src="main.js"></script>
    <!-- Added script tags to overwrite previous styles -->
    <style>
    .columns {
        text-align: center;
        line-height: 50px;
    }
    .rows {
        text-align: center;
        line-height: 30px;
        word-spacing: 10px;
    }
    </style>
</head>
<body>
<section class="hero is-fullheight">
        <nav class="navbar is-success">
            <div class="container">
                <div class="navbar-brand">
                    <a href="index.php" class="navbar-item">Quiz</a>
                </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="container">
                <!-- Title for Page -->
                <h1 class="title">
                    Playstation Quiz<br>
                    Scroll Down
                </h1>
            </div>

        </div>
    </section>
    <div class="parallax"></div>
    <!-- Introduction -->
    <section class="hero">
        <div class="content">
            <br>
            <h1>Do you know Playstation?</h1>
            <br>
            <h2>Question 1 awaits you...</h2>
            <p>Scroll Down</p>
        </div>
    </section>
    <div class="parallax"></div>
    <!-- Using a form to display questions and sends the results to grade1.php-->
    <form action='grade1.php' method="post">
    <!-- Php with an array inside an array that defines questions / answers 1 -> 20 -->
    <?php
	    $quizq = array (
            array('qst' => 'What year did the original PlayStation release in North America?','1993','1994','1995','1996'),
            array('qst' => 'What was the first game to require the use of the Dual Analog/Dualshock controller?','Ape Escape','Spyro The Dragon','Metal Gear Solid','Syphon Filter'),
            array('qst' => 'Who is the main character of the original Metal Gear Solid?','Crash Bandicoot','Simon Belmont','Big Boss','Solid Snake'),
            array('qst' => 'What is the name of the fruit collected by Crash Bandicoot?','Apple Fruit','Kito Fruit','Wumpa Fruit','Diggi Fruit'),
            array('qst' => 'Chris Redfield is the main character of what game?','Silent Hill','Dino Crisis','Ape Escape','Resident Evil'),
            array('qst' => 'In the very first Uncharted game, Nathan Drake is looking for which treasure?','Ark Of The Covenant','Pirate Treasure','El Dorado','Shambala'),
            array('qst' => 'What is the name of the hero in God of War?','Mars','Zeus','Kratos','Hermes'),
            array('qst' => 'What was the name of the camera that was released for the PlayStation 2?','EyeToy','Playstation Camera','EyeStation','Kinect'),
            array('qst' => 'The main character of Final Fantasy VII, Cloud, uses which weapon?','Buster Sword','Mega Blaster','Master Sword','Morning Star'),
            array('qst' => 'The PlayStation was first designed as a companion to this gaming console?','Sony DreamCast','Gameboy','Super Nintendo','Sega Genesis'),
            array('qst' => 'How many games were available for the PlayStation when it was first released?','17','37','97','157'),
            array('qst' => 'What was the best-selling game for the original PlayStation console?','Grand Theft Auto','Gran Turismo','Super Mario','Final Fantasy'),
            array('qst' => 'What year did Sony discontinue the original PlayStation?','1998','2000','2002','2004'),
            array('qst' => 'What year was the PlayStation 2 released?','1997','1998','1999','2000'),
            array('qst' => 'What year did the PlayStation 3 come out?','2002','2004','2006','2008'),
            array('qst' => 'The PS3 was the most expensive of the seventh generation consoles when it was released.','Yes but No','Yes','No','No but Yes'),
            array('qst' => 'What year did Sony release the first portable version of the PlayStation?','2001','2003','2005','2007'),
            array('qst' => 'When did DualShock controllers come out?','1996','1998','2002','2006'),
            array('qst' => 'What was the mythical creatures name which had the body of a snake and could turned<br> a person to stone when one would look into her eyes','Poseidon','Minotaur','Medusa','Wyvern'),
            array('qst' => 'Which Platform is the best?','All that follow','Playstation','Xbox','PC'),
        );
    ?>
    <!-- Php function to displays Questions / answers to quiz -->
    <?php
	for ($i = 0; $i < count($quizq); $i++) { ?>
        <div class="main-container">
            <div class="column">
                <!-- Displays heading "question 1" -> "question 20" -->
                <h2>
                    Question <span class="num"> <?php echo $i+1 ?> </span>
                </h2>
                <!-- Displays the question being asked 1 -> 20 -->
                <p>
                    <?php echo $quizq[$i]['qst']; ?>
                </p>
                <?php 
                    $x = 0;
                    for ($n = $i*4; $n < ($i+1)*4; $n++) { 
                ?>
                <p class="left">
                <br>
                <!-- Shows the radio box for selecting your answer and displaying 4 answers to all questions -->
                    <input type='radio' name="<?php echo $i; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>">
                    <label class="option" for="<?php echo $n ?>"><?php echo $quizq[$i][$x] ?></label>
                </p>
            <?php
                $x++; 
            } ?>
            </div>
        </div>
    <hr>    
    <?php 
    }
    ?>
    <div class="parallax"></div>
    <!-- Text with the | Submit | button -->
    <section class="siteInfo">
        <h2>Click on the | Submit! | button<br>
            and we will see if you are<br>
            "THE GAMER"
        </h2><br>
        <input type="submit" value="Submit!">
        <br>
        <br>
	</section>
	</form>
</body>
</html>