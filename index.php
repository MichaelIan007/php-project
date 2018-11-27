<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gaming Platform Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="css/bulma.css" />
    <script src="main.js"></script>
    <!-- Added style tags to overwrite previous styling -->
    <style>
    a {
        color: white;
    }
    </style>
</head>
<body>
    <!-- Head of page starts -->
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
                        <a href="#q1" class="navbar-item">Quiz 1</a>
                        <a href="#q2" class="navbar-item">Quiz 2</a>
                        <a href="#q3" class="navbar-item">Quiz 3</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Gaming Quizes<br>
                    Scroll Down 
                </h1>
            </div>
        </div>
    </section>
    <!-- Head of page ends -->
    <div class="parallax"></div>
    <!-- Introduction -->
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
    <!-- 3 Optional quiz categories -->
    <section class="hero is-fullheight">
        <div class="container1">
            <div class="rows">
                <div class="row">
                <!-- Quiz 1 -->
                <h2 id="q1" class="header-2">Quiz 1:</h2>
                <a href="test1.php">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="img/pslogo.jpg" alt="Paris" style="width:300px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h2><u>Playstation</u></h2>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <br>
                <!-- Option -->
                    <h2>OR</h2>
                <div class="row">
                <!-- Quiz 2 -->
                    <h2 id="q2" class="header-2">Quiz 2:</h2>
                <a href="test2.php">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="img/xboxlogo.jpg" alt="Paris" style="width:300px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h2><u>Xbox</u></h2>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
                <br>
                <!-- Option -->
                    <h2>OR</h2>
                <div class="row">
                <!-- Quiz 3 -->
                    <h2 id="q3" class="header-2">Quiz 3:</h2>
                <a href="test3.php">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="img/pclogo.jpg" alt="Paris" style="width:3    00px;height:200px">
                            </div>
                            <div class="flip-box-back">
                                <h2><u>PC</h2>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </section>

    <div class="parallax" id="footer"></div>
    <!-- Footer -->
    <footer class="footer">
        <h2>Brought to you by R3kt-Tech</h2>
    </footer>
    <!-- Javascript function for burger in header -->
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