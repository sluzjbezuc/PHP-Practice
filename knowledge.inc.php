
<?php
$a = 'PHP ';
$b = 'is ';
$c = 'cool!'; 
?>

<?php
//If-else
  $price = 15;

  if($price >= 15 && $price <= 20)
      $d = 'This number is between 15 and 20';
        elseif(!$price || (!is_int($price) || !is_float($price))){
            echo $price, ' is not a number or was not defined!' . "<br>" ;
        }
      else{
        echo 'This number is not in range of [15, 20]';
      }
?>

<?php
//Practicing with data types

$var1 = 5;
$var2 = 3.1415;
$var3 = "Hello World";
echo $var1, ' is of ', getType($var1), ' type.' . "<br>" ; 
echo $var2, ' is of ', getType($var2), ' type.' . "<br>"; 
echo $var3, ' is of ', getType($var3), ' type.' . "<br>";
?>

<?php
// Basic work with Array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "." . "<br>";
echo 'Cars are of ', getType($cars), ' type.' . "<br>";
echo "Full array: " . "<br>";
echo var_dump($cars) . "<br>";
?>

<?php
echo "Count to five: " . "<br>";
for($i = 1; $i <= 5; $i++) {
echo $i;
}
echo "<br>";
flush();
sleep(1);
?>