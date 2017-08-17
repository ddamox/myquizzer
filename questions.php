<?php include "database.php" ?>
<?php
    // set question number
    $number = (int)$_GET['n'];
    
    $query = "SELECT * FROM 'question' WHERE 'question_number' = $number";
    //get result
    $result = $mysqli->query($query) or die ($mysqli->error);

    $question = $result->fetch_assoc();

?>

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
                <div class= "current">
                    Question  1 of 5   
                </div>
                <p class = "question">
                   <?php  echo($question[text]); ?>
                </p>
                <form method ="post" action = "process.php">
                    <ul class= "choices">
                        <li> <input name = "choice" type = "radio" value = "1"/> PHP: Hypertext Preprocessor </li>
                        <li> <input name = "choice" type = "radio" value = "1"/> PHP: Preprocessor home </li>
                        <li> <input name = "choice" type = "radio" value = "1"/> PHP: prepocessed hypertext </li>
                        <li> <input name = "choice" type = "radio" value = "1"/> PHP: personal hypertext </li>
                    </ul>
                    <input type = "submit" value = "submit"/>
                </form>
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