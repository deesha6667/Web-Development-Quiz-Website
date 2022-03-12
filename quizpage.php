<?php
	session_start();
	require_once('C:\xampp\htdocs\PHP\dbconfig\config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>www.quizocode.com | WebDevelopmentQuiz</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar background h-nav-resp">
    <ul class="leftnav v-class-resp">
      <div id="logo"><img src="quiztime.jpg" alt="WebDevelopmentQuiz"></div>
      <li><a href="index.html">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="quizpage.html">Quizzes</a></li>
      <li><a href="contactuspage.html">Contact</a></li>
    </ul>
    <div class="rightnav v-class-resp">
      <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
      <a href="https://www.twitter.com/" target="_blank" class="fa fa-twitter"></a>
      <a href="https://www.google.com/" target="_blank" class="fa fa-google"></a>
      <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a>
      <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
    </div>
    <div class="burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>\
	<form class="login" action="index.php">
        <button class="btn">LOG OUT</button>
    </form>
  </nav>
  
  
  <div class="page">
  <h1>WELCOME 
  <?php echo $_SESSION['Email']; ?>
  </h1>
    <h1>Get Started</h1>
    <p class="quizpara">Learn to design and build professional website</p>
    <h1>Select Your Quiz</h1>
    <p class="quizpara">Test your knowledge with Quizocode's basic quiz made especially for beginners in webdevelopment.
      There are 3 quizzes for each subject. Pass all the tests and get a Certificate of achievement!</p>
    <h1>The Test & Your Score</h1>
    <p class="quizpara">The test contains 10 questions and there is no time limit. The test is not official, it's just a
      nice way to see how much you know about webdevelopment. You will get 2 points for each correct answer. At the end
      of the Quiz, your total score will be displayed out of 100% maximum score. At the end of the quiz you can see all
      the questions with the right answers.</p>
    <div class="archive">
      <article class="article">
        <img src="images/htmllogo.jpg" alt="HTML">
        <a href="Quizzes/htmlquiz-1.html" target="_blank">QUIZ-1</a>
        <a href="Quizzes/htmlquiz-2.html" target="_blank">QUIZ-2</a>
        <a href="Quizzes/htmlquiz-3.html" target="_blank">QUIZ-3</a>
      </article>
      <article class="article">
        <img src="images/csslogo.jpg" alt="CSS">
        <a href="Quizzes/cssquiz-1.html" target="_blank">QUIZ-1</a>
        <a href="Quizzes/cssquiz-2.html" target="_blank">QUIZ-2</a>
        <a href="Quizzes/cssquiz-3.html" target="_blank">QUIZ-3</a>
      </article>
      <article class="article">
        <img src="images/jslogo.jpg" alt="JavaScript">
        <a href="Quizzes/jsquiz-1.html" target="_blank">QUIZ-1</a>
        <a href="Quizzes/jsquiz-2.html" target="_blank">QUIZ-2</a>
        <a href="Quizzes/jsquiz-3.html" target="_blank">QUIZ-3</a>
      </article>
      <article class="article">
        <img src="images/phplogo.jpg" alt="php">
        <a href="Quizzes/phpquiz-1.html" target="_blank">QUIZ-1</a>
        <a href="Quizzes/phpquiz-2.html" target="_blank">QUIZ-2</a>
        <a href="Quizzes/phpquiz-3.html" target="_blank">QUIZ-3</a>
      </article>
      <article class="article">
        <img src="images/pythonlogo.png" alt="Python">
        <a href="Quizzes/phpquiz-1.html" target="_blank">QUIZ-1</a>
        <a href="Quizzes/phpquiz-2.html" target="_blank">QUIZ-2</a>
        <a href="Quizzes/phpquiz-3.html" target="_blank">QUIZ-3</a>
      </article>
      <article class="article">
        <img src="images/bslogo.png" alt="Bootstrap">
        <a href="Quizzes/bsquiz-1.html" target="_blank">QUIZ-1</a>
        <a href="Quizzes/bsquiz-2.html" target="_blank">QUIZ-2</a>
        <a href="Quizzes/bsquiz-3.html" target="_blank">QUIZ-3</a>
      </article>
    </div>

    <h1>Select your Books</h1>
    <div class="archive">
      <article class="article">
        <img src="images/htmlbook.jpg" alt="Book">
        <a href="#" target="_blank">Click to Order</a>
      </article>
      <article class="article">
        <img src="images/htmlbook2.jpg" alt="Book">
        <a href="#" target="_blank">Click to Order</a>
      </article>
      <article class="article">
        <img src="images/htmlbook3.jpg" alt="Book">
        <a href="#" target="_blank">Click to Order</a>
      </article>
      <article class="article">
        <img src="images/htmlbook4.jpg" alt="Book">
        <a href="#" target="_blank">Click to Order</a>
      </article>
    </div>
  </div>

  <footer class="background">
    <p class="textfooter">
      Copyright &copy; 2020 - www.quizocode.com - All Rights Reserved
    </p>>
  </footer>
  
  <?php 
	if(isset($_POST['LOGOUT']))
	{
		session_destroy();
		header('location: login.php');
	}
  ?>
</body>

</html>