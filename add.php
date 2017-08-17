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
                <h2> add a question </h2>
                <form method = "post" action = "add.php">
                    <p>
                        <label> Question Number </label>
                        <input type = "number" name="number">
                    </p>  
                    <p>
                        <label> Question Text </label>
                        <input type = "text" name="question_text">
                    </p>
                    <p>
                        <label> Choice #1: </label>
                        <input type = "text" name="choice 1">
                    </p>
                    <p>
                        <label> Choice #2: </label>
                        <input type = "text" name="choice 2">
                    </p>
                    <p>
                        <label> Choice #3: </label>
                        <input type = "text" name="choice 3">
                    </p>
                    <p>
                        <label> Choice #4: </label>
                        <input type = "text" name="choice 4">
                    </p>
                    <p>
                        <label> Choice #5: </label>
                        <input type = "text" name="choice 5">
                    </p>
                    <p>
                        <label> Correct choice number </label>
                        <input type = "number" name="correct choice">
                    </p>
                    <p>
                        <input type = "submit" namee="submit" value="submit">
                    </p>
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