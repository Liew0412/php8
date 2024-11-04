<?php
$result=38;
$grade="A-";
//echo is used to display output
echo "lesson 1";
echo "<br>Your result is: $result and your grade is: $grade";
echo "<br>Your result is: ".$result. " and your grade is: ".$grade;

//if else statement
if($result>=50){
    echo "The result is $result and you have passed the exam <br>";
}
else{
    echo "The result is $result and you have failed the exam <br>";
}

for($a=1;$a<10;$a++){
    echo "The number is $a<br>";
}

//index array
$car=array("Toyota","Honda","Mazda","Subaru");
echo "I like $car[0] and $car[1] <br>";

//asscoiative array
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is ".$age['Peter']." years old <br>";

//multidimensional array
$car=array(
    array("Peter",22,18),
    array("Honda",15,13),
    array("Mazda",5,2),
    array("Subaru",17,15)
);
echo $car[0][0].": In stock: ".$car[0][1].", sold: ".$car[0][2]."<br>";
echo $car[1][0].": In stock: ".$car[1][1].", sold: ".$car[1][2]."<br>";
echo $car[2][0].": In stock: ".$car[2][1].", sold: ".$car[2][2]."<br>";
echo $car[3][0].": In stock: ".$car[3][1].", sold: ".$car[3][2]."<br>";
?>