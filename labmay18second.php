<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>
    <!--
        Write a program in PHP to read a text file.
    -->

    <?php
    $filename = "file.txt";
    $fileContent = file_get_contents($filename);
    echo $fileContent;
    ?>

</body>

</html>