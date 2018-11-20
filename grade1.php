<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bulma.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/quiz-styling.css" />
    <script src="main.js"></script>
</head>
<body>
    
<header>
		<h1>Playstation Results</h1>
	</header>
<?php
	$qanswers = array('2', '0', '3', '2', '3', '2', '2', '0', '0', '2', '0', '1', '3', '3', '2', '1', '2', '1', '2', '1');
	$count=0;
	if (isset($_POST)) {
		$results = array();
		foreach ($qanswers as $qanswer) {
	
				if ($_POST[$count] == $qanswer) {
					array_push($results, $qanswer);
			}
			$count++;
	 	}
		$total = count($results);
			switch ($total) {
				case ($total > 15) :
					?>
						<section class="siteInfo">
							<div class="Awesomeness"><h1><?php echo $total; ?>/20</h1></div>
							<h1>
								Congratulations<br>
								You can formally Recognise yourself as A GAMER, I solute you Otaku.
							</h1>	
						</section>
					<?php
					break;
				
				case ($total > 10 && $total < 16):
					?>
						<section class="siteInfo">	
							<div class="alright"><h1><?php echo $total; ?>/20</div>

							<h1>
								Damn!<br>
								So close, yet not there...
							</h1>
						</section>
					<?php
					break;
				
				case ($total < 11 && $total > 5):
					?>
						<section class="siteInfo">	
							<div class="bad"><h1><?php echo $total; ?>/20</div>

							<h1>
								Wow!<br>			
								This is bad, please do some research and give it another go.	
							</h1>
						</section>
					<?php
					break;
				
				case ($total < 6):
					?>
						<section class="siteInfo">	
							<div class="Really-bad"><h1><?php echo $total; ?>/20</div>
							<h1>
								Oh my word....<br>	
								Not even close....
							</h1>
						</section>
					<?php
					break;
				default:
					break;
		}
	}
?>

	<section class="submit">
		<form action="index.php" method="post">
		<h2>Retake Test</h2>
		<input type="submit" value="Retake">
		
		</form>
	</section>

</body>
</html>