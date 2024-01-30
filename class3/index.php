<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'images/w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'images/mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';
        // echo '<a href = "' . $linkURL . '">' . $linkURL . '</a>';
        echo '<img src = " '. $linkImage . '"/>';
        echo '<p>' . $linkDescription . '</p>';
        ?>
        <?php
        if ($linkURL === ""){
            echo '<p>' . $linkURL . '</p>';
        }
        else{
            echo '<a href = "' . $linkURL . '">' . $linkURL . '</a>';
        }
        ?>
        <?php
            $randomGrade = ceil(rand(1,100));
            if($randomGrade < 60){
                echo '<p> Sorry to say, you failed and your family is disowning you. Your final grade is ' . $randomGrade . '</p>';
            }
            elseif($randomGrade < 70 && $randomGrade >= 61){
                echo '<p> Congrats!!! You passed but just by the skin of your teeth. Your final grade is ' . $randomGrade . '</p>';
            }
            elseif($randomGrade <75 && $randomGrade >= 71){
                echo '<p> You passed, could also do better though... ' . $randomGrade . '</p>';
            }
            elseif($randomGrade <80 && $randomGrade >= 76){
                echo '<p> You passed, keep it up. Final grade is ' . $randomGrade . '</p>';
            }
            elseif($randomGrade <85 && $randomGrade >= 81){
                echo '<p> well done! FInal grade is ' . $randomGrade .  '</p>';
            }
            elseif($randomGrade <90 && $randomGrade >= 88){
                echo '<p> Youre better than the majority! Your final grade is ' . $randomGrade . '</p>';
            }
            elseif($randomGrade > 90){
                echo '<p> The biggest brain around. Final grade is ' . $randomGrade . '</p>';
            }
        ?>
        <?php
        $randomDay = ceil(rand(1,7));

        switch($randomDay){
            case '1':
                echo '<p> Today is Monday</p>';
                break;
            case '2':
                echo '<p> Today is Tuesday</p>';
                break;
            case '3':
                echo '<p> Today is Hump Day</p>';
                break;
            case '4':
                echo '<p> Today is Thursday</p>';
                break;
            case '5':
                echo '<p> Today is Friday</p>';
                break;
            case '6':
                echo '<p> Today is Saturday</p>';
                break;
            case '7':
                echo '<p> Today is Sunday</p>';
                break;
        }
        ?>
    </body>
</html>
