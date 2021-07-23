<!DOCTYPE html>
<?php include 'include/header.php'; ?>
        <!-- <h3 style ="color: red"></h3> -->
        <?php
        //  an if statement --
        echo '<h2> if statement <h2>';

        $grade = 50;
        if($grade >= 50) {
                echo '<h3 style ="color: red"> YOU HAVE PASSED</h3>';
        }
        else {
                echo '<h3  style ="color: green"> YOU HAVE FAILED</h3>';

        }
        $grade = 'A';
        if($grade =='A'){
                echo'<h2>You are a hero</h2>';
        }
        elseif($grade =='B'){
                echo '<h2> you did well</h2>';
        }
        else{
                echo'failed';
        }

        ?>
<?php require 'include/footer.php' ?>