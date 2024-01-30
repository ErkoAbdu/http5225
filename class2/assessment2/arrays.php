<!doctype html>
<html>
<head>
    <title>Links and Arrays</title>
</head>
<body>
    
    <h1>Links and Arrays</h1>
    
    <p>Use PHP echo and arrays to output the following link information:</p>
        
    <hr>
    
    <?php
    
    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'codecademy.png';
    $link['description'] = 'Learn to code interactively, for free.';
    
    ?>
        
    <?php echo '<p>' . 'If you want to learn to code, the best resource is ' . $link['name']. '</p>' ?>

    <?php $languages = array( 'PHP', 'HTML', 'JavaScript', 'CSS' );?>

    <?php echo '<p>' . 'My least favourite language besides C# is ' . $languages[3] . '</p>' ?>
</body>
</html>