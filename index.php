<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="css/bulma.css" />
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

                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-end">
                        <a href="#" class="navbar-item">Quiz 1</a>
                        <a href="#" class="navbar-item">Quiz 2</a>
                        <a href="#" class="navbar-item">Quiz 3</a>
                        <a href="#" class="navbar-item">Contact</a>
                    </div>
                </div>

            </div>
        </nav>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Gaming Quizes
                </h1>
            </div>

        </div>
    </section>

    <div class="parallax"></div>

    <section class="hero is-fullheight">
        <div class="content">
            <br>
            <h1>Introduction</h1>
            <hr>
            <br>
            <h2>Hello and welcome!</h2>
            <br>
            <br>
            <p>
                This is just a friendly quiz to test not only your knowledge about gaming<br>
                but also your dedication to the "World of Games".<br>
            <br>
                Please scroll down and take your pick of one out of three quizes that are available, namely:<br>
                <ul>
                    <li>Playstation</li>
                    <li>Xbox</li>
                    <li>PC</li>
                </ul>
                <hr>
            <br>
                Once you are completed with the quiz and you are sure, submit by pushing the<br>
                submit button at the bottom and you will be presented with your results.
            <br>
                PS... This is a test to see if you have the right to call yourself a 'Gamer'.
            </p>
            <br>
        </div>
    </section>

    <div class="parallax"></div>

    <section class="hero is-fullheight">
        <div class="container1">
            <div class="rows">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="hovereffect">
                            <img class="image" src="/img/image1.jpg" alt="Quiz 1">
                        <div class="overlay">
                    <h2>Quiz 1:</h2>
				<p>
					<a href="#"><u>Playstation</u></a>
				</p>
                        </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="hovereffect">
                            <img class="image" src="/img/image2.jpg" alt="Quiz 2">
                        <div class="overlay">
                    <h2>Quiz 2:</h2>
				<p>
					<a href="#"><u>Xbox</u></a>
				</p>
                        </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="hovereffect">
                            <img class="image" src="/img/image3.jpg" alt="Quiz 3">
                        <div class="overlay">
                    <h2>Quiz 3:</h2>
				<p>
					<a href="#"><u>PC</u></a>
				</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    (function() {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#' +burger.dataset.target);

        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
        });
    })();
    
    </script>
</body>
</html>