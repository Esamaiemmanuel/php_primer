<?php include 'include/header.php'; ?>
        
        <h1>Hello world</h1>
        <?php
        echo "hey";
        echo "<br/>";
        ?>
        <?php
        // varriables
                $name = "tanz";
                $age = 21; 
                echo $name;
        // concuntination 
                echo "<h1> My name is: ".$name." </h1>";
                echo "<h1> My name is: ".$age." </h1>";
        ?>
<?php require 'include/footer.php' ?>