<?php include 'include/header.php'; ?>
        <h1>Date and Time Manipulation</h1>
        <?php
        $datenow =getdate();
        echo "<p> Todays date:</p>";
        echo  $datenow['mday'].'<br/>';
        echo $datenow['mon'].'<br/>';
        echo $datenow['year'].'<br/>;

        


        ?>
</body>
</html>