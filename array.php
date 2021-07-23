<?php include 'include/header.php'; ?>
        <h1>Arrays</h1>
        <?php
        // variable
        $num = 3;
        // array
        $numbers = array(1,2,3,4,5,6,7,8,9,10,22,33,44,55,66,77,78);
        echo $numbers[0];
        $size = count($numbers);
        echo"<p> Array number size is $size</p>";
// print arrays
        for($count =0; $count < $size; $count++){
                echo "<p>$numbers[$count]</p>";

        }


        ?>
<?php require 'include/footer.php' ?>