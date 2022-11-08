<?php

$a = "Hello";
$b = "world";

echo $a . ", " . $b;

echo "<hr>";
echo "<img src=\"img/logo.jpg\">";

$a = 125;
$b = 0;

echo "<br>";
echo $a . " + " . $b . " = " . $a + $b;
echo "<br>";
echo $a . " - " . $b . " = " . $a - $b;
echo "<br>";
echo $a . " * " . $b . " = " . $a * $b;
echo "<br>";
echo $a . " / " . $b . " = " . $a / $b;
echo "<br>";
echo $a . " ** " . $b . " = " . $a ** $b;
echo "<br>";

if ($a > $b){
    echo $a . " > " . $b;
}
else if ($a < $b){
    echo $a . " < " . $b;
}
else{
    echo $a . " = " . $b;
}

function summ($num1, $num2){
    return $num1 + $num2;
}

function splitt($num1, $num2){
    if ($num2 == 0) return "<br>" . "<img src=\"data:image/jpeg;base64,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\">";

    return "<br>" . $num1 / $num2;
}

function raznost($num1, $num2){
    return $num1 - $num2;
}

function umnozhenie($num1, $num2){
    return $num1 * $num2;
}

function echoMath($num1, $operation, $num2){
    switch($operation){
        case "+":
            echo "<br>" . $num1 . " + " . $num2 . " = " . summ($num1, $num2);
        break;
            
        case "-":
            echo "<br>" . $num1 . " - " . $num2 . " = " . raznost($num1, $num2);
        break;
        
        case "*":
            echo "<br>" . $num1 . " * " . $num2 . " = " . umnozhenie($num1, $num2);
        break;
            
        case "/":
            echo "<br>" . $num1 . " / " . $num2 . " = " . splitt($num1, $num2);
        break;
            
        default:
            echo "Unknown error!";
    }
}

echo "<br>" . summ(12, 46);
echo splitt(5, 0.3);

echoMath(3463, "*", 0.3463463266356);

echo "<br>";
for($i=0;$i<=100;$i++){
    if ($i % 3 == 0){
        echo $i, " ";
    }
}

echo "<br>";

$i = 3;
while($i <= 100){
    echo $i, " ";
    
    $i += 3;
}

echo "<br>";


echo "<hr>";

$array = ["html", "css", "php", "js", "mysql"];

for($i=0;$i<count($array);$i++){
    echo $array[$i], " ";
}

foreach($array as $item){
    echo $item, " ";
}


echo "<hr>";

$users = [];

$users[0] = [
    "name" => "bob",
    "lastname" => "prostobob"
];
    
$users[1] = [
    "name" => "ahehrahaehr",
    "lastname" => "arharehaerhraerhaehrarhahra"
];

foreach($users as $key => $item){
    echo $key, ":<br>";
    foreach($item as $parameter => $value){
        echo " ", $parameter, "=", $value, ",<br>";
    }
}
    
?>
