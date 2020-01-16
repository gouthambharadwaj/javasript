<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo strlen("hello world");
    echo "<br>";
    echo str_word_count("hello world");
    echo "<br>";
    echo strrev("hello world");
    echo "<br>";
    echo strpos("hello world","world");
    echo "<br>";
    echo str_replace("world","everyone","hello world");
    ?>
</body>
</html>