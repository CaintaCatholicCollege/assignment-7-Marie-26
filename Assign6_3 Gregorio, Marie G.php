<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment6_3</title>
</head>
<body>
    
        <?php
            $age = 30;
            echo "You are $age years old and...<br/><br/>";
            function readytoVote($age){
                $voter = $age;
                if($voter<18){
                    echo "You are too young to vote.";
                }else{
                    echo "You are legal to vote.";
                }
            }
            echo readytoVote($age);
        ?>
    
</body>
</html>