<?php
//    echo "Hello World!";
//    echo time();
/*
function add ($param1,$param2){
    return $param1 + $param2;
}


$a = $_GET['a'];
$b = $_GET['b'];


echo add ($a, $b);

//echo "a+b=".($a+$b);

echo "<br>";
*/

/*
for($i=0;$i<10;$i++){
    echo $i."<br>";

}
*/
require_once("database.php");
require_once("models/articles.php");

$articles = articles_all;

include("views/articles.php")
?>