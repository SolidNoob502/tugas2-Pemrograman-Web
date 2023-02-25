<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2a</title>
</head>
<body>
    
    <?php 
    
        $first_name = "Nayara";
        $last_name = "Paul";

        for ($i = 1; $i <= 100; $i++) {

            if ($i % 3 == 0 && $i % 5 == 0) {

                echo $first_name . " " . $last_name . "<br>";
                
            }
            elseif ($i % 5 == 0) {
                
                echo "$last_name <br>";
                
            }
            elseif ($i % 3 == 0) {
                
                echo "$first_name <br>";

            }
            else {

                echo "$i <br>";

            }
            

        }
    
    ?>

</body>
</html>