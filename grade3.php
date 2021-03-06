<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/quiz-styling.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
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
                    PC Quiz<br>
                    Scroll Down
                </h1>
            </div>

        </div>
    </section>
	<div class="parallax"></div>
<section class="hero is-fullheight">
<header>
		<h2>PC Results</h2>
	</header>
<?php
// the aswers to the questions from 1 till 20 //
	$qanswers = array('2', '0', '2', '3', '2', '0', '0', '1', '2', '0', '1', '1', '2', '1', '0', '3', '1', '3', '2', '0');
	$count=0;
	// calculates the results if the answer selected = the answer //
	if (isset($_POST)) {
		$results = array();
		foreach ($qanswers as $qanswer) {
	
				if ($_POST[$count] == $qanswer) {
					array_push($results, $qanswer);
			}
			$count++;
		 }
		// Displays this result if above 15 //
		$total = count($results);
			switch ($total) {
				case ($total > 15) :
					?>
						<section class="siteInfo">
							<div class="Awesomeness"><h2><?php echo $total; ?>/20</h2></div>
							<h2>
								Congratulations<br>
								You can formally Recognise yourself as A GAMER, I solute you Otaku.
							</h2>	
						</section>
					<?php
					break;
				// Displays this result if above 10 but below 16 //
				case ($total > 10 && $total < 16):
					?>
						<section class="siteInfo">	
							<div class="alright"><h2><?php echo $total; ?>/20</h2></div>

							<h2>
								Damn!<br>
								So close, yet not there...
							</h2>
						</section>
					<?php
					break;
				// Displays this result if below 10 but above 5 //
				case ($total < 11 && $total > 5):
					?>
						<section class="siteInfo">	
							<div class="bad"><h2><?php echo $total; ?>/20</h2></div>

							<h2>
								Wow!<br>			
								This is bad, please do some research and give it another go.	
							</h2>
						</section>
					<?php
					break;
				// Displays this result if = 0 but below 6 //
				case ($total < 6):
					?>
						<section class="siteInfo">	
							<div class="Really-bad"><h2><?php echo $total; ?>/20</h2></div>
							<h2>
								Oh my word....<br>	
								Not even close....
							</h2>
						</section>
					<?php
					break;
				default:
					break;
		}
	}
?>
<br>
<br>
<br>
</section>
	<section class="submit">
		<form action="index.php" method="post">
		<h2>Retake Test</h2>
		<!-- Added button which takes you back to the main menu if you would like to retake the test or select another one -->
		<input type="submit" value="Retake" class="submit-button">
		
		</form>
	</section>

</body>
</html>