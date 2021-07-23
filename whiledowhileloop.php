<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>While do while loop</title>
</head>
<body>
        <h1>While loop</h1>
        <?php
        $grade = 0;
        // while($grade < 10)
        // {
        //         echo'<p>  i am less than 10 </p>';
        // }

                while($grade < 10){
                        echo'<p>  i am less than 10 </p>';
                        $grade++;
                }
                echo'<p>  exit loop </p>';


?>
<!-- post condtion loop -->
        <h1>while do</h1>
        <?php
        do{
                echo'<p>  i am do while loop </p>';
                $grade++;
        }
        while($grade <10);
        ?>





<?php require 'include/footer.php' ?>