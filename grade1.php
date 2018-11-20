<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<header>
		<h1>Playstation Results</h1>
	</header>
<?php
	$qanswers = array('3', '1', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2');
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
				case ($total >= 16) :
					?>
						<section class="excellent">
							<div class="score"><?php echo $total; ?><span>/20</span></div>
							<h1>
								Congratulations
							</h1>
							<p></p>
								This is excellent, however, even though you've just achieved a perfect score, I'm sure Evan would have found some way to achieve better.
							</p>
						</section>
					<?php
					break;
				
				case ($total >= 10 && $total < 16):
					?>
						<section class="okay">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h1>
								Uhm...
							</h1>
							<p>
								Somebody forgot to do their homework. This is terribly un-Evan-like of you.
							</p>
						</section>
					<?php
					break;
				
				case ($total < 10 && $total >= 5):
					?>
						<section class="bad">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h1>
								IDK...
												
							</h1>
							<p>
								Ugh, are you even trying?		
							</p>
						</section>
					<?php
					break;
				
				case ($total < 5):
					?>
						<section class="bad">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h1>
								Haha, what?!
												
							</h1>
							<p>
								This score is absolutely f***ing terrible. I can't believe people like you have actually survived natural selection.		
							</p>
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