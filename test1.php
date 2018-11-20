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
            array('qst' => 'What year did the original PlayStation release in North America?','1993','1994','@1995','1996'),
            array('qst' => 'What was the first game to require the use of the Dual Analog/Dualshock controller?','@Ape Escape','Spyro The Dragon','Metal Gear Solid','Syphon Filter'),
            array('qst' => 'Who is the main character of the original Metal Gear Solid?','Crash Bandicoot','Simon Belmont','Big Boss','@Solid Snake'),
            array('qst' => 'What is the name of the fruit collected by Crash Bandicoot?','Apple Fruit','Kito Fruit','@Wumpa Fruit','Diggi Fruit'),
            array('qst' => 'Chris Redfield is the main character of what game?','Silent Hill','Dino Crisis','Ape Escape','@Resident Evil'),
            array('qst' => 'In the very first Uncharted game, Nathan Drake is looking for which treasure?','Ark Of The Covenant','Pirate Treasure','@El Dorado','Shambala'),
            array('qst' => 'What is the name of the hero in God of War?','Mars','Zeus','Kratos','Hermes'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
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