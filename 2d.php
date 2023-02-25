<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checker Board</title>
    <link rel= "stylesheet" href= "board.css">
</head>
<body>
    
    <div class= "the-board">

        <?php 
        
            for ($i = 1; $i <= 5; $i++) {

                for ($j = 1; $j <= 5; $j++) {

                    if (($i + $j) % 2 == 0) {

                        echo "<div class= \"white\"></div>";

                    }
                    else {

                        echo "<div class= \"black\"></div>";

                    }

                }

                

            }
        
        ?>

    </div>

</body>
</html>