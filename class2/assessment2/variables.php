<!doctype html>
<html>
<head>
    <title>Links and Variables</title>
</head>
<body>
    
    <h1>Links and Variables</h1>
    
    <p>Use PHP echo and variables to output the following link information:</p>
        
    <hr>
    
    <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    ?>

    <?php echo '<h2>' . $linkName . '</h2>'?>
    <a href = "<?php echo '<strong>' . '<em>' . $linkURL . '</em>' . '</strong>' ?>"> <?php echo "https://www.codecademy.com/"?> </a>
    <img src = '<?php echo $linkImage; ?>'>
    <?php echo '<p>' . $linkDescription . '</p>' ?>
        
</body>
</html>