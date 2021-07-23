<?php include 'include/header.php'; ?>
        <h1>PHP Primer - For loop</h1>
        <?php
        // for loop 
        for($count =0; $count <10; $count++){
                echo '<p> Hello Nation</p>';
        }

        for($count = 0; $count < 10; $count++)
        {
                echo "The count is: $count";
                echo'</br>';
        }

        ?>
<?php require 'include/footer.php' ?>