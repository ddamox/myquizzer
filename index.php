<?php include "database.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title> myquizzer </title>
        <link rel= "stylesheet" href ="css/style.css" type = "text/css"/>

    <body>
        <header>
            <div class = "container">
                <h1> php quizzer by spencer </h1>
            </div>
        </header>
        <main>
            <div class = "container">
            <h2> php Knowledge </h2>
            <P> This is a multiple choice quiz </p>
            <ul>
                <li> <strong> Number of Questions:  </strong> 5 </li>
                <li> <strong> Type:  </strong> multiple choice </li>
                <li> <strong> Estimated time:  </strong> 4 minutes </li>
            </ul>
            <a href = "questions.php?n=1" class = "start"> Start Quiz </a>
            </div>
        </main>
        <footer>
            <div class = "container">
                copyright &copy: 2017 dspencer
                
            </div>
        </footer>
        

    </body>
    </head>
</html>