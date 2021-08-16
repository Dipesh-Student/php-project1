<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="main">
        <?php 
        include("function/basicmath.php");
        echo basicmath::badd(10,20);
        echo basicmath::palindrome(2002);
        if(basicmath::palindrome(20023)){
            echo "is palindrome";
        }
        else{
            echo "not a palindrome";
        }
        ?>
    </div>
</body>
</html>