<?php include 'include/header.php'; ?>
       <h1>Functions</h1> 
       <?php
//        defining function
function writeMessage(){
        echo"hello word <br/>";
}
// calling a function
writeMessage();
// functions with pararmeters
function addFunction($num1, $num2)
{
        $sum = $num1 + $num2;
        echo "the sum of $num1 and $num2 is: $sum <br/>";
}
addFunction(20,10);

?>
<?php require 'include/footer.php' ?>