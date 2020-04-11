<?php
// // each函数 和 foreach函数
// $arr1 = Array("a" => 11, "b"=>22);
// while($t = each($arr1)){
//     foreach($t as $key => $value){
//         print($key." => ".$value);
//         echo("<br>");
//     }
//     echo("<br>");
// }



// // list函数
// $arr1 = Array( 11, 22);
// list($aa, $bb) = $arr1;
// echo($aa);



// // array_combine函数
// $arr1 = Array(11=>"ee",22=>"rr",33=>"tt",44=>"yy");
// $arr2 = Array("a"=>"dd","b"=>"ff",'c'=>"gg");
// $arr3 = array_combine($arr1, $arr2);
// var_dump($arr3);



// // array_merge函数
// $arr1 = Array(11=>"ee",22=>"rr",33=>"tt",44=>"yy");
// $arr2 = Array("a"=>"dd","b"=>"ff",'c'=>"gg");
// $arr3 = array_merge( $arr2);
// var_dump($arr3);



// // array_fill函数
// $arr3 = array_fill(3,5,"aa");
// var_dump($arr3);



// // max()
// $arr1 = Array(11,22,33,44);
// $arr2 = Array("a"=>"dd","b"=>"ff",'c'=>"gg");
// echo(max($arr1));
// echo(max(19,11));
// echo(max("a","c"));



// // 检索函数
// $arr1 = Array(11,22,33,44);
// $arr2 = Array("a"=>"dd","b"=>"ff",'c'=>"gg");
// var_dump(in_array("a", $arr2));



// 集合
$arr2 = Array("a"=>"dd","b"=>"ff",'c'=>"gg","d"=>"hh");
var_dump(array_reverse($arr2));


?>