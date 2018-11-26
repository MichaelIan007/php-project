<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PC Quiz</title>
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
                    PC Quiz<br>
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
            <h1>Do you know PC?</h1>
            <br>
            <h2>Question 1 awaits you...</h2>
            <p>Scroll Down</p>
        </div>
    </section>
    <div class="parallax"></div>
    <!-- Using a form to display questions and sends the results to grade1.php-->
    <form action='grade3.php' method="post">
    <!-- Php with an array inside an array that defines questions / answers 1 -> 20 -->
    <?php
	    $quizq = array (
            array('qst' => 'In Uncharted 4, which PlayStation 1 title does Nathan Drake play?','Tomb Raider','Mortal Kombat','Crash Bandicoot','Final Fantasy 7'),
            array('qst' => 'How many Power Stars can you collect in Super Mario 64?','120','110','100','101'),
            array('qst' => 'In what year was the first game in the Halo series released?','2000','2002','2001','2003'),
            array('qst' => 'Who features on the cover of UFC 2 alongside Ronda Rousey?','Sage Northcutt','Brock Lesnar','Jose Aldo','Conor Mcgregor'),
            array('qst' => 'What is the highest selling home console of all time?','Xbox 360','Nintendo Wii','Playstation 2','Atari 2600'),
            array('qst' => 'In the Legend of Zelda: The Wind Waker, how many Trifoce Shards do you have to collect?','8','9','3','6'),
            array('qst' => 'In Overwatch, what was D. Va(s) former profession?','Professional Gamer','Professional Footballer','Professional Wrestler','Professional Skateboarder'),
            array('qst' => 'In the Metroid Series, what is the name of the main protagonist?','Solid Snake','Samus Aran','Seamus Morgan','Sephiroth'),
            array('qst' => 'Who is the creator of the Super Mario Bros series?','Hideo Kojima','Ralph Baer','Shigeru Miyamoto','Nolan Bushnel'),
            array('qst' => 'Which game was just released (11 November 2011) by Bethesda Softworks?','Elder Scrolls V: Skyrim','Elder Scrolls II: Skyrim','Battlefield 3','Modern Warefare 3'),
            array('qst' => 'In the 1998 FPS classic Half Life, what is the name of the facility that Gordon Freeman works in?','Nova Prospekt','Black Mesa','Xen Research Facility','The Citadel'),
            array('qst' => 'In Studio Pixel(s) 2004 freeware platformer Cave Story, what is the name of the final boss?','Mimiga','Ballos','Ma Pignon','The Doctor'),
            array('qst' => 'In the 2004 Troika RPG Vampire the Masquerade: Bloodlines you meet this vampire lady, Jeanette. What is Jeanette(s) "twin sister" called?','Daret','Lisa','Theresa','Emily'),
            array('qst' => 'What is the most recent Windows operating system made available to the public?','Windows 10.5','Windows 10.1','Windows 10.3','Windows 8.7'),
            array('qst' => 'What do the initials WWW stand for?','World Wide Web','World Word Web','World Worm Web','None displayed'),
            array('qst' => 'What software is used to view web pages on the internet?','Web Browser','Page Browser','Internet Browser','All displayed'),
            array('qst' => 'The instructions that tell the computer what to do and how to do it?','Hardware','Software','Mouse','Monitor'),
            array('qst' => 'The heart (and brains) of the computer is the...','Ram','Rom','Motherboard','CPU'),
            array('qst' => 'RAM stands for...','Really Awesome Monkeys','Rotten Apple Monkey','Random Access Memory','Raspberry and Mayonaise'),
            array('qst' => 'Which Platform is the best?','PC','Playstation','Xbox','All Mentioned',),
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