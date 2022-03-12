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
            <div id="logo"><img src="images/quiztime.jpg" alt="WebDevelopmentQuiz"></div>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="quizpage.php">Quizzes</a></li>
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
        </div>
    </nav>

    <section class="background home" id="home">
        <div class="mainbox">
            <div class="firsthalf">
                <p class="heading">Quiz for All Web Developers</p>
                <p class="para">Presenting you the best combination of learning web development with fun quizzes. Any
                    web developer or web designer who has started working on HTML, CSS projects can try this quiz. It’ll
                    not only help to improve basic understanding of HTML and CSS knowledge but reveal those gaps that
                    are hard to find.</p>
                <div class="buttons">
                    <form class="login" action="login.php">
                    <button class="btn">Login</button>
                    </form>
                    <form class="login" action="signup.php">
                    <button class="btn">Sign Up</button>
                    </form>
                </div>
            </div>
            <div class="secondhalf">
                <img src="images/quiztime.jpg" alt="Quiz">
            </div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="paras">
            <p class="sectiontag heading">Quizzes are FUN !</p>
            <p class="sectionsubtag para">One tool becoming more common, especially in online education, is quizzes.
                They help with concentration, identify gaps in knowledge, build confidence and help children retain
                information. What's more - they're fun!</p>
            <p class="sectionsubtag para">Testing provides feedback to instructors and lets them know what is learned or
                what is not. Frequent
                testing encourages students to study. Having frequent quizzes and tests motivates study and reduces
                procrastination.</p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/700x700/?education,students,happy" alt="quiz" class="imgfluid">
        </div>
    </section>

    <section class="section section-left">
        <div class="paras">
            <p class="sectiontag heading">Learn Web Development with Quizzing...</p>
            <p class="sectionsubtag para">Web development is the building and maintenance of websites; it's the work
                that happens behind the scenes to make a website look great, work fast and perform well with a seamless
                user experience. Web developers, or 'devs', do this by using a variety of coding languages.</p>
            <p class="sectionsubtag para">Every Web Developer must have a basic understanding of HTML, CSS, and
                JavaScript.Responsive Web Design is used in all types of modern web development.</p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/700x700/?html,css,javascript" alt="quiz" class="imgfluid">
        </div>
    </section>

    <section class="section">
        <div class="paras">
            <p class="sectiontag heading">Save TIME Save MONEY</p>
            <p class="sectionsubtag para">There are a number of good stores from where you can buy books online. Though,
                the pricing of the books varies from store to store. You favorite online store might not be THE cheapest
                every time. So depending on how much you're saving and if your book's availability, you might want to
                get a book from somewhere other than your preferred store. We help you do all this in just one click!
            </p>
        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/700x700/?books,learning" alt="quiz" class="imgfluid">
        </div>
    </section>
    <hr>


    <footer class="background">
        <p class="textfooter">
            Copyright &copy; 2020 - www.quizocode.com - All Rights Reserved
        </p>>
    </footer>
    <script src="resp.js"></script>
</body>

</html>