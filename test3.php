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
                    PC Quiz<br>
                    Scroll Down
                </h1>
            </div>

        </div>
    </section>

    <div class="parallax"></div>

    <form action='grade3.php' method="post">

    <?php
	    $quizq = array (
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
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
            array('qst' => 'question','answer','answer','answer','answer'),
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