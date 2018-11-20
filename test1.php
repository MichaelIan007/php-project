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
</head>
<body>
<section class="hero is-fullheight">
        <nav class="navbar is-success">
            <div class="container">
                <div class="navbar-brand">
                    <a href="index.php" class="navbar-item">Quiz</a>

                    <span class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Playstation Quiz<br>
                    Scroll Down
                </h1>
            </div>

        </div>
    </section>

    <div class="parallax"></div>

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

    <form action='grade1.php' method="post">

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
    <?php
	for ($i = 0; $i < count($quizq); $i++) { ?>

	<section class='box-set'>
			<h2>
			    Question <span class="num"> <?php echo $i+1 ?> </span>
			</h2>
			<p>
				<?php echo $quizq[$i]['qst']; ?>
			</p>
            
			<section class='grid'>
			<?php 
				$x = 0;
			for ($n = $i*4; $n < ($i+1)*4; $n++) { 
                ?>
            <section class='grid-item'>
				<input type='radio' name="<?php echo $i; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>"><label class="option" for="<?php echo $n ?>"><?php echo $quizq[$i][$x] ?></label>
            </section>
            <?php
					$x++; 
		
		} ?>
			</section>
            
	</section>
<hr>    
	<?php }
    ?>
<div class="parallax"></div>
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