<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xbox Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/quiz-styling.css" />
    <script src="main.js"></script>
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
                <h1 class="title">
                    Xbox Quiz<br>
                    Scroll Down
                </h1>
            </div>

        </div>
    </section>

    <div class="parallax"></div>

    <form action='grade2.php' method="post">

    <?php
	    $quizq = array (
            array('qst' => 'Which character is etched into the inside of the Xbox One S?','Master Chief','Nathan Drake','Marcus Fenix','Conker'),
            array('qst' => 'What is the name of the short-lived online game show on the Xbox 360?','Buzz!','1 vs 100','Weakest Link','Jeopardy'),
            array('qst' => 'Which of the following games launched on the original Xbox?','Oddworld: Munchs Oddysee','Gears of War','SSX Tricky','Call of Duty'),
            array('qst' => 'Which of the following franchises is an Xbox exclusive?','Gears of War','Uncharted','Mass Effect','Call of Duty'),
            array('qst' => 'Xbox multiplayer service has which name?','Xbox Online','Xbox Live','Xbox Connect','Xbox Gold'),
            array('qst' => 'What was the title of Xboxs multiplayer party game?','Crash Bash','Pinata Town','Fusion Frenzy','Halo Party'),
            array('qst' => 'Which company was originally making Nintendo exclusives before making Xbox exclusives?','Infinity Ward','Rare','Retro Studios','Capcom'),
            array('qst' => 'Marcus Fenix is the main character of which series?','Mass Effect','Halo','Killer Instinct','Gears of War'),
            array('qst' => 'What is the name of the artificial intelligence in the Halo series?','Siri','Red Queen','John','Cortana'),
            array('qst' => 'How many USB ports does the Xbox 360 model have?','3','4','5','6'),
            array('qst' => 'When was  Xbox One  revealed?','2010','2011','2012','2013'),
            array('qst' => 'What is the name of the head of Xbox?','Nick Powell','Phil Nill','Phil Spencer','None displayed'),
            array('qst' => 'What does Microsoft call the the Xbox Live user name you use when signing on to the network?','Handle','Usertag','Gamertag','Username'),
            array('qst' => 'Which game industry leader was originally hesitant to participate in the Xbox Live network, but now boasts some of Xboxs biggest titles?','Sega','Activision','Electronic Arts(EA)','Frostbite'),
            array('qst' => 'What is the name of the currency you can purchase from Microsoft and redeem on your Xbox to buy content from the Xbox Live Marketplace?','Microsoft Points','Gamer Cash','Xbucks','Bitcoin'),
            array('qst' => 'Can you connect to Facebook and Twitter using Xbox Live?','Maybe','Maybe not','True','False'),
            array('qst' => 'What sports broadcasting leader has partnered with Xbox to produce an interactive experience for Xbox Live users during its live sports event broadcasts?','2K Sports','CBS Sports','Fox Sports','ESPN'),
            array('qst' => 'Which of the following streaming music services was the first to be available using Xbox Live?','Twitch','Amazon Cloud Player','Last.fm','Pandora'),
            array('qst' => 'Which online video streaming service is available on Xbox Live, but has some content that is limited to use from a Web browser instead?','Netflix','Hulu Plus','Youtube','Twitch'),
            array('qst' => 'Which Platform is the best?','Xbox','Playstation','PC','All mentioned'),
        );
?>
    <?php
	for ($i = 0; $i < count($quizq); $i++) { ?>
        <div class="container">
            <div class="columns">
                <h2>
                    Question <span class="num"> <?php echo $i+1 ?> </span>
                </h2>
            </div>
            <div class="columns">
                <p>
                    <?php echo $quizq[$i]['qst']; ?>
                </p>
            </div>
            <div class="rows">
                <?php 
                    $x = 0;
                for ($n = $i*4; $n < ($i+1)*4; $n++) { 
                    ?>
                    <input type='radio' name="<?php echo $i; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>">
                    <label class="option" for="<?php echo $n ?>"><?php echo $quizq[$i][$x] ?></label>
                <?php
                        $x++; 
            } ?>
            </div>
            </div>
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