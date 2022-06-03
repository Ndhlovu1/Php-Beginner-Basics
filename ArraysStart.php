<?php
/*
    @Author_Phoenix
    Array -> a Var that contains multiple values!
    Php can contain different data types in its array
    To access a var from an array, u must use an index.
    Arrays use numbers as indices to point to the values they have.
    The numbers start from 0 and its the first value.
    Hence n-1 = index

    

*/

$myArray = array('one', 2, '3');
echo $myArray[0]." is the position to normally be in ";
echo " ";
echo $myArray[1];
echo " ";
echo $myArray[2];
//Assigning a value to an array by increasing the indice
$myArray[3] = 'fourteen';

//Assigning a value to an array by leaving empty brackets:
    $myArray[] = 'the fifth element';

echo "<p>".$myArray[3]."<br>".$myArray[4];

  

?>





