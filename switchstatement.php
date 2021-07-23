<?php include 'include/header.php'; ?>
        <h1>PHP Primer - Switch Statement</h1>
        <?php
        $grade = 'A';
        switch($grade){
                case'A':
                        echo'You are a superstar';
                        break;
                case'B':
                        echo'you are great';
                        break;
                default:
                        echo'You have failed';
        }



        ?>
<?php require 'include/footer.php' ?>